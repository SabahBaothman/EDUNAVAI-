
<!-- Navigation bar of the page, including logo, website name, and links to pages -->
<nav>

<!-- Holder for the website logo -->
<a href="../pages/index.php" style="display: flex;">
<span id="nav-logo-holder">
    <img id="logo" src="../media/images/logo.png" width="80px">
</span>
<!-- Holder for the website name -->
<span id="nav-title-holder">
    <h3><?php echo $pageTitle; ?></h3>
</span>
</a>
<!-- Holder for navigation links -->
<span id="nav-links">
    <a href="../pages/Roadmap Generator.php" class="nav-link <?php echo ($currentPage === 'roadmap') ? 'selected' : ''; ?>">Roadmap Generator</a>
    <a href="../pages/About us.php" class="nav-link <?php echo ($currentPage === 'about') ? 'selected' : ''; ?>">About Us</a>
    <a href="../pages/Contact.php" class="nav-link <?php echo ($currentPage === 'contact') ? 'selected' : ''; ?>">Contact</a>
    <a href="../pages/FAQ.php" class="nav-link <?php echo ($currentPage === 'Table') ? 'selected' : ''; ?>">FAQ</a>
    <a href="../pages/PictureGallery.php" class="nav-link <?php echo ($currentPage === 'Pictur Gallery') ? 'selected' : ''; ?>">Pictur Gallery</a>
    <a href="../pages/Feedback.php" class="nav-link <?php echo ($currentPage === 'Feedback') ? 'selected' : ''; ?>">Fedback</a>

</span>

</nav>
