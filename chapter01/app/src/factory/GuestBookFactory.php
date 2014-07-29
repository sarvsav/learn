<?php

	class GuestBookFactory implements Factory {
		public function make($value)
		{
			return new GuestBook($value[0], $value[1], $value[2]);

		}
	}