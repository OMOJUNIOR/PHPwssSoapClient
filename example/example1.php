<?php

require 'vendor/autoload.php';
use Omojunior\PhPwssSoapClient\Soap;


$wsdl = 'http://localhost';

//UsernameToken details

$username = ''; //Username
$password = ''; // user password
$function_name = ''; // web service function name
$parameters = []; // array containing the body parameter keys and values

try {
    $new = new Soap(); 
    $result = $new->call($wsdl, $username, $password, $function_name, $parameters);
    print_r($result);
} catch (\Exception $e) {
    print_r($e);
}
