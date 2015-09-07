<?php

namespace view;

class UserView {
	private static $pickedName = "picked"; 
	private $users;

	public function __construct(\model\UserArray $users) {
		$this->users = $users;
	}

	public function getSelectedUser() {
		if (isset($_GET[self::$pickedName])) {
			
			$input = $_GET[self::$pickedName];

			//Find the correct user
			$user = $this->users->getUserByName($input);

			if ($user != null)
				return $user;

			throw new \Exception("unwanted input exception");
		}
		return null;
	}



	public function getHTML($selected) {
		$ret = "
		<h2>Pick a user</h2>";

		if ($selected != null)
			$ret .=  "<p>You selected " . $selected->getName(). " who lives at " . $selected->getAddress(). "</p>";
		else
			$ret .=  "<p>No selection done</p>";


		$ret .="<form>";
		foreach ($this->users->getUsers() as $user) {
			$ret .= "<input type=\"submit\" name=\"" . self::$pickedName ."\" value=\"" . $user->getName(). "\"/>";	
		}
		$ret .= "</form>";
		return $ret;
	}

}