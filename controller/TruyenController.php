<?php
include("../../model/Truyen.php");
/**
 * 
 */
class TruyenController
{
	
	public function index()
	{
		$truyen = new Truyen();
		$truyens = $truyen->getAllTruyen();
		return array('truyen'=>$truyens);
	}
	public function show($id)
	{
		$truyen = new Truyen();
		$truyens = $truyen->getOneTruyen($id);
		return array('truyen'=>$truyens);
	}
	public function getAllTheloai()
	{
		$truyen = new Truyen();
		$theloai = $truyen->getAllTheloai();
		return array('theloai'=>$theloai);
	}
}
?>