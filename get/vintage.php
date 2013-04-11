<?php
	require('../twilio.php');
	include('../config.php');
	$client = new Services_Twilio($sid, $token);
	$textcount=1;
	
	foreach ($client->account->sms_messages as $message) {
		$status= $message->status;
		if ($status=='received'){
			if ($textcount > 6 && $textcount < ($vintage_texts + 5)){
				$time = date('c', strtotime($message->date_created));
				$body = $message->body;
				$smsid= $message->sid;
?>
		<li><blockquote><em>&#8220;</em><?php echo $body; ?><em>&#8221;</em></blockquote></li>
<?php
			}
		$textcount++;
		}
	}
?>