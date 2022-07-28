 <?php


    // servername => localhost
    // username => root
    // password => empty
    // database name => inventory
    $servername = "localhost";
    $username = "pma";
    $password = "2001";
    $databasename = "inventory";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $databasename);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    if (isset($username)) {
        $username = $_REQUEST['email'];
    }
    if (isset($email)) {
        $email = $_REQUEST['email'];
    }
    if (isset($pass)) {
        $pass = $_REQUEST['email'];
    }
    if (isset($confirmpassword)) {
        $confirmpass = $_REQUEST['confirmpass'];
    }

    // Performing insert query execution
    // here our table name is college
    $sql = " INSERT INTO users (username , email, pass , confirmpass) VALUES ('$username','$email' ,'$pass', '$confirmpass')";

    if (mysqli_query($conn, $sql)) {
        echo "<h3>data stored in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
    ?>