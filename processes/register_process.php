
<?php
// Registration Processing Script

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    
    // Sanitize and validate input
    $username = mysqli_real_escape_string($conn, trim($_POST['username']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $firstName = mysqli_real_escape_string($conn, trim($_POST['firstName']));
    $surname = mysqli_real_escape_string($conn, trim($_POST['surname']));
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $address = mysqli_real_escape_string($conn, trim($_POST['address']));
    $suburb = mysqli_real_escape_string($conn, trim($_POST['suburb']));
    $postcode = mysqli_real_escape_string($conn, trim($_POST['postcode']));
    $phone = mysqli_real_escape_string($conn, trim($_POST['phone']));
    
    // Validation
    $errors = [];
    
    // Check if passwords match
    if ($password !== $confirmPassword) {
        $errors[] = "Passwords do not match";
    }
    
    // Check password length
    if (strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters long";
    }
    
    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }
    
    // Check if username already exists
    $checkUsername = "SELECT id FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $checkUsername);
    if (mysqli_num_rows($result) > 0) {
        $errors[] = "Username already exists";
    }
    
    // Check if email already exists
    $checkEmail = "SELECT id FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $checkEmail);
    if (mysqli_num_rows($result) > 0) {
        $errors[] = "Email already registered";
    }
    
    // If no errors, proceed with registration
    if (empty($errors)) {
        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
        // Insert user into database
        $sql = "INSERT INTO users (username, email, password, first_name, surname, gender, date_of_birth, address, suburb, postcode, phone) 
                VALUES ('$username', '$email', '$hashedPassword', '$firstName', '$surname', '$gender', '$dob', '$address', '$suburb', '$postcode', '$phone')";
        
        if (mysqli_query($conn, $sql)) {
            $message = "Registration successful! You can now log in with your credentials.";
            $messageType = "success";
            
            // Clear form by redirecting
            // header("Location: register.php?success=1");
            // exit();
        } else {
            $message = "Error: " . mysqli_error($conn);
            $messageType = "error";
        }
    } else {
        $message = implode("<br>", $errors);
        $messageType = "error";
    }
}
?>

