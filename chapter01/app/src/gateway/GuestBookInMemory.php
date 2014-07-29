<?php

class GuestBookInMemory implements GuestBookGateway {

	private $data = array();

	function persist($data) {
		$this->data[] = $data;
	}

	function retrieve($id) {
		return $this->data[$id];
	}

	function retrieveAll() {
		return $this->data;
	}
}
