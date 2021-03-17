@extends('layout')
@section('content')
    <section id="image-header-show-restaurant"></section>
    <section id="product-order" class="product-order search-results">
        <div class="container">
            {{-- <h2 class="order-restaurant">{{$product->restaurants->restaurant_name}}</h2>
                <h3 class="order-title">Your order:</h3>
                    <h3 class="order-product">{{$product->food_name}}</h3> --}}

            <div class="col-lg-12 order-view" data-aos="zoom-in" data-aos-delay="100">
                <div class="box" data-aos="zoom-in" data-aos-delay="100">

                    <li class="col-lg-2 img">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50">
                            <path id="Icon_awesome-pizza-slice" data-name="Icon awesome-pizza-slice"
                                d="M15.515.015a3.221,3.221,0,0,0-3.45,2.356l-1.446,5.5C28.941,8.4,41.336,20.621,42.111,38.824l5.561-1.541a3.222,3.222,0,0,0,2.307-3.506A38.812,38.812,0,0,0,15.515.015ZM9.8,10.953.053,48.014a1.583,1.583,0,0,0,1.953,1.929L39.019,39.678C38.6,22.6,27,11.148,9.8,10.957Zm2.7,29.674A3.125,3.125,0,1,1,15.625,37.5,3.125,3.125,0,0,1,12.5,40.627Zm4.688-14.844a3.125,3.125,0,1,1,3.125-3.125A3.125,3.125,0,0,1,17.188,25.782ZM27.344,35.939a3.125,3.125,0,1,1,3.125-3.125A3.125,3.125,0,0,1,27.344,35.939Z"
                                transform="translate(-0.001 0)" fill="#0cbe57" />
                        </svg>
                    </li>
                    <li class="col-lg-10">
                        <h4 class="order-restaurant"></h4>
                        <h4 class="order-restaurant">€ </h4>
                        <h6 class="order-title">Your order:</h6>






                    </li>
                </div>
            </div>


    </section>
@endsection
