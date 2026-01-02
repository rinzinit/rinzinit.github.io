
<?php
require_once 'database/db.php';

$message = '';
$messageType = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    include 'processes/register_process.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Force - Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="header-top">
            <h1 class="logo">Computer Force</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="product.php">Products</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </nav>
    </header>

    <div class="search-container">
        <div class="search-box">
            <input type="text" id="searchKeyword" placeholder="Enter keyword">
            <button onclick="searchProducts()">Search</button>
        </div>
    </div>

    <div class="container">
        <aside class="sidebar">
            <h3>Purchases</h3>
            <div class="cart-items">
                <div class="cart-item">
                    <span>Test Item 1</span>
                    <span>$1000</span>
                </div>
                <div class="cart-item">
                    <span>Test Item 2</span>
                    <span>$500</span>
                </div>
            </div>
            <div class="cart-total">
                <div style="display: flex; justify-content: space-between;">
                    <span>Total</span>
                    <span>$1500</span>
                </div>
            </div>
        </aside>

        <main class="main-content">
            <h1>Registration Form</h1>
            <p>Please complete the following form to register for an account on our website.</p>
            
            <?php if ($message): ?>
                <div class="message <?php echo $messageType; ?>">
                    <?php echo $message; ?>
                </div>
            <?php endif; ?>

            <form id="registrationForm" method="POST" onsubmit="return validateRegistrationForm()" class="registration-form">
                <div class="form-group">
                    <label for="username">Username*:</label>
                    <input type="text" id="username" name="username" required>
                </div>

                <div class="form-group">
                    <label for="email">Email Address*:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="password">Password*:</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <div class="form-group">
                    <label for="confirmPassword">Confirm Password*:</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" required>
                </div>

                <div class="form-group">
                    <label for="firstName">First Name*:</label>
                    <input type="text" id="firstName" name="firstName" required>
                </div>

                <div class="form-group">
                    <label for="surname">Surname*:</label>
                    <input type="text" id="surname" name="surname" required>
                </div>

                <div class="form-group">
                    <label>Gender*:</label>
                    <div class="radio-group">
                        <label>
                            <input type="radio" name="gender" value="male" required> Male
                        </label>
                        <label>
                            <input type="radio" name="gender" value="female" required> Female
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="dob">Date of Birth*:</label>
                    <input type="date" id="dob" name="dob" required>
                </div>

                <div class="form-group">
                    <label for="address">Address*:</label>
                    <input type="text" id="address" name="address" required>
                </div>

                <div class="form-group">
                    <label for="suburb">Suburb*:</label>
                    <input type="text" id="suburb" name="suburb" required>
                </div>

                <div class="form-group">
                    <label for="postcode">Postcode*:</label>
                    <input type="text" id="postcode" name="postcode" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input type="tel" id="phone" name="phone">
                </div>

                <div class="form-group">
                    <button type="submit" name="register" class="btn btn-primary">Register</button>
                    <button type="button" onclick="clearForm()" class="btn btn-secondary">Clear</button>
                </div>
            </form>
        </main>
    </div>

    <footer>
        <p>&copy; 2025 Leonard Siu All rights reserved</p>
        <div class="footer-links">
            <a href="privacyPolicy.php">Privacy Policy</a>
        </div>
    </footer>

    <script src="js/main.js"></script>
</body>
</html>

