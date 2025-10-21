<?php
// Database configuration
$host = '127.0.0.1'; // or 'localhost'
$username = 'root'; // Replace with your MySQL username
$password = ''; // Replace with your MySQL password
$database = 'quizpallete'; // Database name

// Create connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    // Log error to a file or display a user-friendly message
    error_log("Connection failed: " . mysqli_connect_error(), 3, "logs/db_errors.log");
    die("Database connection failed. Please try again later.");
}

// Set charset to UTF-8 to match database encoding
if (!mysqli_set_charset($conn, 'utf8mb4')) {
    error_log("Error setting charset: " . mysqli_error($conn), 3, "logs/db_errors.log");
    die("Database error. Please try again later.");
}

// Provide a MysqliDb wrapper instance for files using the wrapper
// Require the class file only if the class is not already declared to avoid redeclaration errors
$mysqliDbFile = __DIR__ . '/src/db/MysqliDb.php';
if (file_exists($mysqliDbFile)) {
    if (!class_exists('MysqliDb')) {
        require_once $mysqliDbFile;
    }
    // Instantiate $db only if it's not already set and the class exists
    if (!isset($db) && class_exists('MysqliDb')) {
        try {
            $db = new MysqliDb($host, $username, $password, $database);
        } catch (Exception $e) {
            error_log("MysqliDb init failed: " . $e->getMessage());
            // Fallback: do not throw; some files may still use $conn directly
        }
    }
}
?>