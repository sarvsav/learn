<?php

class GuestBookFactoryTest extends PHPUnit_Framework_TestCase {

	function testAGuestBooksHasAllItsComposingParts() {
		$postId = 1;
		$guestbookAuthor = "Joe";
		$guestbookMessage = "I think it is a good idea to use the Repository Pattern to persist and retrieve objects.";

		$guestbookData = array($postId, $guestbookAuthor, $guestbookMessage);

		$guestbook = (new GuestBookFactory())->make($guestbookData);

		$this->assertEquals($postId, $guestbook->getPostId());
		$this->assertEquals($guestbookAuthor, $guestbook->getAuthor());
		$this->assertEquals($guestbookMessage, $guestbook->getMessage());
	}
}
