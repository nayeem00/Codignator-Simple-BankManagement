<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homemodel extends CI_Model {

	

	public function getUserList()
	{
		$sql = "SELECT * FROM accounts";

		$result = $this->db->query($sql);

		return $result->result_array();
	}

	public function findUser($id)
	{
		$sql = "SELECT * FROM accounts WHERE account_no='$id'";

		$result = $this->db->query($sql);

		return $result->row_array();
		
		
	}

	public function deleteUser($id)
	{
		$sql = "DELETE FROM accounts WHERE account_no='$id'";

		
		$this->db->query($sql);
	}
	public function CreateUser($accountNo,$accountName,$accountType)
	{
		
		$now = date("Y-m-d h:i:sa") ;
		

		$sql= "INSERT INTO `accounts`(`account_id`,`account_no`,`accounrt_name`,`account_type`,`balance`,`last_tran`) VALUES(null,'$accountNo','$accountName','$accountType',0,'$now')";


		
		$this->db->query($sql);
	}

	public function depositAmount($accountNo,$amount)
	{
		$now = date("Y-m-d h:i:sa") ;

		$temp = $this->findUser($accountNo);
		 $newBalance  = $temp['balance'] + $amount ;		

		$sql= "UPDATE `accounts` SET `balance`=$newBalance,`last_tran`='$now' WHERE account_no='$accountNo'";


		
		$this->db->query($sql);
	}

	public function withdrawAmount($accountNo,$amount)
	{
		$now = date("Y-m-d h:i:sa") ;

		$temp = $this->findUser($accountNo);
		 $newBalance  = $temp['balance'] - $amount ;		

		$sql= "UPDATE `accounts` SET `balance`=$newBalance,`last_tran`='$now' WHERE account_no='$accountNo'";


		
		$this->db->query($sql);
	}

	public function transAmount($accountNoF,$accountNoT,$amount)
	{
		$now = date("Y-m-d h:i:sa") ;

		$temp = $this->findUser($accountNoF);
		 $newBalanceF  = $temp['balance'] - $amount ;
		 $temp = $this->findUser($accountNoT);
		 $newBalanceT  = $temp['balance'] + $amount ;		

		$sql= "UPDATE `accounts` SET `balance`=$newBalanceF,`last_tran`='$now' WHERE account_no='$accountNoF'";
		$this->db->query($sql);

		$sql= "UPDATE `accounts` SET `balance`=$newBalanceT,`last_tran`='$now' WHERE account_no='$accountNoT'";
		$this->db->query($sql);
	}

	public function CheckAvailableBalance($accountNo,$amount)
	{

		$temp = $this->findUser($accountNo);
				

		if($temp['balance']>$amount)
		{
			return true;
		}
		else
		{
			return false;
		}
	}


	
}