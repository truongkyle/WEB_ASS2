<?php
include("../../model/M_read_more.php");
/**
 * 
 */
class Read_moreController
{
	
	function Get_chapter()
	{
		$name_story = $_GET['name_story'];
		$Readmore= new Readmore();
		$Number_chapter = $Readmore->chapter($name_story);
		return array('Number_chapter'=>$Number_chapter);
    }
    function Get_Onechapter()
	{
        $name_story = $_GET['name_story'];
        $id_truyen  = $_GET['id_truyen'];
		$Readmore= new Readmore();
		$One_chapter = $Readmore->Onechapter($name_story,$id_truyen);
		return array('One_chapter'=>$One_chapter);
	}


}
?>