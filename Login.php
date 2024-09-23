<?php include 'Login.html' ?>
<?php include 'conn.php'; ?>

<?php

$email =  $_POST['email'];
$psw =  $_POST['psw'];

if (isset($_POST['submit'])) 
{
    $db_email = mysqli_query($conn, "SELECT `email` FROM `register` WHERE `email` = '$email'");
    $db_psw = mysqli_query($conn, "SELECT `psw` FROM `register` WHERE `psw` = '$psw'");
    $db_firstname = mysqli_query($conn, "SELECT `firstname` FROM `register` WHERE `psw` = '$psw'");

    $sql = "SELECT * FROM `register` WHERE `email` = '$email' AND `psw` = '$psw'";
    $result = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($result);
    if ($count == 1) {
        echo "<script>alert('You Are Logged In!')</script>";
        echo "<script>window.location.replace('Welcome.html')</script>";
    } else {
        if (empty($email) || empty($psw)) {
            echo "<script>alert('Enter Credentials.')</>";
        } else if ($email != $db_email || $psw != $db_psw) {
            echo "<script>alert('Enter Proper Credentials.')</script>";
        }
    }
  
}

mysqli_close($conn);
?>