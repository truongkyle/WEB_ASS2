<?php
include('database.php');

class Truyen extends database
{
	
	function getAllTruyen()
	{
		$sql = "SELECT * FROM truyen";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	function getOneTruyen( $id )
	{
		$sql = "SELECT * FROM truyen WHERE id = $id";
		$this->setQuery($sql);
		return $this->loadRow(array($id));
	}

	function getAllTheloai()
	{
		$sql = "SELECT * FROM the_loai";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
}
?>