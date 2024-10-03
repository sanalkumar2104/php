<?php
// Database connection settings
$servername = "localhost"; // Server name or IP
$username = "root"; // Database username
$password = "Sanal@1234"; // Database password
$dbname = "contact_detail"; // Name of your database
$port = 3307;
$con = mysqli_connect($servername, $username, $password, $dbname, $port);

if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Check if the email or phone already exists in the database
    $checkSql = "SELECT * FROM interested_person WHERE email = '$email' OR phone = '$phone'";
    $result = mysqli_query($con, $checkSql);

    if (mysqli_num_rows($result) > 0) {
        // If the data already exists, show alert and go back
        echo '<script type="text/javascript">
                alert("Your data is already registered.");
                window.history.back(); // Optionally, go back to the previous page
              </script>';
    } else {
        // If data doesn't exist, insert the new data
        $sql = "INSERT INTO interested_person (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
        
        if ($con->query($sql) === TRUE) {
            echo '<script type="text/javascript">
                    alert("Registration successful!");
                    window.location.href = "index.php"; // Redirect to another page if needed
                  </script>';
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }
    
    $con->close();
}
?>
