<?php namespace TwitterPostReader;

/**
 * The twitter consumer configuration
 * @author Lucas A. de Araújo <lucasdearaujo@icloud.com>
 */
class Consumer {

	/**
	 * The consumer key
	 * @var string
	 */
	private $key;

	/**
	 * The consumer secret
	 * @var string
	 */
	private $secret;

	/**
	 * Set the consumer key
	 * @param string $key Consumer key
	 */
	public function setKey($key){
		$this->key = $key;
	}

	/**
	 * Return the consumer key
	 * @return string
	 */
	public function getKey(){
		return $this->key;
	}

	/**
	 * Set the consumer secret
	 * @param string $secret
	 */
	public function setSecret($secret){
		$this->secret = $secret;
	}

	/**
	 * Return the consumer secret.
	 * @return string
	 */
	public function getSecret(){
		return $this->secret;
	}
}

?>