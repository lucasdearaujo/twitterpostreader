twitterpostreader
=================

This is a simple class made to be compatible with the new twitter rest API (1.1). Using it you can get
the lastest twitter statuses of a user in a very simple way.

### Example

```php
try {
	$twitterPostReader = new \TwitterPostReader\TwitterPostReader();
	$twitterPostReader->consumer = new \TwitterPostReader\Consumer();
	$twitterPostReader->consumer->setKey('CONSUMER_KEY');
	$twitterPostReader->consumer->setSecret('CONSUMER_SECRET');

	foreach($twitterPostReader->getPosts('unimake', 3) as $post){
		echo $post->text . '<br/>';
	}
}
catch(\TwitterPostReader\TwitterPostReaderException $e){
	echo "Ooops, do I have to report something at https://github.com/hamboldt/twitterpostreader/issues ?";
}
```