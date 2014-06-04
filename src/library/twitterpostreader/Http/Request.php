<?php namespace TwitterPostReader\Http;

/**
 * The class that will make the requests
 * into the twitter REST API.
 * @author Lucas A. de Araújo <lucasdearaujo@icloud.com>
 */
class Request
{
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
	 * Configuration of the cURL request
	 * @var array
	 */
	private $cURLConfig = array();

	private $responseText;

	/**
	 * Get the twitter access token using the consumer
	 * key and the consumer secret.
	 * @return string
	 */ 
	public function getAccessToken()	{

		$options  = array(
			CURLOPT_POSTFIELDS => array('grant_type' => 'client_credentials'),
			CURLOPT_HTTPHEADER => array('Authorization: Basic ' . base64_encode($this->consumerKey . ':' . $this->consumerSecret)),
			CURLOPT_HEADER => false,
			CURLOPT_URL => 'https://api.twitter.com/oauth2/token',
			CURLOPT_SSL_VERIFYPEER => false,
			CURLOPT_RETURNTRANSFER => true
		);

		$curl = curl_init();
		curl_setopt_array($curl, $options);
		$oauthResponse = curl_exec($curl);
		curl_close($curl);

		if ($oauthResponse)
			$oauthResponse = json_decode($oauthResponse);

		if ( $oauthResponse && property_exists($oauthResponse, 'token_type') && $oauthResponse->token_type === 'bearer' )
			return $oauthResponse->access_token;

		return false;
	}

	/**
	 * configure the Request class
	 * @param string $username Username that will be veryfied.
	 * @param string $token The REST API 1.1 Access token
	 * @param int $count The number of posts returned
	 */
	public function configure($username, $count){

		// The REST API 1.1 url to get the user posts.
		$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=' . $username . '&count=' . $count;

		// Defines all configurations that gonna be
		// be sent with cURL request.
		$this->cURLConfig = array(
			CURLOPT_URL => $url,
			CURLOPT_SSL_VERIFYPEER => false,
			CURLOPT_HEADER => false,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_TIMEOUT => 120,
			CURLOPT_USERAGENT => "https://github.com/hamboldt/twitterpostreader",
			CURLOPT_HTTPHEADER => array('Authorization: Bearer ' . $this->getAccessToken())
		);
	}

	/**
	 * Return the raw requision response
	 * @return string
	 */
	public function send(){
		$ch = curl_init();
		curl_setopt_array($ch, $this->cURLConfig);
		return curl_exec($ch);
	}
}

?>