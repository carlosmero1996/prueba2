<?php

$cliente = new SoapClient('http://localhost:8080/LoginService/WSoperaciones?WSDL');
$resultado_pago= $cliente->ProcesarPago([
    
    "total" => 1000,
    "pago"=>10000000
])->return;

if($resultado_pago>0){
    echo "pago realizado";
}else{
    echo "dinero insuficiente";
}