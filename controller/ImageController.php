<?php
include("../../model/Image.php");
/**
 * 
 */
class ImageController
{
	
	public function index()
	{
		$image = new Image();
		$images = $image->getAllImage();
		return array('image'=>$images);
	}
	public function show($id)
	{
		$image = new Image();
		$images = $image->getOneImage($id);
		return array('image'=>$images);
	}
}
?>