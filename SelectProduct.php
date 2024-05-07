<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ProductDB";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn -> connect_error) {
        die("Connection failed: " . $conn -> connect_error);
    }
    $sql = "SELECT id, pname, company, 'year', band FROM tblproduct";
    $result = $conn -> query($sql);

    if ($result -> num_rows > 0) {
        while($row = $result -> fetch_assoc()) {
            echo $row["id"]."-".$row["pname"]." ".$row["company"]." ".$row["year"]." ".$row["band"]."<br>";
        }
    }
    else {
        echo "0 results";
    }
    $conn -> close();
?>