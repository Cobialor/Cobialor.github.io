<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="submit-btn">
                <button type="submit">Login</button>
            </div>
            <div class="signup-link">
                <p>Don't have an account? <a href="#">Sign up</a></p>
            </div>
        </form>
        <?php
        if (isset($_GET['message'])) {
            echo "<p class='error-message'>" . htmlspecialchars($_GET['message']) . "</p>";
        }
        ?>
    </div>
</body>
</html>
