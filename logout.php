<?php
session_start();
if(isset($_SESSION['login'])== '1'){

    session_destroy();
    ?>
    <script type="text/javascript">
        window.location.href="login.html";

    </script>
<?php

}
else{
?>
    <script type="text/javascript">
        window.location.href="index.html";

    </script>

<?php



}

?>