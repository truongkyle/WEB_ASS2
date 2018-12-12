<?php
include("../../controller/Read_storyController.php");
$c_Story = new Read_storyController();
$Links = $c_Story->Get_Link();
$_chapter = $c_Story->Get_chapter();
$image_story = $Links['link'];
$Number_chapter = $_chapter['Number_chapter'];
// print_r($Number_chapter);
// print_r($image_story);
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Chương 1 One Piece</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" type="text/javascript"></script> -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" type="text/javascript"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" type="text/javascript"></script> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="css/truongky/styles.css" />
    <script src="css/truongky/scripts.js"></script>
</head>

<body>

    <button onclick="topFunction()" id="myBtn" title="Go to top"><img alt="No image" class="imagetop" src="https://findicons.com/files/icons/1786/oxygen_refit/128/go_top.png">
    </button>
    <div class="" id="id_list">
        <nav class="navbar navbar-expand-sm bg-dark justify-content-center" id="fix-background-color">

            <!-- Links -->
            <ul class="navbar-nav">
                <li class="navbar-brand"> <a href="home.html"><img alt="No image" src="css/truongky/image/icon_black.png"
                            style="height:auto; width:100%">
                    </a>
                </li>

                <li class="nav-item nav-link" style="padding-left:10%">
                    <a class="navbar-brand" href="readmore.html"> <span><?=$image_story[0]->ten_truyen?></span></a>
                </li>
                <li class="nav-item">
                    <select class="custom-select bg-light nav-link" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                        <?php
                        for($i = 0 ; $i <count($Number_chapter); $i++)
                        {
                            if($image_story[0]->chapter == ($i+1)){ 
                                ?>
                        <option value="http://localhost/WEB_ASS2/public/Read_story/read_story.php?name_story=<?=$image_story[0]->ten_truyen ?>&id_truyen=<?=$Number_chapter[$i]->chapter ?>" selected="">Chapter
                            <?=$Number_chapter[$i]->chapter ?>: <?=$image_story[0]->ten_truyen ?> </option>
                            <?php }else {
                                ?>
                        <option value="http://localhost/WEB_ASS2/public/Read_story/read_story.php?name_story=<?=$image_story[0]->ten_truyen ?>&id_truyen=<?=$Number_chapter[$i]->chapter ?>">Chapter
                             <?=$Number_chapter[$i]->chapter ?>: <?=$image_story[0]->ten_truyen ?> </option>
                         <?php }
                    }?>                       
                    </select>
                </li>
                <li class="nav-item" style="padding-left:10%">
                    <button type="button"  class="fa fa-gear " data-toggle="modal" data-target="#myModal">
                        
                    </button>
                </li>


            </ul>

        </nav>
    </div>

    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title"> Tùy chỉnh </h4> 
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form>
                        Chế độ đọc:
                        <select id="mySelect">
                            <option value="1">Đọc ngang</option>
                            <option value="2">Đọc dọc</option>
                            
                        </select>
                    </form>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="myFunction()">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="content1" class="content" style="margin-top:0px; padding-top:0px; display:block">
        <div class="slideshow-container">
            <div class="text-center">
            <?php 
                 foreach ($image_story as $key => $image_link) {
                ?>
                <div class="mySlides1">
                    <div class="it"><img src="image/<?=$image_link->name?>"></div>
                </div>
                 <?php } ?>

                <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
                <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
            </div>
        </div>
    </div>

    <div id="content2" class="content" style="margin-top:0px; padding-top:0px; display:none">
        <div class="text-center">
            <?php 
                    foreach ($image_story as $key => $image_link) {
                    ?>
                         <div class="it2"><img src="image/<?=$image_link->name?>"></div>
             <?php } ?>

        </div>

    </div>





    <script>

        window.onload = function () { setHeightImage() };
        window.onresize = function () { setHeightImage() };

        var slideIndex = [1, 1];
        var slideId = ["mySlides1", "mySlides2"]
        showSlides(1, 0);


        function plusSlides(n, no) {
            showSlides(slideIndex[no] += n, no);
        }

        function showSlides(n, no) {
            var i;
            var x = document.getElementsByClassName(slideId[no]);
            if (n > x.length) { slideIndex[no] = 1 }
            if (n < 1) { slideIndex[no] = x.length }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex[no] - 1].style.display = "block";
        }

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () { scrollFunction() };
        var element, name, arr;

        function scrollFunction() {
            element = document.getElementById("id_list");
            name = "list";
            arr = element.className.split(" ");
            if (arr.indexOf(name) == -1) {
                element.className += " " + name;
            }
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
                element.className = "";
            }
        }
        function setHeightImage() {
        }
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

        function setHeightImage() {
            header = document.getElementById("id_list");
            img = document.getElementsByClassName("it");
            for (i = 0; i < img.length; i++) {
                img[i].style.height = window.innerHeight - header.offsetHeight + "px";

            }
            console.log(header.offsetHeight);
            console.log(window.innerHeight);
        }

        function myFunction() {
            var x = document.getElementById("mySelect").value;
            var content1 = document.getElementById("content1");
            var content2 = document.getElementById("content2");
            console.log(x);
            if(x == 1){
                content2.style.display = "none"
                content1.style.display = "block";
            } else{
                content1.style.display = "none"
                content2.style.display = "block";
            }
           
        }

    </script>
</body>