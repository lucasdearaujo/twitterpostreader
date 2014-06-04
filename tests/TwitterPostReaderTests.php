<?php

require_once "../src/library/twitterpostreader/TwitterPostReader.php";
require_once "../src/library/twitterpostreader/Http/Request.php";
require_once "../src/library/twitterpostreader/Http/Response.php";
require_once "../src/library/twitterpostreader/Properties/Post.php";
require_once "../src/library/twitterpostreader/Properties/User.php";
require_once "../src/library/twitterpostreader/Consumer.php";

$twitterPostReader = new \TwitterPostReader\TwitterPostReader();
$twitterPostReader->consumer = new \TwitterPostReader\Consumer();
$twitterPostReader->consumer->setKey('...');
$twitterPostReader->consumer->setSecret('...');

?>

<html>
	<head>
		<meta charset="utf-8" />
	</head>

	<body>
		<pre>
			<?php var_dump($twitterPostReader->getPosts('unimake', 3)) ?>
		</pre>
	</body>
</html>