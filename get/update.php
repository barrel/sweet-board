<?php
	require('../twilio.php');
	include('../config.php');
	$client = new Services_Twilio($sid, $token);
	$id_array=array();
	foreach ($client->account->sms_messages as $message) {
		$status= $message->status;
		if ($status=='received'){
			$smsid= $message->sid;
			array_push($id_array, $smsid);
		}
	}
	echo implode(',', $id_array);
?>