<?php
session_start();

    if (isset($_POST["edu"]) && isset($_POST["skills"]) && isset($_POST["exp"])&& isset($_POST["expl"])) {
        $edu = $_POST["edu"];
        $EXP = $_POST["exp"];
        $ski = $_POST["skills"];
        $cop = $_SESSION['company'];
        $expl=$_POST["expl"];
        $conn = new mysqli('localhost', 'root', '', '3atel');
        if ($conn->connect_error) {
            echo "fuck";
        } else {
            $sql = "INSERT INTO cv VALUES ('" . $cop . "','" . $edu . "','" . $ski . "','" . $EXP . "','".$expl."')";
            if ($conn->query($sql) === TRUE) {
                header('Location: CV/cvprofile.php');
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

        }



    }


?>