
<!-- Navigation bar of the page, including logo, website name, and links to pages -->
<nav>

<!-- Holder for the website logo -->
<span id="nav-logo-holder">
    <img src="../images/logo.png" width="80px">
</span>
<!-- Holder for the website name -->
<span id="nav-title-holder">
    <h3><?php echo $pageTitle; ?></h3>
</span>

<!-- Holder for navigation links -->
<span id="nav-links">
    <a href="../pages/index.php" class="nav-link <?php echo ($currentPage === 'home') ? 'selected' : ''; ?>">Home</a>
    <a href="../pages/Roadmap Generator.php" class="nav-link <?php echo ($currentPage === 'roadmap') ? 'selected' : ''; ?>">Roadmap Generator</a>
    <a href="../pages/About us.php" class="nav-link <?php echo ($currentPage === 'about') ? 'selected' : ''; ?>">About Us</a>
    <a href="../pages/Contact.php" class="nav-link <?php echo ($currentPage === 'contact') ? 'selected' : ''; ?>">Contact</a>
    <a href="../pages/Table.php" class="nav-link <?php echo ($currentPage === 'Table') ? 'selected' : ''; ?>">Table</a>
</span>

</nav>