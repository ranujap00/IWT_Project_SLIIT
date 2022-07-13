<?php
    require("../config.php");
?>

<?php
    if(isset($_POST["submit"])){
        $vNo = $_POST["vehicleNo"];
        $NIC = $_POST["NIC"];
        $mobile = $_POST["mobile"];

        // echo "Vehicle Number: ".$vNo."<br>";
        // echo "NIC: ".$NIC."<br>";
        // echo "mobile: ".$mobile."<br>";
        
        // FILE UPLOAD
        $target_dir = "uploads/";
        $target_file = $target_dir.$_FILES["myFile"]["name"];

        if(isset($_FILES["myFile"])){
            $uploaded = move_uploaded_file($_FILES["myFile"]["tmp_name"], $target_file);

            if($uploaded)
                echo "File successfully uploaded<br>";
            else
                echo "Error while uploading";
        }

        $sql = "INSERT INTO policy(NIC, v_number, contact) VALUES('$NIC', '$vNo', '$mobile')";

        if($con->query($sql)){
            echo "Data inserted successfully<br>";       
        }
        else
            echo "Error: <br>".$con->error;

        header("Refresh:0; url=http://localhost/IWT Final Project/Ranuja/Motor claim/motorClaim.php");

        $con->close();
    }
?>