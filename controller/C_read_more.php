<?php
include("../../model/M_read_more.php");
include("../../model/page_readmore.php");
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
        $trang_hientai = (isset($_GET['page']))?$_GET['page']:1;
        
        $pagination = new pagination(count($Number_chapter),$trang_hientai,10,3);
        $paginationHTML = $pagination->showPagination();
        $limit = $pagination->_nItemOnPage;
        $vitri = ($trang_hientai-1)*$limit;
        $Number_chapter = $Readmore->chapter($name_story,$vitri,$limit);

        return array('Number_chapter'=>$Number_chapter,'thanhphantrang'=>$paginationHTML);
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