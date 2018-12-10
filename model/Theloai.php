<?php
include('database.php');

class Theloai extends database
{
	
	function getAllTheloai()
	{
		$sql = "SELECT * FROM the_loai";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	function getOneTheloai( $id )
	{
		$sql = "SELECT * FROM the_loai WHERE id = $id";
		$this->setQuery($sql);
		return $this->loadRow(array($id));
	}
}
?>