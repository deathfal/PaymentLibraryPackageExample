<?php

use gap\PaymentLibrary\Core\Utils;
use gap\PaymentLibrary\Factories\PaymentGatewayFactory;
use gap\PaymentLibrary\Strategies\PaymentGatewayStrategy;

require_once __DIR__ . './vendor/autoload.php';


// permet de tester le cancel
$factory = new PaymentGatewayFactory();
$paymentGateway = $factory->createPaymentGateway("stripe", ["API_KEY" => Utils::env("API_KEY")]); //Renseigner sa clé d'API dans le .env
$paymentStrategy = new PaymentGatewayStrategy($paymentGateway);
$transaction = $paymentStrategy->createTransaction(4.60, "EUR", "test");

// // on va annuler la transaction

if($transaction->getId() !== null){
    $paymentStrategy->cancelTransaction($transaction);
    echo "La transaction a bien été annulée";
} else {
    echo "La transaction n'a pas pu être annulée";
}

