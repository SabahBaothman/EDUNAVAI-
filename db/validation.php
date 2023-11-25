<?php

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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $phoneNumber = $_POST['phoneNumber'];
    $address = $_POST['address'];
    $satisfaction = $_POST['satisfaction'];
    $comments = $_POST['comments'];
    $subscribe = isset($_POST['subscribe']) ? 1 : 0;
    $promotionalEmails = isset($_POST['promotional-emails']) ? 1 : 0;
    $productUpdates = isset($_POST['product-updates']) ? 1 : 0;
    $courseInterest = $_POST['courseInterest']; 

  
    // Server-side validation on email
    $query = mysqli_query($conn, "SELECT * FROM feedback WHERE email = '$email'");

    if ($query) {
        // Get the number of rows
        $numRows = mysqli_num_rows($query);

        // If the email already exists, return an error
        if ($numRows > 0) {
            echo "Error: Email already exists in the database.";
            exit;
        }

        // Free the result set
        mysqli_free_result($query);
    } else {
        // Print an error message if the query fails
        echo "Error: " . mysqli_error($conn);
        exit;
    }

    // Save data to the database
    $stmt = $conn->prepare("INSERT INTO feedback (first_name, last_name, email, age, phone_number, address, satisfaction, comments, subscribe, promotional_emails, product_updates, course_interest) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssissssiiss", $firstName, $lastName, $email, $age, $phoneNumber, $address, $satisfaction, $comments, $subscribe, $promotionalEmails, $productUpdates, $courseInterest);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    echo "Success: Feedback submitted successfully!";
} else {
    echo "Error: Invalid request method.";
}
?>
