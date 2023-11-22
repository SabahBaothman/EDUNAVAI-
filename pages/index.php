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
    <div class="center" id="main-page-conrtainer">
        <h1><span>AI Powered</span></br>Roadmap Generator</h1>
        </br>
        <p>Start your learning journy with with<br>your Education Navigator using AI</p>
        <div id="index-info">

            <div>
                <div id="gpt-logo-holder">
                    <img src="../media/images/gpt.png" width="5vw">
                </div>
                <div id="gpt-info-holder">
                    Powered with <b>GPT3.5</b> capabilities,<br>crafting dynamic roadmaps effortlessly.
                </div>
            </div>
            <div>
                <div id="learners-logo-holder">
                    <img src="../media/images/learners.png" width="5vw">
                </div>
                <div id="learners-info-holder">
                    <b>AI-generated</b> roadmaps can personalize<br>learning experiences for learners.
                </div>
            </div>
        </div>
        <div id="watch-video-section" class="  watch-video-section">
            <div class="left-half">
                <!-- Your image goes here -->
                <img src="../media/images/video-gif.gif" alt="Watch Video Image">
            </div>
            <div class="right-half">
                <h1><span class="Know">Know</span><span class="More">More</span></h1>
                <h4>Watch our video to see how EduNavAi transforms education, guiding individuals through unique
                    </br> learning journeys and revolutionizing learning.</h4>
                <button onclick="window.location.href='video.php'">Watch Video</button>
            </div>
        </div>
    </div>

    <div>
        <div id="circular-text-container">
            <span id="circular-text"><img id="text-image" src="../media/images/start.png"></span>
        </div>

        <a id="arrows-image-holder" href="#watch-video-section">
            <img id="arrows-image" src="../media/images/arrows.png">
        </a>
    </div>



    <script>
    const textElement = document.getElementById('circular-text');

    // Define initial rotation angle
    let rotationAngle = 0;

    // Set up animation loop
    function animateCircularText() {
        // Update rotation angle
        rotationAngle += 1;

        // Apply rotation to the text element
        textElement.style.transform = `translate(-50%, -50%) rotate(${rotationAngle}deg)`;

        // Request next animation frame
        requestAnimationFrame(animateCircularText);
    }

    // Start animation loop
    animateCircularText();
    </script>
    <!-- Include the footer file  -->
    <?php
include('../includes/footer.php');
?>
</body>

</html>
