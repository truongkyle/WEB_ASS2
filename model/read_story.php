<?php
include('database.php');

class Story extends database
{
	
	function get_story($truyen_id)
	{
		$sql = "SELECT * FROM images inner join truyen on truyen.id = images.id_truyen WHERE truyen.id = $truyen_id ORDER BY images.order_image";
		$this->setQuery($sql);
		return $this->loadAllRows(array($truyen_id));
	}
	function chapter($name_story){
		$sql = "SELECT * FROM truyen WHERE truyen.ten_truyen = '$name_story' ORDER BY truyen.chapter";
		$this->setQuery($sql);
		return $this->loadAllRows(array($name_story));
	}
    
}

?>