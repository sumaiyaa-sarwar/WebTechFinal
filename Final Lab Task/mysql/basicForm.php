<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Form</title>
    <style>
        fieldset,h1,button,a{
            margin: 34px;
        }

        div{
            margin-left: 34px;
        }

        legend{
            font-size: 1.2rem; 
            font-style: italic;  
            font-weight: bold;
        }

        input{
            padding: 4px;
            font-size: 15px;
        }
        button{
            
            font-size: 15px;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 30px;
            padding-right: 30px;
        }
        #submitButton
        {
            font-size: 15px;
            margin-left: 34px;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 30px;
            padding-right: 30px;
        }
    
    </style>
</head>

<body>
    <h1>Registration Form</h1>
    <a href="login.php">Log in</a>  

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "POST">

    <fieldset>
        <legend>Basic Form</legend>
        <br><br>
        <div>
        <label for="fname">*First Name: </label>
        <input type="text" name="fname" placeholder="Enter Your First Name">
        <br><br>

        <label for="lname">*Last Name: </label>
        <input type="text" name="lname" placeholder="Enter Your Last Name">
        <br><br>

       *Gender:
        Male <input type="radio" name="gender" value = "Male"> 
        Female <input type="radio" name="gender" value = "Female">
        <br><br>

        <label for="dob">*Date Of Birth: </label>
        <input type="date" name="dob">
        <br><br>

        <label for="religion">*Religion: </label>
        <select name="religion">
            <option value="Islam">Islam</option>
            <option value="hindu">Hindu</option>
            <option value="christian">Christian</option>
            <option value="Buddha">Buddha</option>
        </select>
        <br><br>
        </div>
    </fieldset>

    <br><br>

    <fieldset>
        <legend>Contact Information</legend>
        <br>

        <div>
        <label for="PreAddress">Present Address: </label>
        <br>
        <textarea name="preAddress" cols="27" rows="5"></textarea>
        <br><br>

        <label for="perAddress">Permament Address: </label>
        <br>
        <textarea name="perAddress" cols="27" rows="5"></textarea>
        <br><br>

        <label for="phoneNo">Phone: </label>
        <input type="tel" name="phoneNo" placeholder="Enter Your Phone Number">
        <br><br>

        <label for="email">*Email: </label>
        <input type="email" name="email" placeholder="Enter Your Email">
        <br><br>

        <label for="webUrl">Website: </label>
        <input type="url" name="webUrl" placeholder="Enter your webstite url">
        <br><br>
        </div>

    </fieldset>

    <fieldset>

        <legend>Account Information</legend>
        <br>
        <div>

        <label for="username">*Username: </label>
        <input type="text" name="username" placeholder="Enter Your user name">        
        <br><br>

        <label for="password">*Password: </label>
        <input type="password" name="password" placeholder="Enter Your password">    
        <br><br>

        </div>

    </fieldset>


    <input type="submit" id="submitButton" name="submit">
    <br><br>

    </form>


    
    <?php


    if ($_SERVER['REQUEST_METHOD']==="POST")
    {  
        $fname = sanitize($_POST['fname']);
        $lname = sanitize($_POST['lname']);  
        $dob = sanitize($_POST['dob']);
        $religion = sanitize($_POST['religion']);
        $email = sanitize($_POST['email']);
        $username = sanitize($_POST['username']);
        $password = sanitize($_POST['password']);


       
        echo "<br>";

        if (empty($fname))
        {
            echo "Please enter your first name";

        }
        else if(empty($lname))
        {
            echo "Please enter your last name";
        }  
        else if(empty($dob))
        {
            echo "Please select your date of birth";

        }
        else if(!(isset($_POST['gender'])))
        {           
            echo "Please select your gender";
        }
        else if(empty($religion))
        {
            echo "Please select your religion";
        }else if(empty($email))
        {
            echo "Please enter your email";
        }
        else if(empty($username))
        {
            echo "Please enter your username";
        }
        else if(empty($password))
        {
            echo "Please enter your password";
        }
        else
        {
            
            $preAddress = $_POST['preAddress'];
            $perAddress = $_POST['perAddress'];
            $gender = $_POST['gender'];
            $phone = $_POST['phoneNo'];  
            $url = $_POST['webUrl'];
            
            echo "<br>";

            $hostname = "localhost";
            $userName = "root";
            $passWord = "";
            $database = "userinfo";
    
            $conn = new mysqli($hostname, $userName, $passWord,$database);
    
            if ($conn->connect_error) 
            {
                die("Failed to Connect: " . $conn->connect_error);
            }
            else 
            {
                echo "Connection Successful";
            
                $sql = "INSERT INTO logindetails (username, password) VALUES (?, ?)";

                $stmt = $conn->prepare($sql);

                $stmt->bind_param('ss', $username, $password);
                 
                $sql1 = "INSERT INTO userdetails (username,firstname,lastname,dob,gender,religion,presentAddress,permanentAddress,phone,email,website) VALUES (?, ?, ? , ? , ? , ? , ? , ? , ? , ? , ?)";

                $stmt1 = $conn->prepare($sql1);

                $stmt1->bind_param('sssssssssss', $username,$fname,$lname,$dob,$gender,$religion,$preAddress,$perAddress,$phone,$email,$website);


                if ($stmt->execute() && $stmt1->execute())
                {
                    echo "Registration successful";
                }
                else {
                    echo "Failed to Register";
                }
                $stmt->close();
                $stmt1->close();
                $con->close();
             

             }

            echo "<br>";
        }
     
    }

    function sanitize($data){

        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function mySqlConnection()
    {
      
    }



    ?>






</body>

</html>