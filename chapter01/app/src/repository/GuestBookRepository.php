<?php

class GuestBookRepository {

	private $guestbookGateway;
	private $guestbookFactory;

	function __construct(GuestBookGateway $guestbookGateway = null) {
		$this->guestbookGateway = $guestbookGateway ? : new GuestBookInMemory();
		$this->guestbookFactory = new GuestBookFactory();
	}

	function add($GuestBookData) {
		if (is_array($GuestBookData))
			foreach ($GuestBookData as $guestbook)
				$this->addOne($guestbook);
		else
			$this->addOne($GuestBookData);
	}

	function findAll() {
		$allGuestBookData = $this->guestbookGateway->retrieveAll();
		$guestbooks = array();
		foreach ($allGuestBookData as $guestbookData)
			$guestbooks[] = $this->guestbookFactory->make($guestbookData);
		return $guestbooks;
	}

/*
	function findByPostId($postId) {
		return array_values(
			array_filter($this->findAll(), function ($comment) use ($postId) {
				return $comment->getPostId() == $postId;
			})
		);
	}

*/
	private function addOne(GuestBook $guestbook) {
		$this->guestbookGateway->persist(array(
			$guestbook->getPostId(),
			$guestbook->getAuthor(),
			$$guestbook->getMessage()
		));
	}

}
