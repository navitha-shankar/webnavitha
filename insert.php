<!DOCTYPE html>
<html>



<head>
    <title>Insert Page page</title>
</head>



<body>
    <center>
        <?php



       // servername => server-f.mysql.database.azure.com
        // username => serverf
        // password => test@123
        // database name => db_test
        $conn = mysqli_connect("server-f.mysql.database.azure.com", "serverf", "Test@123", "testn");
        
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        
        // Taking all 5 values from the form data(input)
        $first_name = $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $gender = $_REQUEST['gender'];
        $address = $_REQUEST['address'];
        $email = $_REQUEST['email'];
        
        // Performing insert query execution
        // here our table name is collegen
        $sql = "INSERT INTO college4 VALUES ('$first_name',
            '$last_name','$gender','$address','$email')";
        
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";



           echo nl2br("\n$first_name\n $last_name\n "
                . "$gender\n $address\n $email");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
        
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>



</html>
