<!-- Set the page title and include the header file -->
<?php
$pageTitle = "EduNavAi";
include('../includes/header.php');
?>


<body>

    <!-- Set the page title and current page for navigation, then include the navigation links file -->
    <?php
$pageTitle = "EduNavAi";
$currentPage = "Roadmap";
include('../includes/links.php');
?>


    <div id="roadmap-container">
    </div>

    <script src="../js/displayRoadmap.js">
    </script>
    <!-- Include the footer file  -->
    <?php
include('../includes/footer.php');
?>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>

</body>

</html>
