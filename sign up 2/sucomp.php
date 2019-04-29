<?php
if(isset($_POST["name"])&&isset($_POST["email"])&&isset($_POST["password"])&&isset($_POST["loc"])&&isset($_POST["web"])&&isset($_POST["pno"])){
    $name=$_POST["name"];
    $em=$_POST["email"];
    $pass=sha1($_POST["password"]);
    $web=$_POST["web"];
    $loc=$_POST["loc"];
    $pno=$_POST["pno"];
    $conn = new mysqli('localhost', 'root', '', '3atel');
    if ($conn->connect_error) {
        echo "fuck";
    }
    else{

        $sql2="INSERT INTO users VALUES ('".$em."','".$pass."','".$type."')";
        $sql="INSERT INTO company VALUES ('".$name."','".$em."','".$loc."','".$pno."','".$web."')";
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