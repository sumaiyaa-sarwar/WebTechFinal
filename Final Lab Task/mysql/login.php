<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <h1>Login</h1>
    <hr>
    <br>
    <form action= "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        Username: <input type="text" name="username">
        <br><br>
        Password: <input type="password" name="password">
        <br><br>
        <input type="submit" name="Login" value="Login">
    </form>

    <?php


        if($_SERVER['REQUEST_METHOD'] === "POST" and count($_REQUEST) > 0)
        {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if(empty($username))
            {
                echo "Please enter a username";
            }
            if(empty($password))
            {
                echo "Please enter a password";
            }
            else
            {

                $hostname = "localhost";
                $userName = "root";
                $passWord = "";
                $database = "userinfo";
        
                $conn = new mysqli($hostname, $userName, $passWord,$database);
        
                if ($conn->connect_error) 
                {
                    die("Failed to Connect: " . $conn->connect_error);
                }

                $sql = "SELECT username, password FROM logindetails where username = ? and password = ?";

                $stmt = $conn->prepare($sql);
                $stmt->bind_param('ss', $user, $pass);
                $user = $username;
                $pass = $password;
                
                $stmt->execute();
                $result = $stmt->get_result();
                
                if ($result->num_rows > 0) 
                {
                    $stmt->close();
                    $conn->close();
                    header("Location: home.php");
                }
                else
                {
                    $stmt->close();
                    $conn->close();
                    echo "<br>";
                    echo "Incorrect username or password";
                }

            }    
                
                
        }     

    ?>
    
</body>
</html>