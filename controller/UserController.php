<?php
include("../../model/User.php");
/**
 * 
 */
class UserController
{
	
	public function index()
	{
		$user = new User();
		$users = $user->getAllUser();
		return array('user'=>$users);
	}
	public function show($id)
	{
		$user = new User();
		$users = $user->getOneUser($id);
		return array('user'=>$users);
	}
	public function edit($id , $username, $password ,$phone ,$gender ,$email, $birthday,$account_type)
	{
		$user = new User();
		$users = $user->edit($id , $username, $password ,$phone ,$gender ,$email, $birthday,$account_type);
		if($users >0)
		{
			$_SESSION['success'] = 'Đăng kí thành công';
			header('localtion:user_list.php');
			if(isset($_SESSION['error']))
			{
				unset($_SESSION['error']);
			}
		}
		else
		{
			$_SESSION['error'] = 'Đăng kí không thành công';
			header('localtion:user_edit.php');
		}
	}

	public function add( $username, $password ,$phone ,$gender ,$email, $birthday,$account_type)
	{
		$user = new User();
		$users = $user->add( $username, $password ,$phone ,$gender ,$email, $birthday,$account_type);
		if($users >0)
		{
			$_SESSION['success'] = 'Đăng kí thành công';
			header('localtion:user_list.php');
			if(isset($_SESSION['error']))
			{
				unset($_SESSION['error']);
			}
		}
		else
		{
			$_SESSION['error'] = 'Đăng kí không thành công';
			header('localtion:user_edit.php');
		}
	}

}
?>