<!-- Set the page title and include the header file -->
<?php
$pageTitle = "Feedback";
include('../includes/header.php');
?>


<body>

    <!-- Set the page title and current page for navigation, then include the navigation links file -->
    <?php
    $pageTitle = "EduNavAi";
    $currentPage = "Feedback";
    include('../includes/links.php');
    ?>

    <div class="feedback-section">
        <h4>Give Us</h4>
        <h1><span class="A">A</span> <span class="Feedback">Feedback</span></h1>

        <form action="#" method="post" id="form">
            <div class="personal-information">
                <fieldset>
                    <legend>Personal Information</legend>
                    <!-- Input box for First Name -->
                    <div class="nameSection">
                        <label for="firstName">First Name:</label>
                        <div class="input">
                            <input type="text" id="firstName" name="firstName" placeholder="Rima">
                            <div class="error"></div>

                        </div>


                        <!-- Input box for Last Name -->
                        <label for="lastName">Last Name:</label>
                        <div class="input">
                            <input type="text" id="lastName" name="lastName" placeholder="Alghamdi">
                            <div class="error"></div>
                        </div>
                    </div>

                    <br>

                    <div class="SectionTwo">
                        <!-- Input box for Email ID -->
                        <label for="email">Email ID:</label>
                        <div class="input">
                            <input type="text" id="email" name="email" placeholder="Example@gmail.com">
                            <div class="error"></div>
                        </div>

                        <!-- Input box for Age -->
                        <label for="age">Age:</label>
                        <div class="input">
                            <input type="number" id="age" name="age" min="1" max="100" placeholder="22">
                            <div class="error"></div>
                        </div>
                    </div>

                    <br>

                    <div class="SectionThree">
                        <!-- Additional input box for Phone Number -->
                        <label for="phoneNumber">Phone Number:</label>
                        <div class="input">
                            <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="(966) 562334579">
                            <div class="error"></div>
                        </div>

                        <!-- Additional input box (e.g., for Address) -->
                        <label for="address">Address:</label>
                        <div class="input">
                            <input type="text" id="address" name="address" placeholder="Jeddah">
                            <div class="error"></div>
                        </div>
                    </div>
                </fieldset>
            </div>

            <div class="feedback-details">
                <fieldset>
                    <legend>Feedback Details</legend>
                    <!-- Radio buttons for satisfaction level -->
                    <label class="label">How satisfied are you with EduNavAi?</label>
                    <br>
                    <input type="radio" id="satisfied" name="satisfaction" value="satisfied">
                    <label class="radio-label" for="satisfied">Satisfied</label>

                    <input type="radio" id="neutral" name="satisfaction" value="neutral">
                    <label class="radio-label" for="neutral">Neutral</label>

                    <input type="radio" id="dissatisfied" name="satisfaction" value="dissatisfied">
                    <label class="radio-label" for="dissatisfied">Dissatisfied</label>

                    <div class="error" id="satisfactionLevelError"></div>

                    <br>

                    <!-- Textarea box for comments -->
                    <label class="label1" for="comments">Comments:</label>
                    <br>
                    <textarea id="comments" name="comments" rows="4" cols="50" placeholder="Your Message"></textarea>
                    <div class="error"></div>

                    <br>

                    <label class="label2" id="l">Subscription Options:</label>
                    </br>
                    <input type="checkbox" id="subscribe" name="subscribe" value="yes">
                    <label class="checkbox-label" for="subscribe">Subscribe to newsletter</label>

                    <input type="checkbox" id="promotional-emails" name="promotional-emails" value="yes">
                    <label class="checkbox-label" for="promotional-emails">Receive promotional emails</label>

                    <input type="checkbox" id="product-updates" name="product-updates" value="yes">
                    <label class="checkbox-label" for="product-updates">Receive product updates</label>

                    <div class="error" id="subscriptionOptionsError"></div>

                </fieldset>

                <!-- Dropdown selection list for primary interest -->
                <label class="label3" for="courseInterest">Select your primary interest:</label>
                <select id="courseInterest" name="courseInterest">
                    <option value="select">Select</option>
                    <option value="academic">Academic Performance</option>
                    <option value="professional">Professional Development</option>
                    <option value="personal">Personal Enrichment</option>

                </select>
                <div class="error"></div>
            </div>

            <!-- Submit button -->
            <button onclick="" type="submit"> submit</button>





            <!-- Rest of the form... -->
        </form>
    </div>








    <!-- Include the footer file  -->
    <?php
    include('../includes/footer.php');
    ?>
    <!-- Include this script tag in your HTML file after the form -->
    <script src="../js/validation.js"></script>

</body>

</html>
