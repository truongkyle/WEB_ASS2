<?php
include('database.php');

class Readmore extends database
{
	function chapter($name_story, $vitri=-1, $limit=-1){
        $sql = "SELECT * FROM (images join truyen on images.id_truyen = truyen.id) WHERE (images.id_truyen in (SELECT truyen.id FROM truyen WHERE truyen.ten_truyen = '$name_story')) and images.order_image = 0 ";
        // $sql = "SELECT truyen.id FROM truyen WHERE truyen.ten_truyen = '$name_story'";
        if($vitri >-1 && $limit >1){
            $sql .="limit $vitri, $limit";
        }
        // $sql +="ORDER BY images.id_truyen";
        $this->setQuery($sql);
		return $this->loadAllRows(array($name_story));
    }
    function Onechapter($name_story, $truyen_id){
        $sql = "SELECT * FROM images inner join truyen on truyen.id = images.id_truyen WHERE truyen.id = $truyen_id and truyen.ten_truyen = '$name_story' and images.order_image = 0  ORDER BY images.order_image";
		$this->setQuery($sql);
		return $this->loadAllRows(array($truyen_id, $name_story));
	}
    
}

?>