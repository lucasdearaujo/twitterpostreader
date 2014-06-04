<?php namespace TwitterPostReader\Properties;

class User {

	/**
	 * The user id
	 * @var string
	 */
	private $id;

	/**
	 * The user name
	 * @var string
	 */
	private $name;

	/**
	 * The user screen name
	 * @var string
	 */
	private $screenName;

	/**
	 * The user location
	 * @var string
	 */
	private $location;

	/**
	 * The user description
	 * @var string
	 */
	private $description;

	/**
	 * Set the user id
	 * @param string $id
	 */
	public function setId($id){
		$this->id = $id;
	}

	/**
	 * Return the user 
	 * @return string
	 */
	public function getId(){
		return $this->id;
	}

	/**
	 * Set the user name
	 * @param string $name
	 */
	public function setName($name){
		$this->name = $name;
	}

	/**
	 * Return the user name
	 * @return string
	 */
	public function getName(){
		return $this->name;
	}

	/**
	 * Set the user screen name
	 * @param string $screenName
	 */
	public function setScreenName($screenName){
		$this->screenName = $screenName;
	}

	/**
	 * Return the user screen name
	 * @return string
	 */
	public function getScreenName(){
		return $screenName;
	}

	/**
	 * Set the user location
	 * @param string $location
	 */
	public function setLocation($location){
		$this->location = $location;
	}

	/**
	 * Return the user location
	 * @return string
	 */
	public function getLocation(){
		return $this->location;
	}

	/**
	 * Set the user description
	 * @param string $description
	 */
	public function setDescription($description){
		$this->description = $description;
	}

	/**
	 * Return the user description
	 * @return string
	 */
	public function getDescription(){
		return $this->description;
	}
}

?>