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
    <div id="table-container">
        <h1>Frequently Asked Question</h1>
        </br>
        <table>
            <thead>

            </thead>
            <tbody>
                <tr>

                    <td>Question</td>
                    <td>Primary</td>
                    <td>Premuim</td>
                </tr>
                <tr>

                    <td>Is EduNavAI Free?</td>
                    <td>Yes</td>
                    <td>No</td>
                </tr>
                <tr>

                    <td rowspan="4">What are the features?</td>
                    <td colspan="2">Custom Roadmaps</td>
                </tr>
                <tr>

                    <td colspan="2">Export Roamaps as PDF</td>
                </tr>
                <tr>
                    <td class="center-text">-</td>
                    <td>Modify Roadmap</td>
                </tr>
                <tr>

                    <td class="center-text">-</td>
                    <td>Personal Account with roadmaps library</td>
                </tr>
                <tr>

                    <td>How EduNavAi roadmaps are generated?</td>
                    <td colspan="2">EduNavAi uses GPT API to create custome roasmaps.</td>
                </tr>
            </tbody>
        </table>
    </div>




    <!-- Include the footer file  -->
    <?php
include('../includes/footer.php');
?>
</body>

</html>
