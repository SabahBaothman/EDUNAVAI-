<!-- Set the page title and include the header file -->
<?php
$pageTitle = "About Us";
include('../includes/header.php');
?>


<body>
    
<!-- Set the page title and current page for navigation, then include the navigation links file -->
<?php
$pageTitle = "EduNavAi";
$currentPage = "about";
include('../includes/links.php');
?>

<?php
include '../db/fetch_data.php';

?>

<!-- Include the footer file  -->
<?php
include('../includes/footer.php');
?>
</body>
</html>