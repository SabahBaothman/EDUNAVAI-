<!-- Set the page title and include the header file -->
<?php
    $pageTitle = "EduNavAi";
    include('../includes/header.php');
    include "../db/connection.php";
?>
<body>
    <!-- Set the page title and current page for navigation, then include the navigation links file -->
    <?php
        $pageTitle = "EduNavAi";
        $currentPage = "home";
        include('../includes/links.php');
    ?>
    <div class="center" id="contant-page-container">

        <h1>Contant <span>Us</span></h1>
        </br>
        <p>We cherish our customers and strive<br>to maintain open communication channels to<br>address their needs and
            inquiries promptly.</p>


        <form class="center" id="contact_form" method="POST">
            <div class="row">
                <label class="half-input">
                    Name
                    <input type="text" name="name" id="name" placeholder="Sara Sami" />
                </label>

                <label class="half-input">
                    Email
                    <input type="email" name="mail" id="mail" placeholder="mailtag@provider.com" />
                </label>
            </div>
            <div class="row">
                <label class="half-input">
                    Purpose
                    <select name="purpose" id="purpose">
                        <option value="general">General Inquiries</option>
                        <option value="feedback">Feedback and Suggestions</option>
                        <option value="support">Support and Troubleshooting</option>
                        <option value="accounts">Accounts and Billing</option>
                        <option value="sales">Sales and Orders</option>
                        <option value="careers">Careers and Employment</option>
                    </select>
                </label>
                <label class="half-input">
                    Subject
                    <input type="text" name="subject" id="subject" placeholder="Your Subject" />
                </label>
            </div>
            <div class="row">
                <label class="full-input">
                    Message
                    <textarea type="textarea" name="message" id="message" placeholder="Your Message">
                    </textarea>
                </label>
            </div>
            <input  type="submit" id="sendMsssage" name="sendMsssage" value="Send Message"  onclick=" submit()"/>

        </form>

    </div>

    <!-- Include the footer file  -->
    <?php
        include('../includes/footer.php');
    ?>

    <script src="../js/email.js">
        </script>
</body>

</html>
