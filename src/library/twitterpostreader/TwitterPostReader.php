<?php namespace TwitterPostReader;

use TwitterPostReader\Http;

/**
 * Class build to enable developers to read
 * twitter posts in a easy and simple way.
 * @author Lucas A. de Araujo <lucasdearaujo@icloud.com>
 * @version 1.0
 */
class TwitterPostReader {

	/**
	 * Twitter consumer for the REST API 1.1
	 * @var \TwitterPostReader\Consumer
	 */
	public $consumer;

	/**
	 * Get a number of posts from the user.
	 * @param int $size | Number of posts
	 * @return array | array of posts
	 */
	public function getPosts($username, $count){

		$request = new \TwitterPostReader\Http\Request();
		$request->consumer = $this->consumer;
		$request->configure($username, $count);

		$response = new \TwitterPostReader\Http\Response($request->send());
		return $response->posts;
	}

}

?>