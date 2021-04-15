<?php
    session_start();
    session_destroy();
    include('header.php');
?>

<form action="" method="get">
      <p>
      <label for="">create new password</label>
        <input type="text" name="pwd" placeholder="password">
      </p>  
      <p>
      <label for="">confirm new password</label>
        <input type="text" name="pwd" placeholder="password">
      </p>  
      <p>
      <label for=""></label>
        <button type="submit" name= "submit">Submit</button>
      </p>  

      <?php
        if ($isset($_GET['submit'])) {
            # code...
            echo "password reset successful";
            header('location: login.php');
        }
      ?>
    </form>