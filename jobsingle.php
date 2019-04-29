<?php
session_start();
if(isset($_GET['id'])) {
    $conn = new mysqli('localhost', 'root', '', '3atel');
    if ($conn->connect_error) {
        echo "fuck";
    }
    $id=$_GET['id'];
    $qr = "SELECT * FROM job WHERE id = '" .$id. "'";
    $qr2 = "SELECT * FROM jobreq WHERE id = '" .$id. "'";
    $result=$conn->query($qr);
    $row=$result->fetch_assoc();
    $result2=$conn->query($qr2);
    $row2=$result2->fetch_assoc();
    $em=$row['company'];
    $qr3 = "SELECT * FROM company WHERE email = '" .$em. "'";
    $result3=$conn->query($qr3);
    $row3=$result3->fetch_assoc();

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>3atel</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="fonts/icomoon/style.css">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="css/animate.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">


        <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

        <link rel="stylesheet" href="css/aos.css">

        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>

    <div class="site-wrap">

        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div> <!-- .site-mobile-menu -->


        <div class="site-navbar-wrap js-site-navbar bg-white">

            <div class="container">
                <div class="site-navbar bg-light">
                    <div class="py-1">
                        <div class="row align-items-center">
                            <div class="col-2">
                                <h2 class="mb-0 site-logo"><a href="index.html">3<strong class="font-weight-bold">atel</strong> </a></h2>
                            </div>
                            <div class="col-10">
                                <nav class="site-navigation text-right" role="navigation">
                                    <div class="container">
                                        <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                                        <ul class="site-menu js-clone-nav d-none d-lg-block">
                                            <li class="has-children">
                                                <a href="categories.html">For Candidates</a>
                                                <ul class="dropdown arrow-top">
                                                    <li><a href="newcv.php">Add Cv</a></li>
                                                    <li><a href="CV/cvprofile.php">My profile</a></li>
                                                    <li><a href="categories.html">Browse Jobs</a></li>
                                                    <li><a href="logout.php">Log out</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-children">
                                                <a href="categories.html">For Employees</a>
                                                <ul class="dropdown arrow-top">
                                                    <li><a href="categories.html">Category</a></li>
                                                    <li><a href="browsecan.php">Browse Candidates</a></li>
                                                    <li><a href="new=post.php">Post a Job</a></li>
                                                    <li><a href="logout.php">Log out</a></li>

                                                </ul>
                                            </li>
                                            <li class="has-children"> Contact
                                                <ul class="dropdown arrow-top">
                                                    <li><a href="contact.html">Contact Us</a></li>
                                                    <li><a href="about.html">About Us</a></li>

                                                </ul>

                                            </li>
                                            <li><a href="login.html"><span class="bg-primary text-white py-3 px-4 rounded"><span class="icon-plus mr-3"></span>Log in</span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="height: 113px;"></div>

        <div class="unit-5 overlay" style="background-image: url('images/hero_2.jpg');">
            <div class="container text-center">
                <h2 class="mb-0"><?php echo $row['name']   ?></h2>
                <p class="mb-0 unit-6"><a href="index.html">Home</a> <span class="sep">></span> <span>Job Item</span>
                </p>
            </div>
        </div>


        <div class="site-section bg-light">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-lg-8 mb-5">


                        <div class="p-5 bg-white">

                            <div class="mb-4 mb-md-5 mr-5">
                                <div class="job-post-item-header d-flex align-items-center">
                                    <h2 class="mr-3 text-black h4"><?php echo $row['name']   ?></h2>
                                    <div class="badge-wrap">
                                        <span
                                            class="border border-warning text-warning py-2 px-4 rounded"><?php echo $row['type']   ?></span>
                                    </div>
                                </div>
                                <div class="job-post-item-body d-block d-md-flex">
                                    <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">
                                            <?php echo $row3['company_name']   ?></a></div>
                                    <div><span class="fl-bigmug-line-big104"></span> <span><?php echo $row['location']   ?></span>
                                    </div>
                                </div>
                                <br>
                                <div class="badge-wrap">
                                <span
                                    class="border border-danger text-dark py-2 px-4 rounded"><?php echo $row2['exp']  ; ?></span>
                                </div>

                            </div>



                            <div class="img-border mb-5">
                                <a href="https://vimeo.com/28959265" class="popup-vimeo image-play">
                  <span class="icon-wrap">
                    <span class="icon icon-play"></span>
                  </span>
                                    <img src="images/hero_2.jpg" alt="Image" class="img-fluid rounded">
                                </a>
                            </div>


                            <p><h1>Job Description : </h1><?php echo $row['job'] ;  ?></p>
                            <p><h1>Job Requirements :</h1><?php echo $row2['req'] ;   ?></p>
                            <?php
                            $str="applyjob.php?id=".$id;
                            $str2="applicants.php?id=".$id;
                            ?>

                            <p class="mt-5"><a href="<?php echo $str?>" class="btn btn-primary  py-2 px-4">Apply Job</a></p>
                            <p class="mt-5"><a href="<?php echo $str2?>" class="btn btn-primary  py-2 px-4">Applicants</a></p>

                        </div>
                    </div>


                </div>
            </div>
        </div>


        <div class="site-section">
            <div class="container">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-md-6" data-aos="fade">
                        <h2>Frequently Ask Questions</h2>
                    </div>
                </div>


                <div class="row justify-content-center" data-aos="fade" data-aos-delay="100">
                    <div class="col-md-8">
                        <div class="accordion unit-8" id="accordion">
                            <div class="accordion-item">
                                <h3 class="mb-0 heading">
                                    <a class="btn-block" data-toggle="collapse" href="#collapseOne" role="button"
                                       aria-expanded="true" aria-controls="collapseOne">What is the name of your company<span
                                            class="icon"></span></a>
                                </h3>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                     data-parent="#accordion">
                                    <div class="body-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur quae
                                            cumque perspiciatis aperiam accusantium facilis provident aspernatur nisi
                                            optio debitis dolorum, est eum eligendi vero aut ad necessitatibus nulla sit
                                            labore doloremque magnam! Ex molestiae, dolor tempora, ad fuga minima enim
                                            mollitia consequuntur, necessitatibus praesentium eligendi officia
                                            recusandae culpa tempore eaque quasi ullam magnam modi quidem in amet. Quod
                                            debitis error placeat, tempore quasi aliquid eaque vel facilis culpa
                                            voluptate.</p>
                                    </div>
                                </div>
                            </div> <!-- .accordion-item -->

                            <div class="accordion-item">
                                <h3 class="mb-0 heading">
                                    <a class="btn-block" data-toggle="collapse" href="#collapseTwo" role="button"
                                       aria-expanded="false" aria-controls="collapseTwo">How much pay for 3 months?<span
                                            class="icon"></span></a>
                                </h3>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingOne"
                                     data-parent="#accordion">
                                    <div class="body-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum
                                            expedita. Nostrum iure atque enim quisquam minima distinctio omnis,
                                            consequatur aliquam suscipit, quidem, esse aspernatur! Libero, excepturi
                                            animi repellendus porro impedit nihil in doloremque a quaerat enim
                                            voluptatum, perspiciatis, quas dignissimos maxime ut cum reiciendis eius
                                            dolorum voluptatem aliquam!</p>
                                    </div>
                                </div>
                            </div> <!-- .accordion-item -->

                            <div class="accordion-item">
                                <h3 class="mb-0 heading">
                                    <a class="btn-block" data-toggle="collapse" href="#collapseThree" role="button"
                                       aria-expanded="false" aria-controls="collapseThree">Do I need to register? <span
                                            class="icon"></span></a>
                                </h3>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingOne"
                                     data-parent="#accordion">
                                    <div class="body-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum
                                            expedita. Nostrum iure atque enim quisquam minima distinctio omnis,
                                            consequatur aliquam suscipit, quidem, esse aspernatur! Libero, excepturi
                                            animi repellendus porro impedit nihil in doloremque a quaerat enim
                                            voluptatum, perspiciatis, quas dignissimos maxime ut cum reiciendis eius
                                            dolorum voluptatem aliquam!</p>
                                    </div>
                                </div>
                            </div> <!-- .accordion-item -->

                            <div class="accordion-item">
                                <h3 class="mb-0 heading">
                                    <a class="btn-block" data-toggle="collapse" href="#collapseFour" role="button"
                                       aria-expanded="false" aria-controls="collapseFour">Who should I contact in case
                                        of support.<span class="icon"></span></a>
                                </h3>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingOne"
                                     data-parent="#accordion">
                                    <div class="body-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum
                                            expedita. Nostrum iure atque enim quisquam minima distinctio omnis,
                                            consequatur aliquam suscipit, quidem, esse aspernatur! Libero, excepturi
                                            animi repellendus porro impedit nihil in doloremque a quaerat enim
                                            voluptatum, perspiciatis, quas dignissimos maxime ut cum reiciendis eius
                                            dolorum voluptatem aliquam!</p>
                                    </div>
                                </div>
                            </div> <!-- .accordion-item -->

                        </div>
                    </div>
                </div>

            </div>
        </div>


        <footer class="site-footer">
            <div class="container">


                <div class="row">
                    <div class="row">
                        <div class="col-md-4">
                            <h3 class="footer-heading mb-4 text-white">About Us</h3>
                            <p>You can contact us if you have problems ,To learn more about us and who we are</p>
                            <p><a href="about.html" class="btn btn-primary pill text-white px-4">Read More</a></p>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="footer-heading mb-4 text-white">Quick Menu</h3>
                                    <ul class="list-unstyled">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="browsejobs.php">Browse Job</a></li>
                                        <li><a href="categories.html">categories</a></li>
                                        <li><a href="new=post.php">post a job</a></li>
                                        <li><a href="index.html">News</a></li>
                                        <li><a href="browsejobs.php">Careers</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="footer-heading mb-4 text-white">Categories</h3>
                                    <ul class="list-unstyled">
                                        <li><a href="browsetype.php?type=Full Time">Full Time</a></li>
                                        <li><a href="browsetype.php?type=Freelance">Freelance</a></li>
                                        <li><a href="browsetype.php?type=Temporary">Temporary</a></li>
                                        <li><a href="browsetype.php?type=Internship">Internship</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-2">
                            <div class="col-md-12"><h3 class="footer-heading mb-4 text-white">Social Icons</h3></div>
                            <div class="col-md-12">
                                <p>
                                    <a href="https://www.facebook.com/Ahmad.3oyk" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a>
                                    <a href="https://twitter.com/sdsad29712179" class="p-2"><span class="icon-twitter"></span></a>
                                    <a href="https://www.instagram.com/ahmad_mareixp/" class="p-2"><span class="icon-instagram"></span></a>
                                    <a href="#" class="p-2"><span class="icon-vimeo"></span></a>

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-5 mt-5 text-center">
                        <div class="col-md-12">
                            <p style="padding-left: 65vh;">
                                Made by Ahmad Maree && Mohammad Ghulmi && Jana Alsaadi
                                <script data-cfasync="false"
                                        src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                                <script>document.write(new Date().getFullYear());</script>

                            </p>
                        </div>

                    </div>

                </div>
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>


    <script src="js/mediaelement-and-player.min.js"></script>

    <script src="js/main.js"></script>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

            for (var i = 0; i < total; i++) {
                new MediaElementPlayer(mediaElements[i], {
                    pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                    shimScriptAccess: 'always',
                    success: function () {
                        var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                        for (var j = 0; j < targetTotal; j++) {
                            target[j].style.visibility = 'visible';
                        }
                    }
                });
            }
        });
    </script>


    <script>
        // This example displays an address form, using the autocomplete feature
        // of the Google Places API to help users fill in the information.

        // This example requires the Places library. Include the libraries=places
        // parameter when you first load the API. For example:
        // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

        var placeSearch, autocomplete;
        var componentForm = {
            street_number: 'short_name',
            route: 'long_name',
            locality: 'long_name',
            administrative_area_level_1: 'short_name',
            country: 'long_name',
            postal_code: 'short_name'
        };

        function initAutocomplete() {
            // Create the autocomplete object, restricting the search to geographical
            // location types.
            autocomplete = new google.maps.places.Autocomplete(
                /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
                {types: ['geocode']});

            // When the user selects an address from the dropdown, populate the address
            // fields in the form.
            autocomplete.addListener('place_changed', fillInAddress);
        }

        function fillInAddress() {
            // Get the place details from the autocomplete object.
            var place = autocomplete.getPlace();

            for (var component in componentForm) {
                document.getElementById(component).value = '';
                document.getElementById(component).disabled = false;
            }

            // Get each component of the address from the place details
            // and fill the corresponding field on the form.
            for (var i = 0; i < place.address_components.length; i++) {
                var addressType = place.address_components[i].types[0];
                if (componentForm[addressType]) {
                    var val = place.address_components[i][componentForm[addressType]];
                    document.getElementById(addressType).value = val;
                }
            }
        }

        // Bias the autocomplete object to the user's geographical location,
        // as supplied by the browser's 'navigator.geolocation' object.
        function geolocate() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    var geolocation = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    var circle = new google.maps.Circle({
                        center: geolocation,
                        radius: position.coords.accuracy
                    });
                    autocomplete.setBounds(circle.getBounds());
                });
            }
        }
    </script>

    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&libraries=places&callback=initAutocomplete"
        async defer></script>

    </body>
    </html>
    <?php
}
else header('Location: categories.html');
?>
