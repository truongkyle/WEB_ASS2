<?php
include('database.php');

class Comment extends database
{
	
	function getAllComment()
	{
		$sql = "SELECT * FROM comments";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	function getOneComment( $id )
	{
		$sql = "SELECT * FROM comments WHERE id = $id";
		$this->setQuery($sql);
		return $this->loadRow(array($id));
	}
}
?>