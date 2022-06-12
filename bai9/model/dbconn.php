<!-- Connect BD ====================================-->
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = 'webshop';

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $db);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT id, name, price, stock FROM products ORDER BY id DESC LIMIT 20";

    $arrProducts = [];

    if ($result = mysqli_query($conn, $sql)) {
        // Fetch one and one row
        while ($row = mysqli_fetch_row($result)) {
            $arrProducts[] = $row;
        }

        mysqli_free_result($result);
    }


    if (isset($_POST['action']) && isset($_POST['productID'])) {
        $id = $_POST['productID'];

        $sql_delete = "DELETE FROM products WHERE id = $id";

        mysqli_query($conn, $sql_delete);

    }

    mysqli_close($conn);


?>
<!-- Connect BD ====================================-->