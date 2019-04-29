<?php
session_start();
?>
    <script type="text/javascript">
        function closessession() {
            <?php
            session_destroy();
            ?>

        }
    </script>
<?php
