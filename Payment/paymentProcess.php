<?php
    require("../config.php");
?>

<?php
    if(isset($_POST["submit"])){
        $name = $_POST["fullName"];
        $address = $_POST["address"];
        $policyID = $_POST["polID"];
        $pltNumber = $_POST["pltNum"];
        $usage = $_POST["usage-radio"];
        $dateReceived = $_POST["recDate"];
        $dateDue = $_POST["dueDate"];
        $cardName = $_POST["cardholderName"];
        $cardNum = $_POST["cardNumber"];
        $expire = $_POST["expiryDate"];
        $cvc = $_POST["cvc"];

        // echo "Name: ".$name."<br>";
        // echo "address: ".$address."<br>";
        // echo "policyID: ".$policyID."<br>";
        // echo "pltNumber: ".$pltNumber."<br>";
        // echo "dateReceived: ".$dateReceived."<br>";
        // echo "dateDue: ".$dateDue."<br>";
        // echo "cardName: ".$cardName."<br>";
        // echo "cardNum: ".$cardNum."<br>";
        // echo "expire: ".$expire."<br>";
        // echo "cvc: ".$cvc."<br>";

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

        $sql = "INSERT INTO payment(plateNum, policyID, vehicle_usage, pay_received, pay_due, cardHolder_name, cardNumber, expiryDate, cvc) VALUES('$pltNumber', '$policyID', '$usage', '$dateReceived', '$dateDue', '$cardName', '$cardNum', '$expire', '$cvc')";

        if($con->query($sql)){
            echo "Data inserted successfully<br>";       
        }
        else
            echo "Error: <br>".$con->error;

        header("Location:../../Shafa/AboutUs.html");
        $con->close();
    }
?>