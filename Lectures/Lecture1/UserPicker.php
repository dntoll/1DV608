<?php

namespace view;

class UserPicker implements \model\UserVisitor {
	private static $pickedName = "picked"; 
	private $users;

	public function __construct(array $users) {
		$this->users = $users;
	}

	public function getSelectedUser() {
		if (isset($_GET[self::$pickedName])) {
			$input = $_GET[self::$pickedName];
			foreach ($this->users as $user) {
				if ($user->getName() === $input) {
					return $user;
				}
			}
		}
		return new \model\NullUser();
	}



	public function getHTML(\model\User $selected) {
		$ret = "
		<h2>Pick a user</h2>";

		$ret .=  $selected->visit($this);


		$ret .="<form>";
		foreach ($this->users as $user) {
			$ret .= "<input type=\"submit\" name=\"" . self::$pickedName ."\" value=\"" . $user->getName(). "\"/>";	
		}
		$ret .= "</form>";
		return $ret;
	}

	public function visitUser(\model\User $user) {
		return  "<p>You selected " . $user->getName(). " who lives at " . $user->getAddress(). "</p>";
	}

	public function visitNullUser() {
		return  "<p>No selection done</p>";
	}
}