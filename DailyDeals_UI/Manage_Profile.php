<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DailyDeals";

// Start session to maintain user login state
session_start();

// Check if user is logged in
if (isset($_SESSION['Email'])) {
    // User is logged in, retrieve data from database and pre-fill form fields

    try {
        // Create connection
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare SQL statement to fetch customer data based on email
        $stmt = $conn->prepare("SELECT * FROM customers WHERE Email = :email");
        $stmt->bindParam(':email', $_SESSION['Email']);
        $stmt->execute();

        // Check if customer data is found
        if ($stmt->rowCount() > 0) {
            // Fetch customer data
            $customer = $stmt->fetch(PDO::FETCH_ASSOC);
            // Fill form fields with fetched data
            $name = $customer['C_Name'];
            $email = $customer['Email'];
            $contact = $customer['Contact_No'];
            $houseNo = $customer['House_No'];
            $apartmentName = $customer['Apartment_Name'];
            $area = $customer['Area'];
            $pincode = $customer['Pincode'];
        } else {
            echo "No customer found with this email.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    // Close connection
    $conn = null;
} else {
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main">
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Profile</h2>
<form onsubmit="return validateSignUp()" class="register-form" id="register-form" action="UpdateProfile.php" method="post">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" required="" value="<?php echo isset($name) ? $name : ''; ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" required="" value="<?php echo isset($email) ? $email : ''; ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="contact"><i class="zmdi zmdi-phone"></i></label>
                                <input type="tel" name="contact" id="contact" placeholder="Contact No" required="" value="<?php echo isset($contact) ? $contact : ''; ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="house_no"><i class="zmdi zmdi-home"></i></label>
                                <input type="text" name="house_no" id="house_no" placeholder="House No" required="" value="<?php echo isset($houseNo) ? $houseNo : ''; ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="Apartment_name"><i class="zmdi zmdi-map"></i></label>
                                <input type="text" name="ApartMent_name" id="street_name" placeholder="Apartment Name" required="" value="<?php echo isset($apartmentName) ? $apartmentName : ''; ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="area"><i class="zmdi zmdi-map"></i></label>
                                <input type="text" name="area" id="area" placeholder="Area" required="" value="<?php echo isset($area) ? $area : ''; ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="pincode"><i class="zmdi zmdi-pin"></i></label>
                                <input type="text" name="pincode" id="pincode" placeholder="Pincode" required="" value="<?php echo isset($pincode) ? $pincode : ''; ?>"/>
                            </div>
                            <div class="form-group form-button">
                                <div id="error-message" class="error"></div>
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Update"/>
                            </div>
                        </form>
                        <div id="error-message" class="error"></div>
                        <script>
                                function validateSignUp() {
                                    let name = document.getElementById('name').value;
                                    let email = document.getElementById('email').value;
                                    let pass = document.getElementById('pass').value;
                                    let re_pass = document.getElementById('re_pass').value;
                                    let contact = document.getElementById('contact').value;
                                    let agree_term = document.getElementById('agree-term');

                                    // Validate name (no numbers allowed)
                                    if (!/^[A-Za-z]+$/.test(name)) {
                                        displayError('Name should not contain numbers or special characters!');
                                        return false;
                                    }

                                    // Validate email format
                                    if (!/^[\w.-]+@[a-zA-Z\d.-]+\.[a-zA-Z]{2,}$/.test(email)) {
                                        displayError('Invalid email format!');
                                        return false;
                                    }

                                    // Validate mobile number length
                                    if (contact.length !== 10 || !/^\d+$/.test(contact)) {
                                        displayError('Mobile number should be 10 digits long and contain only numbers!');
                                        return false;
                                    }

                                    // Validate password requirements
                                    if (!/(?=.*[A-Z])(?=.*[!@#$%^&*])(?=.*[0-9]).{8,}/.test(pass)) {
                                        displayError('Password must contain at least 1 uppercase character, 1 special character, 1 digit, and be at least 8 characters long!');
                                        return false;
                                    }

                                    // Check if password and confirm password match
                                    if (pass !== re_pass) {
                                        displayError('Password does not match!');
                                        return false;
                                    }

                                    // Check if the terms and conditions are agreed
                                    if (!agree_term.checked) {
                                        displayError('Please agree to the Terms & Conditions');
                                        return false;
                                    }

                                    return true;
                                }

                                function displayError(message) {
                                    var errorDiv = document.getElementById('error-message');
                                    errorDiv.textContent = message;
                                    errorDiv.style.color = 'red';

                                    // Remove the error message after 3 seconds
                                    setTimeout(function () {
                                        errorDiv.textContent = '';
                                    }, 3000);

                                    return false;
                                }
                            </script>
                    </div>
                    <!-- ... (your existing signup-image content) ... -->
                </div>
            </div>
        </section>
    </div>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
