<?php
include("../../model/Comment.php");
/**
 * 
 */
class CommentController
{
	
	public function index()
	{
		$comment = new Comment();
		$comments = $comment->getAllComment();
		return array('comment'=>$comments);
	}
	public function show($id)
	{
		$comment = new Comment();
		$comments = $comment->getOneComment($id);
		return array('comment'=>$comments);
	}
}
?>