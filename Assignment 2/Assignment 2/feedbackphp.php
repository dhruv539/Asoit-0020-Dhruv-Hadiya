<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="feedbackdb";

    $conn=mysqli_connect($servername,$username,$password,$database);

    if($conn -> connect_error){

        die("Conection Faild".$conn->connect_error);
    }else{

        echo "Connection Done";
    }

    $txtname=$_REQUEST['name'];
    $txtgmail=$_REQUEST['gmaill'];
    $txtfeedback=$_REQUEST['feedback'];

    $insert="INSERT INTO fbtb(name,gmail,feedback)VALUES('$txtname','$txtgmail','$txtfeedback')";

    if($conn-> query($insert) == true){

         echo "<br>"."new record inserted" ;
    }else{

        echo "Error:".$insert. "<br>". $conn->error;
    }

    $conn->close();
?>