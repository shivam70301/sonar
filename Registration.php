<?php include 'Register.html' ?>
<?php include 'conn.php'; ?>

<?php
if(isset($_POST["registerbtn"]))
{

$firstname =  $_POST['firstname'];
$lastname =  $_POST['lastname'];
$collegename =  $_POST['collegename'];
$collegeid =  $_POST['collegeid'];
$mobileno =  $_POST['mobileno'];
$email =  $_POST['email'];
$psw =  $_POST['psw'];

     $sql="INSERT INTO 'register'('firstname','lastname','collegename','collegeid','mobileno','email','psw')VALUES('[$firstname]','[$lastname]','[$collegename]','[$collegeid]','[$mobileno]','[$email]','[$psw]')";
     $result= mysqli_query($conn,$sql);
      echo "<script>alert('Your Have Been Registered Successfully')</script>";
}
mysqli_close($conn);
?>