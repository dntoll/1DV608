<?php

namespace view;

class UserPicker {
	private $users;

	public function __construct(array $users) {
		$this->users = $users;
	}
}