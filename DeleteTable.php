<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";

    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn -> connect_error) {
        die("Connection failed: " . $conn -> connect_error);
    }
    $sql = "DELETE FROM MyGuests WHERE id = '3' AND firstname = 'Yasuo' AND lastname = 'Insec' AND email = 'yasuo@example.com'";

    if ($conn -> query($sql) === TRUE) {
        echo "Deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn -> error;
    }
    $conn -> close();
?>