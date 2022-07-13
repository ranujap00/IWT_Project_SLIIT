<?php
    require("../config.php");
?>

<?php
    if(isset($_POST["submit"])){
        $regCover = $_POST["reg-cover"];
        $vType = $_POST["vType"];
        $vRegNo = $_POST["vRegNo"];
        $year = $_POST["manuYear"];
        $marketVal = $_POST["marketValue"];
        $makeModel = $_POST["makeModel"];
        $fuelType = $_POST["fType"];
        $arr = $_POST["extraCover"];
        $checkbox = implode(',', $arr);

        echo "cover: ".$regCover."<br>";
        echo "Type: ".$vType."<br>";
        echo "Reg No: ".$vRegNo."<br>";
        echo "market val: ".$marketVal."<br>";
        echo "make and model: ".$makeModel."<br>";
        echo "Extras: ".$checkbox."<br>";

        $sql = "INSERT INTO vehicle(v_RegNo, v_Type, regCover, year, marketValue, make_and_model, fuel, extraCovers) VALUES ('$vRegNo', '$vType', '$regCover', '$year', '$marketVal', '$makeModel', '$fuelType', '$checkbox')";

        if($con->query($sql)){
            echo "Data inserted successfully<br>";       
        }
        else
            echo "Error: <br>".$con->error;

        header("Location:../../Pulitha/User Account/Useracc.html");   
        
    }
    $con->close();
?>