<?php 
/*
* @category 	Notification
* @author  	Synsoft Global Developer
* @author-website  www.synsoftglobal.com
*/
if( ! defined('BASEPATH')) exit('No direct script access allowed');
class App extends CI_Controller{
		
	function __construct()
	{
		parent::__construct();
	}

	//demo APNs	
	function apple_notification()                      //use as example
	{
		$this->apn->payloadMethod = 'enhance'; // you can turn on this method for debuggin purpose
		$this->apn->connectToPush();

		// adding custom variables to the notification 
		$this->apn->setData(array( 'someKey' => true ));
		$send_result='';
		$badge=2;
		//Pass users device token whom you want to send notification. Something like given below... 
		$device_token = "1ecda14562c4a7310dfe6af17d6e4f4a957b1b708ef64a7b8a28c90902399092";
			$send_result = $this->apn->sendMessage($device_token, 'test message', /*badge*/ $badge, /*sound*/ 'default'  );
		
		if($send_result){
			echo "Sending successful";
			log_message('debug','Sending successful');
		}else{
			echo $this->apn->error;
			log_message('error',$this->apn->error);
		}
		$this->apn->disconnectPush();
	}
}
?>
