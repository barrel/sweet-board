# Sweet Board

## About

The Barrel Sweet Board is an app that uses the twilio api to retreive your sms log and display it in a simple, readable format. The app auto updates when new texts are recieved.


## Installation

1. [Download files](https://github.com/barrel/sweet-board/archive/master.zip)
2. Insert your twilio account credentials into api-key.php

```php
<?php
	$token = 'your-token-here';
	$sid = 'your-sid-here';
?>
```

These can be found by going to your twilio [account page](https://www.twilio.com/user/account) and copy & pasting the "AUTH TOKEN" & "ACCOUNT SID" into the file. Then you are set!