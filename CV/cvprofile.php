<?php
session_start();

if(($_SESSION['type']) === 'candidate'){

    $conn = new mysqli('localhost', 'root', '', '3atel');
    if ($conn->connect_error) {
        echo "fuck";
    } else {

        $qury = "SELECT * FROM candidate WHERE email = '" . $_SESSION['company'] . "'";
        $qury2 = "SELECT * FROM cv WHERE  email = '" . $_SESSION['company'] . "'";
        $result = $conn->query($qury);
        $result2 = $conn->query($qury2);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $name = $row["canname"];
            $age = $row["age"];
            $em = $row["email"];
            $gen = $row["gender"];
            $add = $row["address"];
            $pho = $row["phoneno"];

        }
        if ($result2->num_rows > 0) {
            $row2 = $result2->fetch_assoc();
            $exp = $row2["exp"];
            $edu = $row2["edu"];
            $skills = $row2["skills"];
            $expl=$row2["explvl"];
        }

        ?>

        <!DOCTYPE html>
        <html>
        <head>
            <title>3atel CV</title>


            <meta name="viewport" content="width=device-width"/>
            <meta name="description" content="The Curriculum Vitae of Joe Bloggs."/>
            <meta charset="UTF-8">

            <link type="text/css" rel="stylesheet" href="style.css">
            <link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet'
                  type='text/css'>
            <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700"
                  rel="stylesheet">
            <link rel="stylesheet" href="../fonts/icomoon/style.css">

            <link rel="stylesheet" href="../css/bootstrap.min.css">
            <link rel="stylesheet" href="../css/magnific-popup.css">
            <link rel="stylesheet" href="../css/jquery-ui.css">
            <link rel="stylesheet" href="../css/owl.carousel.min.css">
            <link rel="stylesheet" href="../css/owl.theme.default.min.css">
            <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
            <link rel="stylesheet" href="../css/animate.css">

            <link rel="stylesheet"
                  href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">


            <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">

            <link rel="stylesheet" href="../css/aos.css">

            <link rel="stylesheet" href="../css/style.css">

            <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->
        </head>
        <body id="top" onload="f();">


        <div id="cv" class="instaFade">
            <a href="../index.html">
                <button class="btn  btn-block   xon" value="Main Page"> Main Page</button>
            </a>
            <div class="mainDetails">

                <div id="name">
                    <h1 class="quickFade delayTwo"><?php echo $name ?></h1>
                </div>

                <div id="contactDetails" class="quickFade delayFour">
                    <ul>
                        <li id="em">e: <a href="#" target="_blank" id="em"> <?php echo $em ?></a></li>
                        <li id="pno">p:<?php echo $pho ?></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>

            <div id="mainArea" class="quickFade delayFive">
                <section>
                    <article>
                        <div class="sectionTitle">
                            <h1>Personal Profile</h1>
                        </div>

                        <div class="sectionContent">
                            <p id="pperson"><span> Age : <?php echo $age ?></span></p>
                            <p><span>Gender : <?php echo $gen ?></span></p>
                            <p><span>Address : <?php echo $add ?></span></p>
                        </div>
                    </article>
                    <div class="clear"></div>
                </section>


                <section>
                    <div class="sectionTitle">
                        <h1>Work Experience</h1>
                    </div>

                    <div class="sectionContent">
                        <article>
                            <p id="pexpl"><span><?php echo $expl ?></span></p>
                        </article>

                        <article>
                            <p id="pexp"><span><?php echo $exp ?></span></p>
                        </article>

                    </div>
                    <div class="clear"></div>
                </section>


                <section>
                    <div class="sectionTitle">
                        <h1>Skills</h1>
                    </div>

                    <div class="sectionContent">
                        <ul class="keySkills">
                            <li><?php echo $skills ?></li>

                        </ul>
                    </div>
                    <div class="clear"></div>
                </section>


                <section>
                    <div class="sectionTitle">
                        <h1>Education</h1>
                    </div>

                    <div class="sectionContent">
                        <article>
                            <h2 id="edu"><span><?php echo $edu ?></span></h2>
                        </article>

                    </div>
                    <div class="clear"></div>
                </section>

            </div>

        </div>

        <script type="text/javascript">
            var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
            document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
        </script>
        <script type="text/javascript">
            var pageTracker = _gat._getTracker("UA-3753241-1");
            pageTracker._initData();
            pageTracker._trackPageview();
        </script>
        <script src="../js/jquery-3.3.1.min.js"></script>
        <script src="../js/jquery-migrate-3.0.1.min.js"></script>
        <script src="../js/jquery-ui.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/owl.carousel.min.js"></script>
        <script src="../js/jquery.stellar.min.js"></script>
        <script src="../js/jquery.countdown.min.js"></script>
        <script src="../js/jquery.magnific-popup.min.js"></script>
        <script src="../js/bootstrap-datepicker.min.js"></script>
        <script src="../js/aos.js"></script>


        <script src="../js/mediaelement-and-player.min.js"></script>

        <script src="../js/main.js"></script>
        </body>
        </html>

        <?php
    }
}
else echo "<script>
window.location.href='../index.html';
alert('you are not a candidate');
</script>";


?>

