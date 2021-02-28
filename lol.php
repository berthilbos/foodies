<h4>{{$restaurant->restaurant_name}}</h4>
                         <p>Total Price: €<?php 
                            $order = session()->get('order');
                            $totalprice = array_sum(array_column($order, 'productTotalPrice'));
                            echo($totalprice);?>
                    </p>