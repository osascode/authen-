<?php session_start();
    session_destroy();
    include('header.php');
?>

<?php


$email = $_GET['email'];
$pwd = $_GET['pwd'];
// $f_name = $_POST['f_name'];
// $l_name = $_POST['l_name'];
// $gender = $_POST['gender'];
// $dob = $_POST['dob'];


$_SESSION['email'] = $email;
$_SESSION['pwd'] = $pwd;
// $_SESSION['f_name'] = $f_name;
// $_SESSION['l_name'] = $l_name;

// $arrayData = [
//     'f_name' => $f_name,
//     'l_name' => $l_name,
//     'email' => $email,
//     'gender' => $gender,
//     'dob' => $dob
// ];



 $errorCount = 0 ;

 $email = $_GET['email'] != "" ? $_GET['email'] : $errorCount++;
 $pwd =  $_GET['pwd'] != "" ? $_GET['pwd'] : $errorCount++;

// file_get_contents("file/" . $f_name . ".json", json_decode($arrayData));

if ($errorCount > 0 ) {
    # code...
    $_SESSION['error'] = 'wrong input';
    header('Location: login.php ');
}else {
    
    echo "You have successfully logged in.";
}

   echo "<br><br>";

     include('logout.php'); 
   
    

?>

    <br><br>
<?php include('footer.php')?>
