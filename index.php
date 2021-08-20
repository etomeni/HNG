<?php
    require_once 'authController/contactAuth.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="Sunday Etom Eni">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>HNG-Intenship</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&amp;display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="assets/img/log.png">

    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="assets/fonts/css/line-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- end inject -->
</head>
<body class="">

    <header class="header-area bg-white shadow-sm">
       <?php include "assets/includes/header.php" ?>
    </header>

    <section class="mt-5">
        <?php include "assets/includes/ads.php" ?>

        <div class="container my-5 shadow">
            <div class="row">
                <div class="col-2">
                    <img src="assets/img/sunwhite.jpg" class="rounded" height="130" width="130" alt="profile pics">
                </div>
                <div class="col-10">
                    <div class="info-sum">
                        <h1> Sunday Etom Eni </h1>
                        <p> I Am a young enthusiast of computers and engineering, especially when it comes to programming, keen
                            to expand skills and knowledge, prepared to work in a variety of roles as required.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row bg-secondary my-5 p-3">
                <div class="col-6">
                    <div class="info-sum">
                        <p class="text-white"><i class="las la-envelope"></i> Sundaywht@gmail.com </p>

                        <p class="text-white"><i class="las la-map-marker-alt"></i> 
                            13, Idusogie Street, Opposite Esigie Police Station, Benin
                            City, Nigeria.
                        </p>

                        <p class="text-white"><i class="lab la-twitter"></i> twitter.com/sun1white </p>

                        <p class="text-white"><i class="lab la-github"></i> github.com/etomeni </p>

                        <p class="text-white"><i class="lab la-instagram"></i> instagram.com/amsundaywhite </p>

                    </div>
                </div>

                <div class="col-6">
                    <div class="info-sum">
                        <p class="text-white"><i class="las la-phone-alt"></i> 08066395804 </p>

                        <p class="text-white"><i class="las la-calendar-check"></i> 07 July, 1995 </p>

                        <p class="text-white"><i class="lab la-linkedin-in"></i> linkedin.com/in/sunday-white </p>

                        <p class="text-white"><i class="lab la-facebook-f"></i> facebook.com/amsundaywhite </p>

                        <p class="text-white"><i class="lab la-slack"></i> slack.com/sunday-white </p>

                    </div>
                </div>
            </div>

            <div class="row my-5 p-3">
                <div class="col">
                    <h1 class="text-secondary">Education</h1>
                    <div class="ps-4">
                        <p><b> Computer Engineering </b></p>
                        <p>University of Uyo, Uyo</p>
                        <p><small><i> 10/2015 – 7/2021 </i></small></p>
                    </div>

                    <div class="ps-4 mt-3">
                        <p><b> Secondary School Certificate (NECO) </b></p>
                        <p>Royal City College, Benin City, Edo State</p>
                        <p><small><i> 6/2008 – 7/2014 </i></small></p>
                    </div>

                    <h1 class="text-secondary mt-5">WORK EXPERIENCE</h1>
                    <div class="ps-4">
                        <p><b> Computer Engineering </b></p>
                        <p> Steve Computer Walehouse</p>
                        <p><small><i> 02/2015 – 09/2015 </i></small></p>
                    </div>

                    <div class="ps-4 mt-3">
                        <p><b> Graphics Designer </b></p>
                        <p>Crown Computers</p>
                        <p><small><i> 09/2018 – 12/2018 </i></small></p>
                    </div>
                </div>

                <div class="col">
                    <h1 class="text-secondary">SKILLS</h1>
                    <div class="ps-4 skills">
                        <span>Web development</span>
                        <span>WordPress </span>
                        <span>PHP </span>
                        <span>LARAVEL </span>
                        <span>JavaScript </span>
                        <span>Blogging </span>
                    </div>

                    <h1 class="text-secondary mt-5">PERSONAL PROJECTS</h1>
                    <div class="ps-4">
                        <p><b> A Database Management of Food Commodities </b></p>
                        <p>(03/2019 – 04/2019)</p>
                        <li><small><i> Created a database management for the supply of food
                            commodities. </i></small></li>
                    </div>
                    <div class="ps-4 pt-3">
                        <p><b> Hall6 </b></p>
                        <p>(01/2019 – 02/2019)</p>
                        <li><small><i>A news, scholarship updates & dating blog for students, especially
                            for those in Uniuversity of Uyo. </i></small></li>
                    </div>

                    <h1 class="text-secondary mt-5">CERTIFICATES</h1>
                    <div class="ps-4">
                        <p><b> Bachelor of Engineering </b></p>
                        <p>(10/2015 – 07/2021)</p>
                        <li><small><i> B.Engr in Computer Engineering </i></small></li>
                    </div>

                    <h1 class="text-secondary mt-5">LANGUAGES</h1>
                    <div class="ps-4">
                        <p><b> English </b></p>
                        <li><small><i> Full Professional Proficiency </i></small></li>
                    </div>
                    <div class="ps-4 mt-3">
                        <p><b> Ibibio </b></p>
                        <li><small><i> Native or Bilingual Proficiency </i></small></li>
                    </div>

                </div>
                
            </div>

        </div>

        <div class="row bg-secondary" id="Contactsection">
           <?php include "assets/includes/contact.php" ?>
        </div>
    </section>

    <footer class="my-3">
        <?php include "assets/includes/ads.php" ?>
        <?php include "assets/includes/footer.php" ?>
    </footer>
        
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>