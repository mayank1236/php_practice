<?php

    if(isset($_POST['submit'])) {
        $name = array("Edwin", "Student", "Peter", "Samid", "Mohad", "Maria", "Jane", "Tom");
        $minimum = 5;
        $maximum = 10;

        $username = $_POST['username'];
        $password = $_POST['password'];

        if(strlen($username) < $minimum) {
            echo "Username has to be longer than five";
        }

        if(strlen($username) > $maximum) {
            echo "Username has to be shorter than 10";
        }

        if(!in_array($username, $name)) {
            echo "Sorry you are not allowed to login";
        } else {
            echo "Welcome";
        }
    }

    


?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <form action="form.php" method="post">

        <input type="text" name="username" placeholder="Enter Username">
        <input type="password" name="password" placeholder="Enter Password">
        <br>
        <input type="submit" name="submit">

    </form>
</body>
</html>