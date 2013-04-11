<?php
	$message_id = $_REQUEST['id'];
	require('../twilio.php');
	include('../api-key.php');
	$client = new Services_Twilio($sid, $token);

	$message = $client->account->sms_messages->get($message_id);
?>
	<article class="new" data-sid="<?php echo $message->sid; ?>">
		<blockquote><em>&#8220;</em><?php echo $message->body; ?><em>&#8221;</em></blockquote>
		<abbr class="timeago" title="<?php echo date('c', strtotime($message->date_created)); ?>"></abbr>
	</article>