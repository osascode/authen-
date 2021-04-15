<?php
    session_start();
    session_destroy();

    include('header.php');
?>

     <?php
     
     echo "You are now Logged out";
     
     
     ?>

    <form action="processlogin.php" method="post">
        <!-- <button type="submit" name = " submit">log out</button> -->
    </form>

    <br><br><br>
<?php 
    include('footer.php') 
?>