<?php
try {
    $conn = mysqli_connect("127.0.0.1", "root", "", "winner");
} catch (mysqli_sql_exception $e) {
    die("Connection failed: " . $e->getMessage());
}

?>