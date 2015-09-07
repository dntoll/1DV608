<?php

namespace model;

class UserArray {
	private $users = array();
	private $selected;
	private $dal;

	public function __construct(SelectedUserDAL $dal) {

		$this->dal = $dal;
		$this->selected = $this->dal->getSavedUser();
	}


	public function add(User $user) {
		$this->users[] = $user;
	}

	public function select(User $user) {
		$this->selected = $user;
		$this->dal->saveSelection($user);
	}

	public function getSelectedUser() {
		return $this->selected;
	}

	public function getUsers() {
		return $this->users;
	}

	public function getUserByName($nameString) {

		foreach ($this->users->getUsers() as $user) {
			if ($user->getName() === $nameString) {
				return $user;
			}
		}

	}
}