<?php

require 'paypal/autoload.php';
define('URL_SITIO', 'http://localhost:82/ProyectoGdlwebcamp');
//Primero el clienteID y luego el secret
$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'ASZXAV4K5jvZEfHa8yMsLc8Xx9fHG_sfL-RzCBYspIKdqnw1nnsgEo5xFyMuEFXYopIOXJ2mXnidY4hj',
        'ENctHM-iHdZCnXmoFEXcPThl6c7-CK847rk-OffdXdVoxQ2CsO24KvVzvjmodwas_nqWm8oSUHfJbXGs'
    )

);

