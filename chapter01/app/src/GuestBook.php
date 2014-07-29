<?php

class GuestBook {

	private $postId;
	private $author;
	private $message;

	function __construct($postId, $author, $message) {
		$this->postId = $postId;
		$this->author = $author;
		$this->message = $message;
	}

	public function getPostId() {
		return $this->postId;
	}

	public function getAuthor() {
		return $this->author;
	}

	public function getMessage() {
		return $this->message;
	}

}
