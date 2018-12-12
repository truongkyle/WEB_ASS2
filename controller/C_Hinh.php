<?php
include('model/M_Hinh.php');
class C_Hinh{
	public function index(){
		$m_hinh = new M_Hinh();
		$hinh = $m_hinh->getImage();
		return array('hinh'=>$hinh);
	}
}
class C_Truyen{
	public function index(){
		$m_truyen = new M_Truyen();
		$truyen = $m_truyen->getManga();
		return array('truyen'=>$truyen);
	}
}
?>