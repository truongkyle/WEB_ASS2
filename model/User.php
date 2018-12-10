<?php
include('database.php');

class User extends database
{
	
	function getAllUser()
	{
		$sql = "SELECT * FROM user";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	function getOneUser( $id )
	{
		$sql = "SELECT * FROM user WHERE id = $id";
		$this->setQuery($sql);
		return $this->loadRow(array($id));
	}
	function edit( $id , $username, $password ,$phone ,$gender ,$email, $birthday,$account_type)
	{
		$sql = "UPDATE user SET username= ?,password = ?,phone =?,gender = ?,email = ?,date_of_birth=?,account_type = ?  WHERE id=?"; 
		$this->setQuery($sql);
		$result = $this->execute(array($username, $password ,$phone ,$gender ,$email, $birthday,$account_type,$id));
		if($result)
		{
			return $this->getLastId();
		}
		else
		{
			return false;
		}
	}
	function add( $username, $password ,$phone ,$gender ,$email, $birthday,$account_type)
	{
		$sql = "INSERT INTO user(username,password,phone,gender,email,date_of_birth,account_type)  VALUES(?,?,?,?,?,?,?)"; 
		$this->setQuery($sql);
		$result = $this->execute(array($username, $password ,$phone ,$gender ,$email, $birthday,$account_type));
		if($result)
		{
			return $this->getLastId();
		}
		else
		{
			return false;
		}
	}
}
?>