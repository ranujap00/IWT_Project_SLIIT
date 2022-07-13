<?php
    require("config.php");
?>

<?php
    session_start();

    //user
    if(isset($_POST["submit-user"])){
        $username = $_POST["username"];
        $pass = $_POST["password"];

        $usernameFlag = 0;
        $passwordFlag = 0;

        // FETCH DATA FROM CUSTOMER TABLE
        $sql = "SELECT username, password FROM customer";
        $result = $con->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                if($username == $row["username"])
                    $usernameFlag = 1;
                if($pass == $row["password"])
                    $passwordFlag = 1;
            }
            
            if($usernameFlag == 1 && $passwordFlag == 1){
                header("Location:../Pulitha/User Account/Useracc.html");
            }
            else{
                echo "<script type= 'text/javascript'>
                    alert('Invalid username or password');
                    window.history.go(-1);
                </script>";
            }
        }
        else    
            echo "No result"; 
    }

    //Employee
    else if(isset($_POST["submit-emp"])){
        $username = $_POST["Eusername"];
        $pass = $_POST["Epassword"];
        $type = $_POST["type"];

        echo "Username: ".$username."<br>";
        echo "Password: ".$pass."<br>";

        $loginFlag = 0;

        // FETCH DATA FROM EMPLOYEE TABLE
        $sql = "SELECT E_username, E_password, E_type FROM employee";
        $result = $con->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo $row["E_username"]."  ".$row["E_password"]."<br>";

                if($username == $row["E_username"] && $pass == $row["E_password"] && $type == $row["E_type"])
                    $loginFlag = 1;
            }
            
            if($loginFlag == 1 && $type == "admin"){
                // header("Location:../Pulitha/FINALIZE ADMIN/Default/adminxx.html");
                $_SESSION['userName'] = $username;
            }

            else if($loginFlag == 1 && $type == "agent"){
                // header("Location:http://localhost/IWT Final Project/Shafa/agent dashboard/agentdashboard.php");
                $_SESSION['userName'] = $username;
            }

            else{
                echo "<script type= 'text/javascript'>
                    alert('Invalid username, password or type');
                    window.history.go(-1);
                </script>";
            }
        }
        else    
            echo "No result"; 
    }

    if(isset($_SESSION['userName']) && $type = "agent")
        header("Location:http://localhost/IWT Final Project/Shafa/agent dashboard/agentdashboard.php");
    
    else if(isset($_SESSION['userName']) && $type="admin")
        header("Location:../Pulitha/FINALIZE ADMIN/Default/adminxx.html");

    $con->close();
?>