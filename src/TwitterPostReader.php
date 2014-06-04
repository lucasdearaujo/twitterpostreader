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
	 * Twitter consumer key for the REST API 1.1
	 * @var string
	 */
	public $consumerKey;

	/**
	 * Twitter consumer secret for the REST API 1.1
	 * @var string
	 */
	public $consumerSecret;

	/**
	 * Get a number of posts from the user.
	 * @param int $size | Number of posts
	 * @return array | array of posts
	 */
	public function getPosts($username, $count){

		$request = new \TwitterPostReader\Http\Request();
		$request->consumerKey = $this->consumerKey;
		$request->consumerSecret = $this->consumerSecret;
		$request->configure($username, $count);

		$response = new \TwitterPostReader\Http\Response($request->send());
		return $response->posts;
	}

}

?>