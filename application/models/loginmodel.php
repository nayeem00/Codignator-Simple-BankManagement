<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loginmodel extends CI_Model {

	public function verifyUser($username, $password)
	{
		// "?" for sql injection
		$sql = "SELECT * FROM users WHERE username=? AND password=?";

		$array = array($username ,$password );
		$result = $this->db->query($sql,$array); // array value replace by "?" sequencially

		$row = $result->row_array();
		if($row)
		{
			return true;
		}
		else
		{
			return false;
		}

	}

	
}