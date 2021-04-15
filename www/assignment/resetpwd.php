<?php
    session_start();
    session_destroy();
    include('header.php');
?>

    <h4>Reset Password</h4>

    <form action="" method="post">
      <p>
      <label for="">email</label>
        <input type="text" name="email" placeholder="email">
      </p>  
      <p>
      <label for=""></label>
        <button type="submit" name= "submit">Submit</button>
      </p>  

    </form>