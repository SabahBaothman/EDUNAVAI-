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


<div class="team-container">
      <h1><span class="Team">Team</span> <span class="Resume">Resume</span></h1>
        <h4>See Our Team Resumes</h4>

        <!-- Team Member 1 -->
        <div class="resume-section">
            <div class="left-section">
            <div class="icon-box">
                <!-- Add your icon here -->
                <i class="fa fa-icon"></i>
            </div>
                <h3>SABAH BAOTHMAN</h3>
                <p>CS Student At King </br> Abdulaziz Unevirsity.</p>
            </div>
            <div class="right-section">
            <object data="/pdf/SABAHBAOTHMAN_CV.pdf" type="application/pdf" width="100%" height="600">
           <p>It appears you don't have a PDF plugin for this browser. No worries, you can <a href="/pdf/your_resume.pdf">download the PDF file.</a></p>
            </object>
            </div>
        </div>
        <hr class="line-divider">
        <hr class="line-dividerr">

        <!-- Team Member 2 -->
        <div class="resume-section team-member-2 " id="specificSection">
            <div class="left-section">
            <div class="icon-box">
                <!-- Add your icon here -->
                <i class="fa fa-icon"></i>
            </div>
                <h3>RIMA ALGHAMDI</h3>
                <p>CS Student At King </br> Abdulaziz Unevirsity.</p>
            </div>
            <div class="right-section">
           <object data="/pdf/RimaAli-2023.pdf" type="application/pdf" width="100%" height="600">
           <p>It appears you don't have a PDF plugin for this browser. No worries, you can <a href="/pdf/RimaAli-2023.pdf">download the PDF file.</a></p>

            </object>
            </div>
        </div>
        <hr class="line-divider">
    </div>



<!-- Include the footer file  -->
<?php
include('../includes/footer.php');
?>
</body>
</html>
