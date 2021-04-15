<?php session_start();
    include('header.php');
?>

<h3>SIgn Up</h3>

    <form action="processregister.php" method="post">
        <p>
            <label for="">First Name </label><br>
            <input type="text" name="f_name" placeholder="First name" require>
        </p>
        <p>
            <label for="">Last Name</label><br>
            <input type="text" name="l_name" placeholder="Last name" require>
        </p>
        <p>
            <label for="">email</label><br>
            <input type="text" name="email" placeholder="email" require>
        </p>
        <p>
            <label for="">dob</label><br>
            <input type="date" name="dob" placeholder="" require>
        </p>
        <p>
            <label for="" require>gender</label><br>
            <select name="gender">
                <option >None</option>
                <option >Male</option>
                <option >Female</option>
                <option >Others</option>
            </select>
        </p>
        <p>
            <label for="" require>password</label><br>
            <input type="password" name="pwd" placeholder="password">
        </p>
        <p>
            <button type="submit" name="submit" value="submit">Sign Up</button>
        </p>
    </form>

<?php 
    include('footer.php');
?>