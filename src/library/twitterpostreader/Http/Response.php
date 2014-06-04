<?php namespace TwitterPostReader\Http;

/**
 * The class that will handle the response from the
 * Twitter REST API 1.1.
 * @author Lucas A. de Araújo <lucasdearaujo@icloud.com>
 */
class Response {

	public $posts = array();

	/**
	 * Construct the response.
	 * @param string $data The jSON data received from
	 * the twitter REST API 1.1
	 */
	public function __construct($data){

		if(isset(json_decode($data)->errors)){
			$data = json_decode($data);
			throw new \TwitterPostReader\TwitterPostReaderException($data->errors[0]->message);
		}

		foreach(json_decode($data) as $post){

			// Populate the user
			$u = new \TwitterPostReader\Properties\User();
			$u->setId($post->user->id);
			$u->setName($post->user->name);
			$u->setScreenName($post->user->screen_name);
			$u->setLocation($post->user->location);
			$u->setDescription($post->user->description);

			// Populate the post
			$p = new \TwitterPostReader\Properties\Post();
			$p->setId($post->id);
			$p->setDate($post->created_at);
			$p->setText($post->text);
			$p->setUser($u);

			$this->posts[] = $p;
		}
	}
}
?>