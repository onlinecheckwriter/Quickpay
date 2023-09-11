<?php

use onlinecheckwriter\Quickpay\Index;

require_once __DIR__ . '/vendor/autoload.php';
$ocw = new Index();
$ocw->setToken("G5LoP94QISpOvk6i072yXDFBPwSjRS01foqlYPdVdYJ7li2NRkvzuHvYIzif");
$ocw->setEnviorment("SANDBOX");


$arrayVar = [
    "source" => ["accountType" => "bankaccount", "accountId" => ""],
    "destination" => [
        "name" => "John Myres",
        "company" => "Tyler Payment Technologist",
        "address1" => "5007 richmond rd",
        "address2" => "",
        "city" => "Tyler",
        "state" => "TX",
        "zip" => "75701",
        "phone" => "9032457713",
        "email" => "support@onlinecheckwriter.com",
        "routing_number" => "021000021",
        "account_number" => "123456789"
    ],
    "payment_details" => [
        "amount" => 500,
        "memo" => "for game",
        "note" => "Note For Internal Purpose",
    ],
];

$data = json_encode($arrayVar);
$result = $ocw->sentWire($data);
print_r($result);

