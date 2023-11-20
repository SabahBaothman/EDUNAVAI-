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

 <!-- Content Section -->
 <div class="video-container">
    
        <h1><span class="Our">Our</span> <span class="Video">Video</span></h1>
        <h4>Watch Our Video</h4>

        <!-- Video Embed using object tag -->
        <object width="800" height="450">
            <param name="movie" value="https://www.youtube.com/v/lBINz0kl0uo?version=3&amp;autohide=1">
            <param name="allowFullScreen" value="true">
            <param name="allowscriptaccess" value="always">
            <embed src="https://www.youtube.com/v/lBINz0kl0uo?version=3&amp;autohide=1" type="application/x-shockwave-flash" width="800" height="450" allowscriptaccess="always" allowfullscreen="true">
        </object>

        <!-- Lines -->
        <div class="line-left"></div>
        <div class="line-bottom"></div>
    </div>





<!-- Include the footer file  -->
<?php
include('../includes/footer.php');
?>
</body>
</html>
