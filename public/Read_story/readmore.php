
<?php
include("../../controller/C_read_more.php");
$c_Readmore = new Read_moreController();
$_chapter= $c_Readmore->Get_chapter();
$_Onechapter= $c_Readmore->Get_Onechapter();
$Number_chapter = $_chapter['Number_chapter'];
$One_chapter = $_Onechapter['One_chapter'];
// print_r($One_chapter);
// print_r($image_story);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Read more</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/hoquangnam/fontawesome/css/all.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/hoquangnam/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/hoquangnam/custom.css" />
    <script src="css/hoquangnam/custom.js"></script>
</head>

<body>
    <div class="header">
        <form action="welcome.html"><button class="icon_header" style="cursor:pointer;">
        </button></form>
        <input class="search" type="text" name="search" placeholder="Name, topic, author, ...">
        <form action="search.html"><button class="search_button">Search</button></form>
        <div class="clear"></div>
        <div class="header_bottom">
        </div>
        <h1>Assignment</h1>
        <h3><a href="home.html">Home</a></h3>
        <h3><a href="#">About</a></h3>
        <h3><a href="#">Services</a></h3>
        <h3><a href="#">Contact</a></h3>
    </div>

    <div class="container" id="fixed-top">
        <section class="content-detail box-white block">
            <div class="bread">
                <a href="">Manga BK</a> > <a href="">Phiêu lưu</a> > <a href="">One Piece - Đảo Hải Tặc</a>
            </div>
        </section>
        <div class="gioithieu">
            <div class="preview-img" id="preview-img">
                <div>
                    <img alt="No image" src="image/<?=$One_chapter[0]->name?>">
                </div>
            </div>
            <div class="desc">
                <div id="Cottruyen" class="tabcontent">
                    <h1><?=$One_chapter[0]->ten_truyen?> chapter <?=$One_chapter[0]->chapter?></h1>
                    <p>Tác giả: <?= $One_chapter[0]->tac_gia?></p>
                    <p>Trạng thái: Còn tiếp</p>
                    <p>Mô tả: <?= $One_chapter[0]->mo_ta?></p>
                </div>

                <div id="Author" class="tabcontent">
                    <h1>Tác giả</h1>
                    <p>Oda Eiichiro (尾田 栄一郎 Oda Eiichirō?, Vĩ Điền Vinh Nhất Lang) (sinh ngày 1 tháng 1 năm 1975 tại
                        thành phố Kumamoto, tỉnh Kumamoto) là một họa sĩ truyện tranh người Nhật Bản, hiện đang sáng
                        tác cho nhà xuất bản Shūeisha. Tác phẩm tiêu biểu: One Piece.</p>

                </div>

                <div id="Genre" class="tabcontent content-detail">
                    <h1>Thể loại</h1>
                    <div class="group-tag">
                        <a href="">Hài hước</a>
                        <a href="">Phiêu lưu</a>
                        <a href="">Mạo hiểm</a>
                        <a href="">Shounen</a>
                        <a href="">Hành động</a>
                        <a href="">Fantasy</a>
                        <a href="">Supernatural</a>
                    </div>
                </div>
                <div class="button-row">
                    <button onclick="expandMore()" id="readMoreBtn">Xem thêm</button>
                    <button class="tablink" onclick="openTab('Cottruyen', this); equalHeightDesc()" id="defaultOpen">Cốt
                        truyện</button>
                    <button class="tablink" onclick="openTab('Author', this)">Tác giả</button>
                    <button class="tablink" onclick="openTab('Genre', this)">Thể loại</button>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="list-chuong-wrapper">
            <div class="search-chuong-bar">
                <div class="tieu-de-chuong">
                    <i>Chương mới nhất</i>
                </div>
                <form class="search-bar" method="post">
                    <input type="text" class="textbox" placeholder="Tìm kiếm chương">
                    <input title="Search" value="" type="submit" class="button fas fa-search">
                </form>
                <div class="clearfix"></div>
            </div>
            <section class="chuong-preview block box-white">
                <section class="section-content list-chuong">
                   <div>
                   <?php for($i = 0; ($i < 10 & $i <count($Number_chapter) ); $i++)
                    {
                    ?>
                    <div class="item">
                        <a href="http://localhost/WEB_ASS2/public/Read_story/read_story.php?name_story=<?=$Number_chapter[$i]->ten_truyen?>&id_truyen=<?=$Number_chapter[$i]->chapter?>">
                            <img alt="http://localhost/WEB_ASS2/public/Read_story/read_story.php?name_story=<?=$Number_chapter[$i]->ten_truyen?>&id_truyen=<?=$Number_chapter[$i]->chapter?>" src="image/<?=$Number_chapter[$i]->name?>">
                        </a>
                        <div class="name">
                            <a href="http://localhost/WEB_ASS2/public/Read_story/readmore.php?name_story=<?=$Number_chapter[$i]->ten_truyen?>&id_truyen=<?=$Number_chapter[$i]->chapter?>">Chap <?=$Number_chapter[$i]->chapter?></a>
                        </div>
                    </div>
                    <?php }?>
                    </div>
                    <div class="pagination">
                        <a href="">&laquo;</a>
                        <a class="active" href="">1</a>
                        <a href="">2</a>
                        <a href="">3</a>
                        <a href="">4</a>
                        <a href="">5</a>
                        <a href="">6</a>
                        <a href="">&raquo;</a>
                    </div>
                    <div class="clearfix"></div>
                </section>
            </section>
        </div>
        <div class="comment-section-wrapper">
            <ul class="nav nav-tabs ul-title-comment">
                <li class="active">
                    <a data-toggle="tab" href="" class="title-total-comment">
                        <i class="fa fa-comments"></i> Manga BK (<span class="comment-count">0</span>)
                    </a>
                </li>
            </ul>
            <div class="comment-content">
                <div class="main-comment">
                    <form>
                        <textarea id="content_comment" name="content_comment" placeholder="Vui lòng nhập tiếng việt có dấu."></textarea>
                        <div class="identifier-wrapper">
                            <div class="div_input_comment">
                                <input value="" class="input_comment" id="name_comment" name="name_comment" placeholder="Tên của bạn (Bắt buộc)"
                                    type="text">
                                <input value="" class="input_comment" id="email_comment" name="email_comment"
                                    placeholder="Email của bạn (Không bắt buộc)" type="email">
                            </div>
                            <div class="submit_comment_wrapper">
                                <button type="submit" class="submit_comment btn btn-danger">Bình Luận</button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container bottom_border">
          <div class="row">
            <div class=" col-sm-4 col-md col-sm-4  col-12 col">
              <h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
              <!--headin5_amrc-->
              <p class="mb10">BK Comic-Đọc truyện online, đọc truyện chữ, truyện hay. Website luôn cập nhật những bộ truyện mới thuộc các thể loại đặc sắc như truyện tiên hiệp, kiếm hiệp, hay truyện ngôn tình một cách nhanh nhất. Hỗ trợ mọi thiết bị như di động và máy tính bảng. Chân thành cảm ơn.</p>
              <p><i class="fa fa-location-arrow"></i> 9878/25 sec 9 rohini 35 </p>
              <p><i class="fa fa-phone"></i>  0363636358  </p>
              <p><i class="fa fa fa-envelope"></i> tinhzozenzo@gmail.com  </p>
    
    
            </div>
    
            <div class=" col-sm-4 col-md  col-12 col">
              <h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
              <!--headin5_amrc ends here-->
    
              <ul class="footer_ul2_amrc">
                <li><a href="#"><i class="fab fa-facebook-f fleft padding-right"></i> </a><p>FaceBook<a href="#">Quốc Tính</a></p></li>
                <li><a href="#"><i class="fab fa-facebook-f fleft padding-right"></i> </a><p>FaceBook<a href="#">Trường Kỳ</a></p></li>
                <li><a href="#"><i class="fab fa-facebook-f fleft padding-right"></i> </a><p>FaceBook<a href="#">Bảo Nhân</a></p></li>
              </ul>
              <!--footer_ul2_amrc ends here-->
            </div>
          </div>
        </div>
    
    
        <div class="container">
          <ul class="foote_bottom_ul_amrc">
            <li><a href="http://kalarikendramdelhi.com">Home</a></li>
            <li><a href="http://kalarikendramdelhi.com">About</a></li>
            <li><a href="http://kalarikendramdelhi.com">Services</a></li>
            <li><a href="http://kalarikendramdelhi.com">Pricing</a></li>
            <li><a href="http://kalarikendramdelhi.com">Blog</a></li>
            <li><a href="http://kalarikendramdelhi.com">Contact</a></li>
          </ul>
          <!--foote_bottom_ul_amrc ends here-->
          <p class="text-center">Copyright @2018 | Designed With by <a href="#">BK Comic</a></p>
    
          <ul class="social_footer_ul">
            <li><a href="http://kalarikendramdelhi.com"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="http://kalarikendramdelhi.com"><i class="fab fa-twitter"></i></a></li>
            <li><a href="http://kalarikendramdelhi.com"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="http://kalarikendramdelhi.com"><i class="fab fa-instagram"></i></a></li>
          </ul>
          <!--social_footer_ul ends here-->
        </div>
    
      </footer>
</body>

</html>