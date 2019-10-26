<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>eventPlus+</title>



</head>

<body>
<!-- Start Header Area -->
@include('layouts.partials._heading')

<div class="spacer">
@include('layouts.partials._navigate')<!-- Our Schedule Area Start -->

</div>
<!-- End Header Area -->

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div>


            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>purchase Tickets</h1>
                    <nav class="d-flex align-items-center">
                        <a href="{{'home.index'}}">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="{{'cart.index'}}">Get Tickets</a>
                    </nav>
                </div>
            </div>
        </div>
</section>
<!-- End Banner Area -->

<!--================Cart Area =================-->
<section class="cart_area">
    <div class="container">
        @if(session()->has('success_message'))
            <div class=" alert alert-success">
                {{session()->get('success_message')}}
            </div>
        @endif
        @if(count($errors)>0)
            <div class=" alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li> {{$error}}</li>
                    @endforeach
                </ul>

            </div>
        @endif
        @if(Cart::count()>0)
            <h2>{{Cart::count()}}Ticket(s) added</h2>

            @foreach(Cart::content() as $item)
                <div class="cart_inner">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Event</th>
                                <th scope="col">Price</th>
                                <th scope="col">No.Tickets</th>
                                <th scope="col">Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="{{ URL::to('/') }}/images/{{ $item->model->filename}}"  />
                                    </div>
                                    <div class="media-body">
                                        <p>{{$item->model->title}}</p>
                                    </div>
                                </div>
                            </td>



                            <td>
                                <h5>Ksh.{{$item->model->price}}</h5>
                            </td>

                            <td>
                                <div class="product_count">
                                    <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:"
                                           class="input-text qty">
                                    <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                            class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                    <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                            class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                                </div>
                            </td>
                            <td>
                                <h5>$1160.00</h5>

                            </td>
                            <tr>
                                <td>  <form  action="{{route('cart.destroy',$item->rowId)}}" method="post">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <div class="checkout_btn_inner d-flex align-items-center">
                                            <button type="submit" class="primary-btn">Remove </button>
                                        </div></form>




                                <td>
                                    <div class="checkout_btn_inner d-flex align-items-center">
                                       {{---<a class="primary-btn" href="{{route('checkout.index')}}">Proceed to checkout</a>
                                   --}} </div>
                                </td>
                            </tr>



                            @endforeach
                            </tr>

                            <td>
                                <h5>Subtotal</h5>
                            </td>
                            <td>
                                <h5>$2160.00</h5>
                            </td>
                            @else
                                <h3>No tickets added!</h3>
                            @endif

                            <tr class="out_button_area">
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
    </div>
</section>
<!--================End Cart Area =================-->

@include('layouts.partials._scripts')

<!-- start footer Area -->
@include('layouts.partials._footer')

<!-- End footer Area -->

</body>

</html>
