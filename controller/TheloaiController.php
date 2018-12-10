<?php
include("../../model/Theloai.php");
/**
 * 
 */
class TheloaiController
{
	
	public function index()
	{
		$theloai = new Theloai();
		$theloais = $theloai->getAllTheloai();
		return array('theloai'=>$theloais);
	}
	public function show($id)
	{
		$theloai = new Theloai();
		$theloais = $theloai->getOneTheloai($id);
		return array('theloai'=>$theloais);
	}
}
?>