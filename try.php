<?php
// Include database connection file
include 'connexion.php';

// Define variable for storing the email
$email = '';

// Prepare and execute the SQL query to select an email from the users table
$sql = "SELECT email FROM users LIMIT 1";
$result = $conn->query($sql);

// Check if the query executed successfully
if ($result) {
    // Fetch the first row from the result set
    $row = $result->fetch_assoc();
    
    // Check if a row was fetched
    if ($row) {
        // Store the email from the fetched row
        $email = $row['email'];
        
        // Print the email
        echo "Email: " . $email;
    } else {
        echo "No email found.";
    }
} else {
    echo "Error: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
