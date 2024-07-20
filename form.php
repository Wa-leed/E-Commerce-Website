<!-- <?php
// Database connection details
// $host = "localhost";
// $username = "root";
// $password = "sheikhu225";
// $database = "users"; -->

// Create connection
// $conn = new mysqli($host, $username, $password, $database);

// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // Function to sanitize and validate input data
// function sanitizeInput($data) {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }

// // Process the form submission
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $firstName = sanitizeInput($_POST["firstName"]);
//     $lastName = sanitizeInput($_POST["lastName"]);
//     $email = sanitizeInput($_POST["email"]);
//     $quantity = sanitizeInput($_POST["quantity"]);
//     $size = sanitizeInput($_POST["size"]);
//     $category = sanitizeInput($_POST["category"]);

//     // Insert data into the 'user' table
//     $sql = "INSERT INTO user1 (first_name, last_name, email, quantity, size, category) VALUES ('$firstName', '$lastName', '$email', '$quantity', '$size', '$category')";

//     if ($conn->query($sql) === TRUE) {
//         echo "User registered successfully";
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }
// }

// // Close the database connection
// $conn->close();
// ?>
