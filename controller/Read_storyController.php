<?php
include("../../model/read_story.php");
/**
 * 
 */
class Read_storyController
{
	
	public function Get_Link()
	{   
		$id_truyen = $_GET['id_truyen'];
		$story= new Story();
		$link = $story->get_story($id_truyen);
		return array('link'=>$link);
	}
	function Get_chapter()
	{
		$name_story = $_GET['name_story'];
		$story= new Story();
		$Number_chapter = $story->chapter($name_story);
		return array('Number_chapter'=>$Number_chapter);
	}


}
?>