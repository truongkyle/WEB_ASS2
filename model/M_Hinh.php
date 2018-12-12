<?php
include('database.php');
class M_Hinh extends database{
	function getImage(){
		$sql="SELECT * FROM images";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
}
class M_Truyen extends database{
	function getManga(){
		$sql="SELECT * FROM truyen";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}	
}
?>