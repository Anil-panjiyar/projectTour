<?php
include 'connection.php';

if(isset($_POST['data'])) {
    $input = $_POST['data'];
    $sql= "SELECT * FROM package WHERE Title LIKE '%$input%' OR Price LIKE '%$input%' OR Days LIKE '%$input%' OR Description LIKE '%$input%'";
    $result = mysqli_query($con, $sql);

    $value = "";
    while ($row = mysqli_fetch_assoc($result)) {
        $value .= "<tr><td>{$row["Title"]}</td><td>{$row["Price"]}</td><td>{$row["Days"]}</td><td><img src='{$row["Picture"]}' height='100px' width='200px'/></td><td>{$row["Description"]}</td></tr>";
    }
} else {
    $sql= "SELECT * FROM package";
    $result = mysqli_query($con, $sql);

    $value = "";
    while ($row = mysqli_fetch_assoc($result)) {
        $value .= "<tr><td>{$row["Title"]}</td><td>{$row["Price"]}</td><td>{$row["Days"]}</td><td><img src='{$row["Picture"]}' height='100px' width='200px'/></td><td>{$row["Description"]}</td></tr>";
    }
}

echo $value;
 
?>