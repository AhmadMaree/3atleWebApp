<?php

session_start();


$username = $_POST ["username"];
$pass = sha1($_POST["pass"]);
$usn="ahmad";
$ps="12345";
$servername="localhost";
$conn = new mysqli('localhost', 'root', '', '3atel');
if ($conn->connect_error) {
    echo "fuck";
}
else {

    if (isset($username) && isset($pass)) {
        if ($username != null && $pass != null) {
          $qury = "SELECT * FROM users WHERE username = '$username' and password = '$pass'";
          $result = $conn->query($qury);


              if ($result ->num_rows > 0) {
                  $_SESSION['login'] = 1;
                  $_SESSION['company'] = $username;
                  $row=$result->fetch_assoc();
                  if ($row['type']==0){
                      $_SESSION['type']="company";
              }
                  else{
                      $_SESSION['type']="candidate";

                  }



                  ?>
                  <script type="text/javascript">
                  window.location.href = 'index.html';
</script>
<?php
          }

        else {0


            ?>
            <script type="text/javascript">
                alert("PW OR Email incorrect")
                window.location.href="login.html";
            </script>
<?php

        }


        }

    }

}
?>






