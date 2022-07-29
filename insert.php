<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $servername = "localhost";
        $username = "pma";
        $password = "2001";
        $dbname = "kibesolutions";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";
        // Taking all 5 values from the form data(input)
        $first_name = $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $email = $_REQUEST['email'];
        $pass =  $_REQUEST['pass'];
        $confirmpass = $_REQUEST['confirmpass'];

        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO users(first_name, last_name, email, pass,confirmpass) 
         VALUES ('$first_name','$last_name','$email','$pass','$confirmpass')";

        if (mysqli_query($conn, $sql)) {
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

            echo nl2br("\n$first_name\n $last_name\n "
                . "$email\n $pass\n" . "$confirmpass\n");
        } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>