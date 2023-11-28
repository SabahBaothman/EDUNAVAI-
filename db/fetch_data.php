<?php
function fetchData() {
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbName = "feedback";
    $port = 3307; // Change this to your actual port number

    // Connect to the database
    $conn = new mysqli($host, $user, $password, $dbName, $port);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch data from the feedback table
    $feedbackQuery = "SELECT * FROM feedback";
    $feedbackResult = $conn->query($feedbackQuery);

    if ($feedbackResult) {
        $feedbackData = [];

        // Check if there are rows in the result set
        if ($feedbackResult->num_rows > 0) {
            while ($row = $feedbackResult->fetch_assoc()) {
                $feedbackData[] = $row;
            }
        }

        $feedbackResult->free_result();
    } else {
        die("Error fetching feedback data: " . $conn->error);
    }

    // Fetch data from the email table
    $emailQuery = "SELECT * FROM email";
    $emailResult = $conn->query($emailQuery);

    if ($emailResult) {
        $emailData = [];

        // Check if there are rows in the result set
        if ($emailResult->num_rows > 0) {
            while ($row = $emailResult->fetch_assoc()) {
                $emailData[] = $row;
            }
        }

        $emailResult->free_result();
    } else {
        die("Error fetching email data: " . $conn->error);
    }

    $conn->close();

    return [
        'feedbackData' => $feedbackData,
        'emailData' => $emailData
    ];
}

$data = fetchData();

function getRowCount($data)
{
    // Return the number of rows in the data array
    return count($data);
}

if (!empty($data['feedbackData'])) {
    $feedbackRowCount = getRowCount($data['feedbackData']);
    $emailRowCount = getRowCount($data['emailData']);
    // First Section - Dashboard
    echo '<div class="dashboard">';
    echo '    <h1>Edu Nav Ai <span>Dashboard<span></h1>';
    echo '    <p>General data about our website.</p>';
    // Second Section - General Statistics and Boxes
    echo '<div class="general-section">';
    echo '    <div class="left-section">';
    echo '        <h2>General <span>Statistics<span></h2>';
    echo '        <p>A snapshot of essential data related to the website performance and user engagement.</p>';
    echo '    </div>';
    echo '    <div class="right-section">';
    // Box 1
    echo '        <div class="box1">';
    echo '        <div class="iconn">';
    //echo ' <i class="fa-solid fa-layer-group"></i> ';
    echo '    </div>';
    echo '            <h4>Total <br> Responce</h4>';
    echo '            <hr class="box-hr">';
    echo "<h3>" . ($feedbackRowCount + $emailRowCount) . "</h3>";

    // Add icon or content for Box 1
    echo '        </div>';
    // Box 2
    echo '        <div class="box2">';
    echo '        <div class="iconn">';
    //echo ' <i class="fa-solid fa-message"></i> ';
    echo '        </div>';
    echo '            <h4>Feedbck Responce</h4>';
    echo '            <hr class="box-hr">';
    echo "<h3>$feedbackRowCount</h3>";
    // Add icon or content for Box 2
    echo '        </div>';
    // Box 3
    echo '        <div class="box3">';
    echo '        <div class="iconn">';
    //echo ' <i class="fa-solid fa-envelope"></i> ';
    echo '        </div>';
    echo '            <h4>Message Responce</h4>';
    echo '            <hr>';
    echo "<h3>$emailRowCount</h3>";
    // Add icon or content for Box 3
    echo '        </div>';
    echo '    </div>';
    echo '</div>';

    echo '<div class="feedback-section">';
    echo "<h2>Feedback Table</h2>";
    echo "<table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Comments</th>
            </tr>";

    foreach ($data['feedbackData'] as $row) {
        echo "<tr>
                <td>{$row['first_name']}</td>
                <td>{$row['last_name']}</td>
                <td>{$row['age']}</td>
                <td>{$row['comments']}</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "<p>No feedback data found.</p>";
}
echo '</div>';

    // Fourth Section - Email Data Table
    echo '<div class="email-section">';
if (!empty($data['emailData'])) {
    echo "<h2>Email Table</h2>";
    echo "<table>
            <tr>
                <th>Email</th>
                <th>Message</th>
            </tr>";

    foreach ($data['emailData'] as $row) {
        echo "<tr>
                <td>{$row['email']}</td>
                <td>{$row['message']}</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "<p>No email data found.</p>";
}
echo '</div>';
echo '</div>';

?>

