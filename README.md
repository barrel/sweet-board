# Sweet Board

## About

The Barrel Sweet Board is an app that uses the twilio api to retreive your sms log and display it in a simple, readable format. The app auto updates when new texts are recieved.

Read the [story](http://www.barrelny.com/blog/sweet-board-sketch-to-prototype-in-5-hours/) behind the Sweet Board.


## Installation

1. [Download files](https://github.com/barrel/sweet-board/archive/master.zip)
2. Insert your twilio account credentials into [config.php](https://github.com/barrel/sweet-board/blob/master/config.php)

```php
	$token = 'your-token-here';
	$sid = 'your-sid-here';
```

These can be found by going to your twilio [account page](https://www.twilio.com/user/account) and copy & pasting the "AUTH TOKEN" & "ACCOUNT SID" into the file. Then you are set!


## Configurations

You can add text reply to your users by editing [reply.php](https://github.com/barrel/sweet-board/blob/master/reply.php)

```xml
<Response>
	<Sms>Hello, thanks for texting the Sweet Board!</Sms>
</Response>
```

You can edit the number of texts that are included in the vintage sweetness by changing the default in [config.php](https://github.com/barrel/sweet-board/blob/master/config.php)

```php
	$vintage_texts = 10;
```



### Credits

- Built by [Barrel](http://www.barrelny.com/). 
- Concept by [Peter Kang](http://www.twitter.com/peterkang34).
- Design & development by [Jessica Frazelle](http://www.twitter.com/frazelledazzell).