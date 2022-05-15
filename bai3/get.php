<?php
if (isset($_GET['fname'])) {
    $fname = $_GET['fname'];
    print_r($fname);
}

if (isset($_GET['lname'])) {
    $lname = $_GET['lname'];
    print_r($lname);
}

?>
<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms GET</h2>

<form action="" method="GET">
    <label for="fname">Username:</label><br>
    <input type="text" id="fname" name="username" value=""><br>
    <label for="lname">Password:</label><br>
    <input type="text" id="lname" name="password" value=""><br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>