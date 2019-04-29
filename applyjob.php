<?php
session_start();
if(($_SESSION['type']) === 'candidate') {
    if (isset($_GET['id'])) {
        $id=$_GET['id'];
        $conn = new mysqli('localhost', 'root', '', '3atel');
        if ($conn->connect_error) {
            echo "fuck";
        } else {
            $emcan=$_SESSION['company'];
            $qury2 = "SELECT * FROM cv WHERE  email = '" . $_SESSION['company'] . "'";
            $qr2 = "SELECT * FROM jobreq WHERE id = '" .$id. "'";
            $result = $conn->query($qr2);
            $result2 = $conn->query($qury2);
            $row=$result->fetch_assoc();
            $row2=$result2->fetch_assoc();
            $expcv=$row2["explvl"];
            $expjob=$row["exp"];
            $skills=$row2["skills"];
            $req=$row["req"];
            $exppercent;
            switch ($expcv) {
                case "entrylevel":
                    switch ($expjob) {
                        case "entrylevel":
                            $exppercent="100%";
                            break;
                        case "midlevel":
                            $exppercent="50%";

                            break;
                        case "midseniorlevel":
                            $exppercent="25%";
                            break;
                        case "toplevel":
                            $exppercent="0%";
                            break;
                    }
                    break;
                case "midlevel":
                    switch ($expjob) {
                        case "entrylevel":
                            $exppercent="100%";
                            break;
                        case "midlevel":
                            $exppercent="100%";

                            break;
                        case "midseniorlevel":
                            $exppercent="50%";
                            break;
                        case "toplevel":
                            $exppercent="25%";
                            break;
                    }
                    break;
                case "midseniorlevel":
                    switch ($expjob) {
                        case "entrylevel":
                            $exppercent="100%";
                            break;
                        case "midlevel":
                            $exppercent="100%";

                            break;
                        case "midseniorlevel":
                            $exppercent="100%";
                            break;
                        case "toplevel":
                            $exppercent="50%";
                            break;
                    }
                    break;
                case "toplevel":
                    $exppercent="100%";
                    break;
            }


             $skill=explode(",",$skills);
            $skill2=explode(" ",$req);
            $count=sizeof($skill);
            $count2=sizeof($skill2);
            $total=0;

            for ($i=0;$i<$count;$i++){
                if( strpos( $req, $skill[$i]) !== false) {
                    $total++;
                }


            }
            $skil=($total/$count2)*100;
            $skillper=$skil."%";


            $sql = "INSERT INTO jobapp VALUES ('" . $emcan . "','" . $id . "','" . $exppercent . "','" . $skillper ."')";
            if($conn->query($sql)=== true){
                header("Location: applicants.php?id=".$id);
            }
            else{

            }


        }


    }
    else header('Location: categories.html');

}


else{

    ?>
    <script type="text/javascript">
        alert("You must be logged in as candid");
       window.history.go(-1);

    </script>

<?php

}





?>