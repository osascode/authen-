<?php
    session_start();
    session_destroy();

    include('header.php');
?>

    

    <form action="processlogout.php" method="post">
        <button type="submit" name = " submit">log out</button>
    </form>

