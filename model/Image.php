<?php
include('database.php');

class Image extends database
{
	
	function getAllImage()
	{
		$sql = "SELECT * FROM images";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	function getOneImage( $id )
	{
		$sql = "SELECT * FROM images WHERE id = $id";
		$this->setQuery($sql);
		return $this->loadRow(array($id));
	}
}
?>