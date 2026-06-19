<?php
class Paypal{
    public function payNow($amount){
        echo "User Paid the amount using paypal";
    }
}
class Order{
    public function checkout(){
        $payment = new Paypal();
        $payment->payNow(100);
    }
}

$obj = new Order();
$obj->checkout();
?>