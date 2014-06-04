<?php namespace TwitterPostReader\Properties;

/**
 * The post object
 * @author Lucas A. de Araújo
 */
class Post {

	/**
	 * The post id
	 * @var string
	 */
	private $id;

	/**
	 * The post date
	 * @var string
	 */
	private $date;

	/**
	 * The post text
	 * @var string
	 */
	private $text;

	/**
	 * The post athor
	 * @var \TwitterPostReader\Properties\User
	 */
	private $user;

	/**
	 * Set the post ID
	 * @param string $id
	 */
	public function setId($id){
		$this->id = $id;
	}

	/**
	 * Return the post ID
	 * @return string
	 */
	public function getId(){
		return $this->id;
	}

	/**
	 * Set the post date
	 * @param string $date
	 */
	public function setDate($date){
		$this->date = $date;
	}

	/**
	 * Return the post date
	 * @return string
	 */
	public function getDate(){
		return $this->date;
	}

	/**
	 * Set the post text
	 * @param string $text
	 */
	public function setText($text){
		$this->text = $text;
	}

	/**
	 * Return the post text
	 * @return string
	 */
	public function getText(){
		return $this->text;
	}

	/**
	 * Set the post Author
	 * @param $user \TwitterPostReader\Properties\User
	 */
	public function setUser(\TwitterPostReader\Properties\User $user){
		$this->user = $user;
	}

	/**
	 * Return the post author
	 * @return \TwitterPostReader\Properties\User
	 */
	public function getUser(){
		return $user;
	}
}

?>