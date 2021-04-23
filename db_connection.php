<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<title>database connection</title>
</head>
<body>

    <?php
        function OpenCon() {
        $dbhost = "localhost";
        $dbuser = "root";
        //$dbpass = "1234";
        $db = "donkeykong64speedrun";
        $conn = new mysqli($dbhost, $dbuser, $db) or die("Connect failed: %s\n". $conn -> error);
        
        return $conn;
        }
        
        function CloseCon($conn)
        {
        $conn -> close();
        }
    ?>
</body>
</html>