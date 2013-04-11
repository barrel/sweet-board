# Sweet Board

## About

The Barrel Sweet Board is an app that uses the twilio api to retreive your sms log and display it in a simple, readable format. The app auto updates when new texts are recieved.


## Installation

1. [Download files](https://github.com/barrel/sweet-board/archive/master.zip)
2. Insert your twilio account credentials into config.php

```php
<?php
	$token = 'your-token-here';
	$sid = 'your-sid-here';
?>
```

These can be found by going to your twilio [account page](https://www.twilio.com/user/account) and copy & pasting the "AUTH TOKEN" & "ACCOUNT SID" into the file. Then you are set!


## Configurations

You can add text reply to your users by editing the reply.php page.

```xml
<Response>
	<Sms>Hello, thanks for texting the Sweet Board!</Sms>
</Response>
```

You can edit the number of texts that are included in the vintage sweetness by changing the default in config.php

```xml
<?php
	$vintage_texts = 10;
?>
```