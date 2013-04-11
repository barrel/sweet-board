<?php
	require('twilio.php');
	include('api-key.php');
	$client = new Services_Twilio($sid, $token);
	$textcount=0;
	
	foreach ($client->account->sms_messages as $message) {
		$status= $message->status;
		if ($status=='received'){
			$time = date('c', strtotime($message->date_created));
			$body = $message->body;
			$smsid= $message->sid;	
?>
	<article <?php if ($textcount >= 6){ ?>class="hidden" <?php } ?>data-sid="<?php echo $smsid; ?>">
		<blockquote><em>&#8220;</em><?php echo $body; ?><em>&#8221;</em></blockquote>
		<abbr class="timeago" title="<?php echo $time; ?>"></abbr>
	</article>
<?php
		$textcount++;
		}
	}
?>