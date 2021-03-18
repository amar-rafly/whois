    <?php
    $servername = "localhost:3306";
    $database = "nextcloud";
    $username = "nxuser";
    $password = "amar405";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
    mysqli_close($conn);
    ?>
