@extends('layout')

@section('content')
<section class="d-flex align-items-center">
</section>
<section id="register" class="register">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="box">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    
                    <li class="col-lg-10">
                    </strong>Your shopping Basket:</strong>
                        <p>Products: <?php
                            $quantity = session()->get('order');
                            if($quantity == null){echo("0");}
                            else {$totalAmount = array_sum(array_column($quantity, 'quantity'));
                            echo($totalAmount);}?>
                        </p>
                        <p>Total Price: €<?php
                            $order = session()->get('order');
                            if($order == null){echo("0");}
                            else {$totalprice = array_sum(array_column($order, 'productTotalPrice'));
                            echo($totalprice);}?>
                        </p>
                        <p><button class="btn btn-primary order-button">
                            <a href="/orders.confirm" class="is-link">Confirm</a>
                            </button>
                            <button class="btn btn-primary order-button">
                                <a href="/orders.show" class="is-link" target="_blank">View Basket</a>
                            </button>
                            <button class="btn btn-primary order-button">
                                <a href="/delete" class="is-link">Empty Basket</a>
                            </button>
                        </p>
                    </li>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<br>
<br>
<br>
<br>
<br>
<br>
@endsection
