twitterpostreader
=================

This is a simple class made to be compatible with the new twitter rest API (1.1). Using it you can get
the lastest twitter statuses of a user in a very simple way.

```php
$twitterPostReader = new \TwitterPostReader\TwitterPostReader();
$twitterPostReader->consumerKey    = 'CONSUMER_KEY';
$twitterPostReader->consumerSecret = 'CONSUMER_SECRET';

$posts = $twitterPostReader->getPosts('unimake', 3);

foreach($posts as $post){
	echo $post->text . '<br/>';
}
```