<?php
/*includes configuration file*/
  include_once'config.php';       
 
?> 

<!DOCTYPE html>
<html>
<head>
<!--button and page style-->
<style> 
*{
	margin:10px;
	padding:5px;
	background-color:lightblue;
}
   .button{
    border-radius: 10px;
    background-color: crimson;
    padding: 10px;
    margin:5px;
	float:right;
    border-style: none;
}
    .button:hover{
    background-color:beige;
   }
</style>
</head>
<body><!--html code for button-->
    <a href='agent dashboard/agentdashboard.php' ><input type="button" class="button" value="Go back to dashboard"></a>
	
	<?php  /*php code to read files*/
	    $file = $_POST["filename"];   /*gets the relevant file name*/
       if(isset($file)){
		   
            $readFile=fopen("$file","r") or die("File name not found!");
			
             while(!feof($readFile)){  /*reads the file*/
             echo fread($readFile, filesize("$file"));
        }
        fclose($readFile);
        }
     ?>
</body>
</html>



