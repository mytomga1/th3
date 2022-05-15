<?php
if (isset($_POST['username'])) {
    $fname = $_POST['username'];
    print_r($fname);
}

if (isset($_POST['password'])) {
    $lname = $_POST['password'];
    print_r($lname);
}

?>
<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms POST</h2>

<form action="" method="POST">
    <label for="fname">Username:</label><br>
    <input type="text" id="fname" name="username" value=""><br>
    <label for="lname">Password:</label><br>
    <input type="text" id="lname" name="password" value=""><br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>