<?php
// Array of users as objects
$users = [
    (object)[
        'username' => 'john_doe',
        'password' => 'password123',
        'firstName' => 'John',
        'lastName' => 'Doe',
        'age' => 30,
        'address' => '123 Elm Street'
    ],
    (object)[
        'username' => 'jane_smith',
        'password' => 'mypassword',
        'firstName' => 'Jane',
        'lastName' => 'Smith',
        'age' => 25,
        'address' => '456 Oak Avenue'
    ],
    (object)[
        'username' => 'alex_brown',
        'password' => 'alex2023',
        'firstName' => 'Alex',
        'lastName' => 'Brown',
        'age' => 28,
        'address' => '789 Pine Road'
    ],
];

// Get username and password from the form
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Validate login
foreach ($users as $user) {
    if ($user->username === $username && $user->password === $password) {
        // Successful login
        echo "<h1>Welcome, " . htmlspecialchars($user->firstName) . "!</h1>";
        exit;
    }
}

// If no match found, redirect back with an error message
header("Location: index2.php?message=Invalid username or password");
exit;
?>
