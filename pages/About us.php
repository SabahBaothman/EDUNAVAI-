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

 <!-- Section 1: About Us -->
 <div class="section about-section">
        <div class="left-half">
        <h5> Welcome to </h5>
        <h1><span class="about">About</span> <span class="us">Us</span></h1>
            <h5>We are on mission to transform education by providing </br> personalized guidance, empowering learners to unlock </br> their full potential and achieve success on their terms.</h5>
            <button onclick="scrollToSection('vision-section')">Learn More</button>
        </div>
        <div class="right-half">
            <!-- Your image goes here -->
            <img src="your-image.jpg" alt="About Us Image">
        </div>
    </div>

    <!-- Section 2: Our Vision -->
    <div id="vision-section" class="section vision-section">
        <h4>Our Vision</h4>
        <h2>We envision a world where individuals confidently  </br> navigate unique learning journeys. Our mission </br> is to revolutionize education by providing personalized</br>  guidance, empowering learners  to unlock their </br> potential and achieve success.</h2>
    </div>

    <!-- Section 3: Watch the Video -->
    <div class="section watch-video-section">
        <div class="left-half">
            <!-- Your image goes here -->
            <img src="your-image.jpg" alt="Watch Video Image">
        </div>
        <div class="right-half">
        <h1><span class="Know">Know</span> <span class="More">More</span></h1>
            <h4>Watch our video to see how EduNavAi transforms education, guiding individuals through unique  </br> learning journeys and revolutionizing learning.</h4>
            <button onclick="window.location.href='video.php'">Watch Video</button>
        </div>
    </div>

    <!-- Section 4: Our Services -->
<!-- Section 4: Our Services -->
<div class="section services-section">
    <h1><span class="Our">Our</span> <span class="Services">Services</span></h1>
    <h4>Our website provides many services.</h4>
    <!-- Service Boxes -->
    <div class="service-boxes">
        <div class="service-box">
            <div class="icon-box">
                <!-- Add your icon here -->
                <i class="fa fa-icon"></i>
            </div>
            <p>Service 1</p>
        </div>

        <div class="service-box">
            <div class="icon-box">
                <!-- Add your icon here -->
                <i class="fa fa-icon"></i>
            </div>
            <p>Service 2</p>
        </div>

        <div class="service-box">
            <div class="icon-box">
                <!-- Add your icon here -->
                <i class="fa fa-icon"></i>
            </div>
            <p>Service 3</p>
        </div>
    </div>
</div>


<!-- Section 5: Our Team -->
<div class="section team-section">
    <h4>GET TO KNOW US</h4>
    <h1><span class="Our">Our</span> <span class="Team">Team</span></h1>
    
    <div class="team-cards">
    <!-- Team Member 1 -->
    <div class="team-card">
        <img src="team_member1.jpg" alt="Team Member 1">
        <div class="team-info">
            <h4>SABAH BAOTHMAN</h4>
            <div class="social-icons">
            <a href="https://github.com/SabahBaothman" target="_blank"><i class="fa-brands fa-github"></i></a>
            <a href="https://www.linkedin.com/in/sabah-baothman/" target="_blank"><i class="fab fa-linkedin"></i></a>            </div>
            <button onclick="window.location.href='Resume.php'">View Resume</button>
        </div>
    </div>

    <!-- Team Member 2 -->
    <div class="team-card">
        <img src="team_member2.jpg" alt="Team Member 2">
        <div class="team-info">
            <h4>RIMA ALGHAMDI</h4>
            <div class="social-icons">
            <a href="https://github.com/rimagh19" target="_blank"><i class="fa-brands fa-github"></i></a>
            <a href="https://www.linkedin.com/in/johndoe" target="_blank"><i class="fab fa-linkedin"></i></a>            </div>
            <button onclick="window.location.href='Resume.php#specificSection'">View Resume</button>

        </div>
    </div>
    </div>
</div>


    <script>
        function scrollToSection(sectionId) {
            document.getElementById(sectionId).scrollIntoView({ behavior: 'smooth' });
        }
    </script>




<!-- Include the footer file  -->
<?php
include('../includes/footer.php');
?>
</body>
</html>
