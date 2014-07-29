<?php

interface GuestBookGateway {

	function persist($value);
	function retrieve($id);
}
