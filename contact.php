<?php


if(isset($_POST["send"])) {

    if (isset($_POST["name1"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["message"])) {


        $conn = new mysqli('localhost', 'root', '', '3atel');
        if ($conn->connect_error) {
            echo "fuck";
        } else {
            $name=$_POST["name1"];
            $email=$_POST["email"];
            $msg=$_POST["message"];
            $phone=$_POST["phone"];
            $query="INSERT INTO contact VALUES ('".$name."','".$email."','".$phone."' ,'".$msg."')";
            if( $conn->query($query)===TRUE){
                echo "success";
            }
            else{

            }
        }
    }
}
    ?>
