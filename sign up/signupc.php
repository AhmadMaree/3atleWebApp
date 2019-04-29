<?php
if(isset($_POST["name"])&&isset($_POST["birthday"])&&isset($_POST["gender"])&&isset($_POST["email"])&&isset($_POST["address"])&&isset($_POST["pno"])&&isset($_POST["pass"])){

    $name=$_POST["name"];
    $bid=$_POST["birthday"];
    $gen=$_POST["gender"];
    $em=$_POST["email"];
    $address=$_POST["address"];
    $pno=$_POST["pno"];
    $pass=sha1($_POST["pass"]);
    $conn = new mysqli('localhost', 'root', '', '3atel');
    $type=1;
    if ($conn->connect_error) {
        echo "fuck";
    }
    else {

        $sql="INSERT INTO candidate VALUES ('".$name."','".$bid."','".$em."','".$gen."','".$address."','".$pno."')";
        $sql2="INSERT INTO users VALUES ('".$em."','".$pass."','".$type."')";
        if ($conn->query($sql) === TRUE) {
            $conn->query($sql2);
            ?>
                <script type="text/javascript">
                window.location.href="../login.html";
            </script>
            <?php

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }






}
?>