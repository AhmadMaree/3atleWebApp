<?php
session_start();
if(isset($_POST["name"])&&isset($_POST["salary"])&&isset($_POST["job-type"])&&isset($_POST["loc"])&&isset($_POST["jd"])&&isset($_POST["category"])) {
    $name=$_POST["name"];
    $salary=$_POST["salary"];
    $jt=$_POST["job-type"];
    $loc=$_POST["loc"];
    $jd=$_POST["jd"];
    $cat=$_POST["category"];
    $company=$_SESSION['company'];
    $conn = new mysqli('localhost', 'root', '', '3atel');
    if ($conn->connect_error) {
        echo "fuck";
    }
    else{

        $sql="INSERT INTO job (name,salary,type,location,job,category,company) VALUES ('".$name."','".$salary."','".$jt."','".$loc."','".$jd."','".$cat."','".$company."')";
        if ($conn->query($sql) === TRUE) {
            $id=mysqli_insert_id($conn);
            if (isset($_POST["exp"]) && isset($_POST["jr"])) {
                $exp=$_POST["exp"];
                $jr=$_POST["jr"];
                $sql2="INSERT INTO jobreq VALUES ('".$id."','".$jr."','".$exp."')";
                $conn->query($sql2);
                header('Location: jobsingle.php');
        }
        }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }
}
?>