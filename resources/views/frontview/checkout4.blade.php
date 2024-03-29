@extends('frontview.frontmaster')
@section('title')
    <title>Laptop world | Checkout</title>
@endsection
@section('frontcontent')
    <div class="wrapper">
        <div class="page">
            <div class="main-container col1-layout content-color color">
                <div class="breadcrumbs">
                    <div class="container">
                        <ul>
                            <li class="home"> <a href="#" title="Go to Home Page">Home</a></li>
                            <li> <strong>Checkout</strong></li>
                        </ul>
                    </div>
                </div>
                <!--- .breadcrumbs-->

                <div class="woocommerce">
                    <div class="container">
                        <div class="content-top">
                            <h2>Checkout</h2>
                            
                        </div>
                        <div class="checkout-step-process">
                            <ul>
                                <li>
                                    <div class="step-process-item"><i data-href="checkout-step2.html"
                                            class="redirectjs  step-icon fa fa-check"></i><span
                                            class="text">Billing Address</span></div>
                                </li>
                                <li>
                                    <div class="step-process-item"><i class="fa fa-check step-icon "></i><span
                                            class="text">Shipping Address</span></div>
                                </li>

                                <li>
                                    <div class="step-process-item "><i data-href="checkout-step4.html"
                                            class="redirectjs  step-icon fa fa-check"></i><span
                                            class="text">Delivery & Payment</span></div>
                                </li>
                                <li>
                                    <div class="step-process-item active"><i data-href="checkout-step5.html"
                                            class="redirectjs  step-icon icon-notebook"></i><span
                                            class="text">Order Review</span></div>
                                </li>

                                <li>

                                </li>
                            </ul>
                        </div>
                        <!--- .checkout-step-process --->
                        <form action="{{ url('/placeorder') }}" method="POST" name="placeorder_form">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <ul class="row">
                                <li class="col-md-9 col-padding-right">
                                    <table class="table-order table-order-review">
                                        <thead>
                                            <tr>
                                                <td width="68">Product Name</td>
                                                <td width="14">price</td>
                                                <td width="14">QTY</td>
                                                <td width="14">Total</td>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            @php
											 	$total=0;
											@endphp

                                            @foreach ($cartitems as $item)
                                               <tr>
                                                    <td class="name">{{ $item->products->name }}</td>
                                                    <input type="hidden" name="product_id[]"
                                                        value="{{ $item->product_id }}">

                                                    <td>{{ $item->products->price }}</td>
                                                    <input type="hidden" name="price[]"
                                                        value="{{ $item->products->price }}">

                                                    <td>{{ $item->qty }}</td>
                                                    <input type="hidden" name="qty[]" value="{{ $item->qty }}">

                                                    <td class="price">₹{{ $item->products->price*$item->qty}}
                                                    </td>
                                                    <input type="hidden" name="sub_total[]"
                                                        value="{{ $item->products->price*$item->qty}}">

                                                </tr>
												@php
												$total +=  $item->products->price  * $item->qty ;
											@endphp
                                            @endforeach
                                        </tbody>

                                    </table>
                                    <table class="table-order table-order-review-bottom">

                                        <tr>
                                            <td class="first large" width="80%">Total Payment</td>
                                            <td class="price large" width="20%">{{ $total }}</td>
                                            <input type="hidden" name="total_price" value="{{ $total }}">
                                        </tr>
                                        <tfoot>
                                            <td colspan="2">

                                                <div class="right">
                                                   
                                                    <a class="btn-step" href="{{ url('/payment') }}">Back</a>
                                                    <input type="submit" value="Place Order" class="btn-step btn-highligh">
                                                    {{-- <a class="btn-step btn-highligh" href="{{ url('payment') }}">Place Holder</a> --}}
                                                </div>
                                            </td>
                                        </tfoot>
                                    </table>
                                </li>
                                <li class="col-md-3">
                                    <ul class="step-list-info">
                                        <li>
											<div class="title-step">Billing Address</div>
											@foreach($billing_address as $address)
											<p><strong>{{ $address->name }}</strong><br>
											{{ $address->address }}<br>
											{{ $address->city }},{{ $address->state }},{{ $address->pincode }}<br>
											{{ $address->mobile_number }}<br>
											{{ $address->email }}
											</p>
											@endforeach
											@foreach($payment_id as $pid)
											 	<input type="hidden" name="payment_id" value="{{ $pid  }}">
											@endforeach
										</li>
										<li>
											<div class="title-step">Shipping Address</div>
											@foreach($shipping_address as $address)
											<p><strong>{{ $address->name }}</strong><br>
											{{ $address->address }}<br>
											{{ $address->city }},{{ $address->state }},{{ $address->pincode }}<br>
											{{ $address->mobile_number }}<br>
											{{ $address->email }}
											</p>
											@endforeach
										</li>
										
										<li>
											<div class="title-step">Payment Method</div>
											<p>Check / Money order</p>
										</li>
                                    </ul>
                                </li>
                            </ul>
                        </form>

                        <div class="line-bottom"></div>
                    </div>
                    <!--- .container-->
                </div>
                <!--- .woocommerce-->
            </div>
            <!--- .main-container -->
        </div>
        <!--- .page -->
    </div>
    <!--- .wrapper -->
@endsection