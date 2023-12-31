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


    <div id="form-container">
        <h1>
            Create Your Custom <span class="blue-text">Learning Roadmap</span>
        </h1>
        <p>Empower Your Learning Journey with
            <br> Personalized Guidance
        </p>

        <button id="start-roadmap" onclick="scrollToSection('scroll-here-1')">Lets Start</button>
        <div id="scroll-here-1">
        </div>
        <form id="roadmap-form" class="roadmap-form">
            <div class="card-brands careers-card form-section" id="form-section-1">
                <div class="section-head">
                    <img class="form-head-img" src="../media/images/profile.png">
                    <h4>STEP#1</h4>
                    <span class="h-line">
                        <hr>
                    </span>
                </div>
                <h3>Personal Profile</h3>
                <label for="nameInput">
                    <p>Your Name</p>
                    <input type="text" placeholder="Name" name="nameInput" id="nameInput" required/>
                </label>
                <label for="ageInput">
                    <p>Age Group</p>
                    <select name="ageInput" id="ageInput" required>
                        <option selected value="default">Select AgeGroup</option>
                        <option value="15-18">15-18</option>
                        <option value="19-25">19-25</option>
                        <option value="26-30">26-30</option>
                        <option value="30+">30+</option>
                    </select>
                </label>
                
            </div>
            <div class="full-width">
                <button class="next" onclick="scrollToSection('form-section-2')">Next</button>
            </div>
                    <div id="scroll-here-2">
                    </div>
                    <div class="card-brands careers-card form-section" id="form-section-2">
                        <div class="section-head">
                            <img class="form-head-img" src="../media/images/skill.png">
                            <h4>STEP#2</h4>
                            <span class="h-line">
                                <hr>
                            </span>
                        </div>
                        <h3>Learning Goals</h3>
                        <label for="goalInput">
                            <p>Primary Learning Goal or Objective</p>
                            <input type="text" name="goalInput" id="goalInput" placeholder="e.g., Web Development" required/>
                        </label>

                        <label for="skillsInput">
                            <p>Specific Skills/Topics</p>
                            <input type="text" name="skillsInput" id="skillsInput"
                                placeholder="e.g., React, Express.js" />
                        </label>

                        <label for="durationInput">
                            <p>Learning Duration in Weeks</p>
                            <input type="number" name="durationInput" id="durationInput" min="1" max="8"
                                placeholder="e,g, 4 weeks">
                        </label>
                    </div>
                    <button class="next" onclick="scrollToSection('scroll-here-3')">Next</button>
                    <div id="scroll-here-3">
                    </div>
                    <div class="card-brands careers-card form-section" id="form-section-3">
                        <div class="section-head">
                            <img class="form-head-img" src="../media/images/experience.png">
                            <h4>STEP#3</h4>
                            <span class="h-line">
                                <hr>
                            </span>
                        </div>
                        <h3>Experience & Background</h3>

                        <label for="levelInput">
                            <p>Experience in the Field</p>
                            <select name="levelInput" id="levelInput" required> 
                                <option selected value="default">Select a level</option>
                                <option value="beginner">Beginner</option>
                                <option value="intermediate">Intermediate</option>
                                <option value="expert">Expert</option>
                            </select>
                        </label>
                    </div>

                    <button class="next" onclick="scrollToSection('scroll-here-5')">Next</button>
                    <div id="scroll-here-4">
                    </div>
                    <div id="scroll-here-5">
                    </div>
                    <div class="card-brands careers-card form-section" id="form-section-4">
                        <div class="section-head">
                            <img class="form-head-img" src="../media/images/privacy.png">
                            <h4>STEP#4</h4>
                            <span class="h-line">
                                <hr>
                            </span>
                        </div>
                        <h3>Privacy & Data Usage</h3>
                        <label>
                            <p>EduNavAi values your privacy. We use your data to personalize your learning experience.
                                <br> Your
                                data will not be shared with third parties. Do you agree?</p>
                        </label>

                        <div id="agreement-holdre">
                            <input type="checkbox" id="termsInput" name="termsInput" value="accepted" required>
                            <label id="agree" for="termsInput">I agree</label>
                        </div>

                    </div>
         
                        <input id="generate-button" type="submit" value="Generate Roadmap" />

        </form>
    </div>

    <script src="../js/GenerateRoadmapAPI.js">
    </script>
    <!-- Include the footer file  -->
    <?php
include('../includes/footer.php');
?>
</body>

</html>
