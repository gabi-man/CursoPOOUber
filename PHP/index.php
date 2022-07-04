<?php

require_once('./Car.php');
require_once('./Account.php');
require_once('./UberX.php');
require_once('./UberVan.php');
require_once('./UberPool.php');
require_once('./Payment.php');
require_once('./Paypal.php');
require_once('./Cash.php');
require_once('./Card.php');
require_once('./User.php');
require_once('./Driver.php');


$uberX = new UberX("CVB123", new Account("Andres Herrera", "AND456"), "Chevrolet", "Spark");

$uberX->PrintDataCar();

$uberPool = new UberPool("TYU567", new Account("Andrea Ferran", "ANA765"), "Dodge", "Attitude");

$uberPool->PrintDataCar();

$payment = new Payment("PAYMENT");
$payment->printDataPayment();

$cash = new Cash("CASH");
$cash->printDataPayment();

$card = new Card("CARD", "23456211346234234", "123", "12/34");
$card->printDataPayment();

$paypal = new Paypal("PAYPAL", "jperez@gmail.com");
$paypal->printDataPayment();

$user = new User("Mario Villa", "45678943", "rey@yahoo.com.ar", "312534675");
$user->printDataAccount();

$uberVan = new UberVan("OJL395", new Account("Raúl Ramírez", "AND456"), "Nissan", "Versa");
$uberVan->setPassenger(6);
$uberVan->printDataCar();

$uberX = new UberX("CVB123", new Account("Andres Herrera", "AND456"), "Chevrolet", "Spark");
$uberX->setPassenger(4);
$uberX->printDataCar();

?>