<?php
/*
* @category 	Notification
* @author  	Synsoft Global Developer
* @@author-website  www.synsoftglobal.com

|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
|| Apple Push Notification Configurations
|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
*/


/*
|--------------------------------------------------------------------------
| APN Permission file 
|--------------------------------------------------------------------------
|
| Contains the certificate and private key, will end with .pem
| Full server path to this file is required.
|
*/

$config['PermissionFile'] = APPPATH . '../addyourpem.pem';


/*
|--------------------------------------------------------------------------
| APN Private Key's Passphrase
|--------------------------------------------------------------------------
*/
$config['PassPhrase'] = '123456';

/*
|--------------------------------------------------------------------------
| APN Services
|--------------------------------------------------------------------------
*/
$config['Sandbox'] = true;
$config['PushGatewaySandbox'] = 'ssl://gateway.sandbox.push.apple.com:2195';
$config['PushGateway'] = 'ssl://gateway.sandbox.push.apple.com:2195';



/*
|--------------------------------------------------------------------------
| APN Connection Timeout
|--------------------------------------------------------------------------
*/
$config['Timeout'] = 60;


/*
|--------------------------------------------------------------------------
| APN Notification Expiry (seconds)
|--------------------------------------------------------------------------
| default: 86400 - one day
*/
$config['Expiry'] = 86400;
