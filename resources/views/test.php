<?php 

$hashids = new Hashids\Hashids('this is my salt');

$lol = 1;

$id = $hashids->encode($lol);
$numbers = $hashids->decode($id);

dd($id);