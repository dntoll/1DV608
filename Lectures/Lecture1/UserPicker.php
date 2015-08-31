<?php

namespace view;

class UserPicker implements \model\UserVisitor {
	private static $pickedName = "picked"; 
	private $users;

	public function __construct(array $users) {
		$this->users = $users;
	}

	public function getSelectedUser() {
		return new \model\NullUser();
	}

	public function getHTML(\model\User $selected) {
		$ret = "
		<h2>Pick a user</h2>";

		$ret .= $selected->visit($this);


		$ret .="<form>";
		foreach ($this->users as $user) {
			$ret .= "<input type=\"button\" name=\"" . self::$pickedName ."\" value=\"" . $user->getName(). "\"/>";	
		}
		$ret .= "</form>";
		return $ret;
	}

	function visitUser(\model\User $user) {
		return $ret .= "<p>You selected" . $user->getName(). "</p>";
	}
}