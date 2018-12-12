<?php
include('database.php');
class M_Hinh extends database{
	function getImage(){
		$sql="SELECT * FROM images";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
}

?>