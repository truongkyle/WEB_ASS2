<?php
include('controller/C_Hinh.php');
$c_hinh = new C_Hinh();
$noi_dung = $c_hinh->index();
$hinh = $noi_dung['hinh'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>BK Comic</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" type="text/javascript"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" type="text/javascript"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link rel="stylesheet" href="css/quoctinh/styles.css"/>
  <script src="css/quoctinh/scripts.js"></script>
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

  <div class="container">
    <div class="xs-menu-cont">
      <a id="menutoggle"><i class="fa fa-align-justify"></i> </a>
      <nav class="xs-menu displaynone">
        <ul>
          <li class="active">
            <a href="#">Trang Chủ</a>
          </li>
          <li>
            <a href="#">About</a>
          </li>
          <li>
            <a href="#">Services</a>
          </li>
          <li>
            <a href="#">Team</a>
          </li>
          <li>
            <a href="#">Portfolio</a>
          </li>
          <li>
            <a href="#">Blog</a>
          </li>
          <li>
            <a href="#">Contact</a>
          </li>

        </ul>
      </nav>
    </div>

    <div id="myCarousel" class="carousel slide" data-ride="carousel" >
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" >
        <div class="item active">
          <a href="readmore.html">
            <?php
            $save = 0;
              for($i=0;$i<count($hinh);$i++){
                if($hinh[$i]->id_truyen == 108){  
                  $save = $i;
                }
              }
            ?>
            <img alt="No image" src="css/quoctinh/Images/<?=$hinh[$save]->name?>" style="width:100%;"></a>
        </div>         

        <div class="item">
          <img alt="No image" src="css/quoctinh/Images/<?=$hinh[$save+1]->name?>" style="width:100%;">
        </div>
  
        <div class="item">
          <img alt="No image" src="css/quoctinh/Images/<?=$hinh[$save+2]->name?>" style="width:100%;">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="carousel slide multi-item-carousel" id="theCarousel">
          <div class="carousel-inner">
            <div class="item active">
              <div class="col-xs-4"><a href="#1"><img alt="No image" src="css/quoctinh/Images/<?=$hinh[0]->name?>" class="img-responsive" ></a></div>
              <div class="col-xs-8">
                <div class="col-xs-4">
                  <p>Arifureta Shokugyou De Sekai Saikyou</p>
                  <p>Tác giả : Hakumai Ryou</p>
                  <p>Lượt xem: 74,966</p>
                  <p>Tình trạng: Đang Cập Nhật</p>
                </div>
                <div class="col-xs-8"><p>Nội Dung Arifureta Shokugyou De Sekai Saikyou:</p>
                  <p>Một thanh niên và lớp hắn được triệu hồi tới thế giới khác. Bình thường là một thằng phế vật, khi sang thế giới khác... cậu ta... vẫn là một thằng phế vật với Class tầm thường. Chả biết hắn sẽ cứu thế giới ra sao? Xem để biết thêm chi tiết</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="col-xs-4"><a href="#1"><img alt="No image" src="css/quoctinh/Images/2.jpeg" class="img-responsive" ></a></div>
              <div class="col-xs-8"><div class="col-xs-4">
                <p>Arifureta Shokugyou De Sekai Saikyou</p>
                <p>Tác giả : Hakumai Ryou</p>
                <p>Lượt xem: 74,966</p>
                <p>Tình trạng: Đang Cập Nhật</p>
              </div>
              <div class="col-xs-8"><p>Nội Dung Arifureta Shokugyou De Sekai Saikyou:</p>
                <p>Một thanh niên và lớp hắn được triệu hồi tới thế giới khác. Bình thường là một thằng phế vật, khi sang thế giới khác... cậu ta... vẫn là một thằng phế vật với Class tầm thường. Chả biết hắn sẽ cứu thế giới ra sao? Xem để biết thêm chi tiết</p>
              </div></div>
            </div>
            <div class="item">
              <div class="col-xs-4"><a href="#1"><img alt="No image" src="css/quoctinh/Images/3.jpeg" class="img-responsive"></a></div>
              <div class="col-xs-8"><div class="col-xs-4">
                <p>Arifureta Shokugyou De Sekai Saikyou</p>
                <p>Tác giả : Hakumai Ryou</p>
                <p>Lượt xem: 74,966</p>
                <p>Tình trạng: Đang Cập Nhật</p>
              </div>
              <div class="col-xs-8"><p>Nội Dung Arifureta Shokugyou De Sekai Saikyou:</p>
                <p>Một thanh niên và lớp hắn được triệu hồi tới thế giới khác. Bình thường là một thằng phế vật, khi sang thế giới khác... cậu ta... vẫn là một thằng phế vật với Class tầm thường. Chả biết hắn sẽ cứu thế giới ra sao? Xem để biết thêm chi tiết</p>
              </div></div>
            </div>
            <div class="item">
              <div class="col-xs-4"><a href="#1"><img alt="No image" src="css/quoctinh/Images/4.jpeg" class="img-responsive" ></a></div>
              <div class="col-xs-8"><div class="col-xs-4">
                <p>Arifureta Shokugyou De Sekai Saikyou</p>
                <p>Tác giả : Hakumai Ryou</p>
                <p>Lượt xem: 74,966</p>
                <p>Tình trạng: Đang Cập Nhật</p>
              </div>
              <div class="col-xs-8"><p>Nội Dung Arifureta Shokugyou De Sekai Saikyou:</p>
                <p>Một thanh niên và lớp hắn được triệu hồi tới thế giới khác. Bình thường là một thằng phế vật, khi sang thế giới khác... cậu ta... vẫn là một thằng phế vật với Class tầm thường. Chả biết hắn sẽ cứu thế giới ra sao? Xem để biết thêm chi tiết</p>
              </div></div>
            </div>
            <div class="item">
              <div class="col-xs-4"><a href="#1"><img alt="No image" src="css/quoctinh/Images/5.jpeg" class="img-responsive" ></a></div>
              <div class="col-xs-8"><div class="col-xs-4">
                <p>Arifureta Shokugyou De Sekai Saikyou</p>
                <p>Tác giả : Hakumai Ryou</p>
                <p>Lượt xem: 74,966</p>
                <p>Tình trạng: Đang Cập Nhật</p>
              </div>
              <div class="col-xs-8"><p>Nội Dung Arifureta Shokugyou De Sekai Saikyou:</p>
                <p>Một thanh niên và lớp hắn được triệu hồi tới thế giới khác. Bình thường là một thằng phế vật, khi sang thế giới khác... cậu ta... vẫn là một thằng phế vật với Class tầm thường. Chả biết hắn sẽ cứu thế giới ra sao? Xem để biết thêm chi tiết</p>
              </div></div>
            </div>
            <div class="item">
              <div class="col-xs-4"><a href="#1"><img alt="No image" src="css/quoctinh/Images/6.jpeg" class="img-responsive" ></a></div>
              <div class="col-xs-8"><div class="col-xs-4">
                <p>Arifureta Shokugyou De Sekai Saikyou</p>
                <p>Tác giả : Hakumai Ryou</p>
                <p>Lượt xem: 74,966</p>
                <p>Tình trạng: Đang Cập Nhật</p>
              </div>
              <div class="col-xs-8"><p>Nội Dung Arifureta Shokugyou De Sekai Saikyou:</p>
                <p>Một thanh niên và lớp hắn được triệu hồi tới thế giới khác. Bình thường là một thằng phế vật, khi sang thế giới khác... cậu ta... vẫn là một thằng phế vật với Class tầm thường. Chả biết hắn sẽ cứu thế giới ra sao? Xem để biết thêm chi tiết</p>
              </div></div>
            </div>
            <!-- add  more items here -->
            <!-- Example item start:  -->

            <div class="item">
              <div class="col-xs-4"><a href="#1"><img alt="No image" src="css/quoctinh/Images/7.jpeg" class="img-responsive" ></a></div>
              <div class="col-xs-8"><div class="col-xs-4">
                <p>Arifureta Shokugyou De Sekai Saikyou</p>
                <p>Tác giả : Hakumai Ryou</p>
                <p>Lượt xem: 74,966</p>
                <p>Tình trạng: Đang Cập Nhật</p>
              </div>
              <div class="col-xs-8"><p>Nội Dung Arifureta Shokugyou De Sekai Saikyou:</p>
                <p>Một thanh niên và lớp hắn được triệu hồi tới thế giới khác. Bình thường là một thằng phế vật, khi sang thế giới khác... cậu ta... vẫn là một thằng phế vật với Class tầm thường. Chả biết hắn sẽ cứu thế giới ra sao? Xem để biết thêm chi tiết</p>
              </div></div>
            </div>

            <!--  Example item end -->
          </div>
          <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
          <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
        </div>
      </div>
    </div>
    <div class="row"> <div class="col-md-3 col-xs-6"> <a href="#" class="thumbnail"> 
      <?php
      $id = 0;
        for($i=0;$i<count($hinh);$i++){
          if($hinh[$i]->id_truyen==101){
            $id = $i;
          }
        }
            ?>
              <img alt="100%x180" data-src="holder.js/100%x180" style="height: 180px; width: 100%; display: block;" src="css/quoctinh/Images/<?=$hinh[$id]->name?>" data-holder-rendered="true">

              </a> </div> <div class="col-md-3 col-xs-6"> <a href="#" class="thumbnail"> 
        <img alt="100%x180" data-src="holder.js/100%x180" src="css/quoctinh/Images/<?=$hinh[$id+1]->name?>" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;"> 
            
                </a> </div> <div class="col-md-3 col-xs-6"> <a href="#" class="thumbnail"> 
          <img alt="100%x180" data-src="holder.js/100%x180" src="css/quoctinh/Images/<?=$hinh[$id+2]->name?>" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;"> 

            </a> </div> <div class="col-md-3 col-xs-6"> <a href="#" class="thumbnail"> 
            <img alt="100%x180" data-src="holder.js/100%x180" src="css/quoctinh/Images/<?=$hinh[$id+3]->name?>" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">

        </a> </div> </div>
    <div class="bs-example" data-example-id="thumbnails-with-custom-content"> <div class="row"> <div class="col-sm-6 col-md-4"> <div class="thumbnail"> <a href="#" class="thumbnail"><img alt="100%x200" data-src="holder.js/100%x200" src="css/quoctinh/Images/<?=$hinh[$id+4]->name?>" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;"> </a><div class="caption"> <h3>Arifureta Shokugyou De Sekai Saikyou</h3> <p>Một thanh niên và lớp hắn được triệu hồi tới thế giới khác. Bình thường là một thằng phế vật, khi sang thế giới khác... cậu ta... vẫn là một thằng phế vật với Class tầm thường. Chả biết hắn sẽ cứu thế giới ra sao? Xem để biết thêm chi tiết</p> <p><a href="#" class="btn btn-primary" role="button">Readmore</a> </p> </div> </div> </div> <div class="col-sm-6 col-md-4"> <div class="thumbnail"> <a href="#" class="thumbnail"><img alt="100%x200" data-src="holder.js/100%x200" src="css/quoctinh/Images/<?=$hinh[$id+5]->name?>" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;"> </a><div class="caption"> <h3>Arifureta Shokugyou De Sekai Saikyou</h3> <p>Một thanh niên và lớp hắn được triệu hồi tới thế giới khác. Bình thường là một thằng phế vật, khi sang thế giới khác... cậu ta... vẫn là một thằng phế vật với Class tầm thường. Chả biết hắn sẽ cứu thế giới ra sao? Xem để biết thêm chi tiết</p> <p><a href="#" class="btn btn-primary" role="button">Readmore</a></p> </div> </div> </div> <div class="col-sm-6 col-md-4"> <div class="thumbnail"> <a href="#" class="thumbnail"><img alt="100%x200" data-src="holder.js/100%x200" src="css/quoctinh/Images/<?=$hinh[$id+6]->name?>" data-holder-rendered="true" style="height: 200px; width: 100%; display: block;"></a> <div class="caption"> <h3>Arifureta Shokugyou De Sekai Saikyou</h3> <p>Một thanh niên và lớp hắn được triệu hồi tới thế giới khác. Bình thường là một thằng phế vật, khi sang thế giới khác... cậu ta... vẫn là một thằng phế vật với Class tầm thường. Chả biết hắn sẽ cứu thế giới ra sao? Xem để biết thêm chi tiết</p> <p><a href="#" class="btn btn-primary" role="button">Readmore</a> </p> </div> </div> </div> </div> </div>




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
