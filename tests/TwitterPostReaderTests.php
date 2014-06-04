<?php

require_once "../src/TwitterPostReader.php";
require_once "../src/Http/Request.php";
require_once "../src/Http/Response.php";
require_once "../src/Properties/Post.php";
require_once "../src/Properties/User.php";

$twitterPostReader = new \TwitterPostReader\TwitterPostReader();
$twitterPostReader->consumerKey    = 'CONSUMER_KEY_HERE';
$twitterPostReader->consumerSecret = 'CONSUMER_SECRET_HERE';

$posts = $twitterPostReader->getPosts('unimake', 3);

?>

<html>
	<head>
		<meta charset="utf-8" />
	</head>

	<body>
		<pre>
			<?php var_dump($posts) ?>
		</pre>
	</body>
</html>