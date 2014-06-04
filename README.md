twitterpostreader
=================

This is a simple class made to be compatible with the new twitter rest API (1.1). Using it you can get
the lastest twitter statuses of a user in a very simple way.

```php
$twitterPostReader = new \TwitterPostReader\TwitterPostReader();
$twitterPostReader->consumer = new \TwitterPostReader\Consumer();
$twitterPostReader->consumer->setKey('CONSUMER_KEY');
$twitterPostReader->consumer->setSecret('CONSUMER_SECRET');

foreach($twitterPostReader->getPosts('unimake', 3) as $post){
	echo $post->text . '<br/>';
}
```