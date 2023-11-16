<!-- Set the page title and include the header file -->
<?php
$pageTitle = "EduNavAi";
include('../includes/header.php');
?>


<body>
    
<!-- Set the page title and current page for navigation, then include the navigation links file -->
<?php
$pageTitle = "EduNavAi";
$currentPage = "home";
include('../includes/links.php');
?>





    <div class="container">
        <div class="controls" style="display:none">

            <button id="prev" onclick="showPreviousImage()">&lt;</button>
            <button id="next" onclick="showNextImage()">&gt;</button>
        </div>
        <div class="main-image"  style="display:none">
        <div class="back-button" style="display:none;">
            <button onclick="showThumbnails()">X</button>
        </div>
            <img src="" alt="" >
        </div>
        <div class="thumbnails">
            <div class="row" >
            <img id="1" src="../media/images/quotes/1.png" alt="Image 3" onclick="showImage(this)" style="width:23%; height:10vw;">
            <img id="2" src="../media/images/quotes/2.png" alt="Image 3" onclick="showImage(this)" style="width:23%; height:10vw;">
            <img id="3" src="../media/images/quotes/3.png" alt="Image 3" onclick="showImage(this)" style="width:23%; height:10vw;">
            <img id="4" src="../media/images/quotes/4.png" alt="Image 3" onclick="showImage(this)" style="width:23%; height:10vw;">

            </div>

            <div class="row" >
            <img id="5" src="../media/images/quotes/5.png" alt="Image 3" onclick="showImage(this)" style="width:23%; height:10vw;">
            <img id="6" src="../media/images/quotes/6.png" alt="Image 3" onclick="showImage(this)" style="width:23%; height:10vw;">
            <img id="7" src="../media/images/quotes/7.png" alt="Image 3" onclick="showImage(this)" style="width:23%; height:10vw;">
            <img id="8" src="../media/images/quotes/8.png" alt="Image 3" onclick="showImage(this)" style="width:23%; height:10vw;">

            </div>

            <div class="row" >
            <img id="9" src="../media/images/quotes/9.png" alt="Image 3" onclick="showImage(this)" style="width:23%; height:10vw;">
            <img id="10" src="../media/images/quotes/10.png" alt="Image 3" onclick="showImage(this)" style="width:23%; height:10vw;">
            <img id="11" src="../media/images/quotes/11.png" alt="Image 3" onclick="showImage(this)" style="width:23%; height:10vw;">
            <img id="12" src="../media/images/quotes/12.png" alt="Image 3" onclick="showImage(this)" style="width:23%; height:10vw;">

            </div>
        </div>




    </div>
<script src="../js/picture-gallery.js"></script>




<!-- Include the footer file  -->
<?php
include('../includes/footer.php');
?>
</body>
</html>