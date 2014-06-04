<?php

require_once "../src/library/twitterpostreader/TwitterPostReader.php";
require_once "../src/library/twitterpostreader/Http/Request.php";
require_once "../src/library/twitterpostreader/Http/Response.php";
require_once "../src/library/twitterpostreader/Properties/Post.php";
require_once "../src/library/twitterpostreader/Properties/User.php";
require_once "../src/library/twitterpostreader/Consumer.php";
require_once "../src/library/twitterpostreader/Exceptions/TwitterPostReaderException.php";


$twitterPostReader = new \TwitterPostReader\TwitterPostReader();
$twitterPostReader->consumer = new \TwitterPostReader\Consumer();
$twitterPostReader->consumer->setKey('');
$twitterPostReader->consumer->setSecret('');

if(count($twitterPostReader->getPosts('unimake', 3)) == 3)
	echo "1. Passed <br/>\n";
else
	echo "1. Failed <br/>\n";

try {
	$twitterPostReader = new \TwitterPostReader\TwitterPostReader();
	$twitterPostReader->consumer = new \TwitterPostReader\Consumer();
	$twitterPostReader->consumer->setKey('...');
	$twitterPostReader->consumer->setSecret('...');

	$posts  = $twitterPostReader->getPosts('unimake', 3);
	echo "2. Failed <br/>\n";
}
catch(\TwitterPostReader\TwitterPostReaderException $e){
	echo "2. Passed <br/>\n";
}

?>