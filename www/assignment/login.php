<?php
    include('header.php');
?>

    <h1>Login page</h1>

    <form action="processlogin.php" method="GET">
    <p>
        <label for=""> Email</label> <br>
        <input type="text" name="email" placeholder="email">
    </p>
    <p>
        <label for="">Password</label><br>
        <input type="password" name="pwd" placeholder="password">
    </p>
    <p>
        <button type="submit" name="submit" value="submit">Login</button>
        <?php 
        include('logout.php');
        ?>

    </p>
    </form> 

    <br><br>
<?php
    include('footer.php');
?>