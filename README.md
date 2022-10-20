# PHPwssSoapClient
This package is a wrapper based around the PHP SOAP API Client,the package main purpose is to
 help developers make a call to web services using wsdl and wss security as their authentication method.


This is basic wrapper for Soap web services that uses WSDL and WSS for authentication 

All you need to do is install the package via composer:

......><>......<><>.............................
##
composer require omojunior/ph-pwss-soap-client
##
......><>......<><>.............................

and once installed you can call on the soap client 

##
 use Omojunior\PhPwssSoapClient\Soap; 
##

or you can directly instatiate it 
......><>......<><>.............................
......><>......<><>.............................

$newInstant =  \Omojunior\PhPwssSoapClient\Soap();
$newInstant->call($wsdl,$username,$password,$function_name,$parameters);

......><>......<><>.............................
......><>......<><>.............................

if there's any bug kindly make a pull request with suggestions and detail explaination ::
