<?php session_start(); // starts a session
      session_destroy(); //destroys session 
    include('header.php'); //includes header from header.php
?>

<?php

$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$pwd = $_POST['pwd'];

$_SESSION['f_name'] = $f_name;
$_SESSION['l_name'] = $l_name;
$_SESSION['email'] = $email;
$_SESSION['pwd'] = $pwd;


$arrayData = [
    'f_name' => $f_name,
    'l_name' => $l_name,
    'email' => $email,
    'gender' => $gender,
    'dob' => $dob
];


    // if (isset($_POST['f_name']) && !empty( $_POST['f_name'])) {
    //     # code...
    //     echo "logged in as ".   $f_name ;
    // }else {
    //     echo "please fill in your first name ";
    // }
    // if (isset($_POST['l_name']) && !empty( $_POST['l_name'])) {
    //     # code...
    //     echo "logged in as ".   $l_name ;
    // }else {
    //     echo "please fill in your last name ";
    // }
    // if (isset($_POST['email']) && !empty( $_POST['email'])) {
    //     # code...
    //     echo "logged in as ".   $email ;
    // }else {
    //     echo "your email is required ";
    // }

    $errorCount = 0;

    $f_name = $_POST['f_name'] != "" ? $_POST['f_name'] : $errorCount++;
    $l_name = $_POST['l_name'] != "" ? $_POST['l_name'] : $errorCount++;
    $email = $_POST['email'] != "" ? $_POST['email'] : $errorCount++;
    $gender = $_POST['gender'] != "" ? $_POST['gender'] : $errorCount++;
    $dob = $_POST['dob'] != "" ? $_POST['dob'] : $errorCount++;
    $pwd = $_POST['pwd'] != "" ? $_POST['pwd'] : $errorCount++;

    if ($errorCount > 0) {
        # code...
        $_SESSION['error'] = "you have to fill all empty blanks";
        header('location: register.php ');
    }else {
        # code...
        echo "succesfully registered please use the link below to login ";
        // header("location: login.php");
    }




file_put_contents("file/" . $f_name . ".json", json_encode($arrayData) );

?>
<br><br>
<?php
    include('footer.php');
?>