<?php
    require("../config.php");
?>

<?php
    if(isset($_POST["signUp"])){
        $fullName = $_POST["fullName"];
        $email = $_POST["email"];
        $NIC = $_POST["NIC"];
        $address = $_POST["address"];
        $contact = $_POST["contact"];
        $username = $_POST["username"];
        $pass = $_POST["pass"];

        // echo "Name: ".$fullName."<br>";
        // echo "email: ".$email."<br>";
        // echo "NIC: ".$NIC."<br>";
        // echo "address: ".$address."<br>";
        // echo "contact: ".$contact."<br>";
        // echo "username: ".$username."<br>";
        // echo "pass: ".$pass."<br>";

        $sql = "INSERT INTO customer(NIC, c_name, c_email, c_address, c_contact, username, password) VALUES ('$NIC', '$fullName', '$email', '$address', '$contact', '$username', '$pass')";

        if($con->query($sql)){
            echo "Data inserted successfully<br>";       
        }
        else
            echo "Error: <br>".$con->error;

        header("Location:../../Sarindu/index.html");  
    }  

?>