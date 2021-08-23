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
<body class="container-fluid">

    <header class="header-area bg-white shadow-sm">
       <?php include "assets/includes/header.php" ?>
    </header>

    <section class="mt-5">
        <?php include "assets/includes/ads.php" ?>

        <div class="container my-5 shadow">
            <div class="row">
                <div class="col-4 col-md-3 col-lg-2">
                    <img src="assets/img/sunwhite.jpg" class="rounded" height="130" width="130" alt="profile pics">
                </div>
                <div class="col-8 col-md-9 col-lg-10">
                    <div class="info-sum">
                        <h1> Sunday Etom Eni </h1>
                        <p> A web developer and a young enthusiast of Computers and Engineering, especially when it comes to programming. 
                            Been developing since 2019, developed lots of websites using JavaScript, PHP, Laravel and WordPress. 
                            Keen on learning more, expanding skills and knowledge, collaborating and sharing knowledge with people. 
                            Pays obsessive attention to details and prepared to work in a variety of roles as required. 
                        </p>
                    </div>
                </div>
            </div>

            <div class="row bg-secondary my-5 p-3">
                <div class="col-6">
                    <div class="info-sum">
                        <p class="text-white"><i class="las la-envelope"></i> <a href="mailto:Sundaywht@gmail.com">Sundaywht@gmail.com</a> </p>

                        <p class="text-white"><i class="las la-map-marker-alt"></i> 
                            13, Idusogie Street, Opposite Esigie Police Station, Benin
                            City, Nigeria.
                        </p>

                        <p class="text-white"><i class="las la-globe"></i> <a href="http://sunday.rf.gd"> sunday.rf.gd </a> </p>
                        
                        <p class="text-white"><i class="lab la-twitter"></i> <a href="https://twitter.com/sun1white"> twitter.com/sun1white </a> </p>

                        <p class="text-white"><i class="lab la-github"></i> <a href="https://github.com/etomeni"> github.com/etomeni </a> </p>

                        <p class="text-white"><i class="lab la-instagram"></i> <a href="https://instagram.com/amsundaywhite"> instagram.com/amsundaywhite </a> </p>

                    </div>
                </div>

                <div class="col-6">
                    <div class="info-sum">
                        <p class="text-white"><i class="las la-phone-alt"></i> <a href="tel:+2348108786933"> +234-8108786933 </a> </p>

                        <p class="text-white"><i class="las la-calendar-check"></i> 07 July, 1995 </p>
                        
                        <p class="text-white"><i class="las la-mars"></i> Male </p>

                        <p class="text-white"><i class="lab la-linkedin-in"></i> <a href="https://linkedin.com/in/sunday-white"> linkedin.com/in/sunday-white </a> </p>

                        <p class="text-white"><i class="lab la-facebook-f"></i> <a href="https://facebook.com/amsundaywhite"> facebook.com/amsundaywhite </a> </p>

                        <p class="text-white"><i class="lab la-slack"></i> <a href="https://slack.com/sunday-white"> slack.com/sunday-white </a> </p>

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

                    <div class="ps-4 mt-3" hidden>
                        <p><b> West African Examinations Council (WAEC) </b></p>
                        <p>Accord Group of School, Benin City, Edo State</p>
                        <p><small><i> 5/2013 </i></small></p>
                    </div>

                    <div class="ps-4 mt-3">
                        <p><b> Senior Secondary School </b></p>
                        <p>Royal City College, Benin City, Edo State</p>
                        <p><small><i> 9/2012 – 7/2014 </i></small></p>
                    </div>

                    <div class="ps-4 mt-3">
                        <p><b> Junior Secondary School </b></p>
                        <p>Edokpolor Grammer School, Benin City, Edo State</p>
                        <p><small><i> 9/2008 – 7/2011 </i></small></p>
                    </div>

                    <div class="ps-4 mt-3">
                        <p><b> Primary School </b></p>
                        <p>Eyeanugie Primary School, Benin City, Edo State</p>
                        <p><small><i> 9/2004 – 7/2008 </i></small></p>
                    </div>

                    <h1 class="text-secondary mt-5">WORK EXPERIENCE</h1>
                    <div class="ps-4">
                        <p><b> Web Development Intern </b></p>
                        <p> Retenvo Limited </p>
                        <p><small><i> 15/07/2019 – 11/12/2019 </i></small></p>
                    </div>

                    <div class="ps-4 mt-3">
                        <p><b> Remote Web Developer </b></p>
                        <p> Flux Technology Africa </p>
                        <p><small><i> 01/07/2019 – 08/11/2019 </i></small></p>
                    </div>

                    <div class="ps-4 mt-3">
                        <p><b> Computer Engineering </b></p>
                        <p> Steve Computer Walehouse</p>
                        <p><small><i> 18/09/2018 – 28/11/2018 </i></small></p>
                    </div>
            
                    <div class="ps-4 mt-3">
                        <p><b> Graphics Designer </b></p>
                        <p>Crown Computers</p>
                        <p><small><i> 09/2018 – 12/2018 </i></small></p>
                    </div>

                    <h1 class="text-secondary mt-5">CERTIFICATES</h1>
                    <div class="ps-4">
                        <p><b> Bachelor of Engineering </b></p>
                        <p>(08/2021)</p>
                        <li><small><i> B.Engr in Computer Engineering </i></small></li>
                    </div>
                    <div class="ps-4 mt-3">
                        <p><b> National Examination Council (NECO) </b></p>
                        <p>(08/2014)</p>
                        <li><small><i> Senior Secondary Certificate Examination (SSCE) </i></small></li>
                    </div>
                    <div class="ps-4 mt-3">
                        <p><b> West African Examinations Council (WAEC) </b></p>
                        <p>(09/2013)</p>
                        <li><small><i> West African Senior School Certificate Examination (WASSCE) </i></small></li>
                    </div>
                    <div class="ps-4 mt-3">
                        <p><b> National Examination Council </b></p>
                        <p>(09/2011)</p>
                        <li><small><i> Junior Secondary Certificate Examination (JSCE) </i></small></li>
                    </div>
                    <div class="ps-4 mt-3">
                        <p><b> National Examination Council </b></p>
                        <p>(07/2008)</p>
                        <li><small><i> Basic Education Certification Examination (BECE) </i></small></li>
                    </div>
                </div>

                <div class="col">
                    <h1 class="text-secondary">SKILLS</h1>
                    
                    <ul class="list-group list-group-horizontal-lg ps-4 skills">
                        <!-- <li class="list-group-item"> Web development </li> -->
                        <li class="list-group-item"> WordPress </li>
                        <li class="list-group-item"> PHP </li>
                        <li class="list-group-item"> LARAVEL </li>
                        <li class="list-group-item"> JavaScript </li>
                        <li class="list-group-item"> Blogging </li>
                        <li class="list-group-item"> HTML </li>
                        <li class="list-group-item"> CSS </li>
                        <li class="list-group-item"> Bootstrap </li>
                    </ul> 

                    <h1 class="text-secondary mt-5">PERSONAL PROJECTS</h1>
                    <div class="ps-4">
                        <p><b> A Smart Shuttle Bus Seat Reservation System With Real-time Display of Arrival Time. </b></p>
                        <p>(04/2021 – 07/2021)</p>
                        <li><small><i>The App reduces the stress of reserving and paying for a seat in a shuttle bus, and also provides the bus management team
                             with the appropriate information and control they need regarding bus operations, drivers and passengers information. </i></small></li>
                    </div>

                    <div class="ps-4 pt-3">
                        <p><b> Uncommon Reporters </b></p>
                        <p>(08/2019 – 09/2019)</p>
                        <li><small><i>A news blog that focused on discussing the politics in Akwa Ibom, uyo.  </i></small></li>
                    </div>

                    <div class="ps-4 pt-3">
                        <p><b> Hall6 </b></p>
                        <p>(05/2019 – 06/2019)</p>
                        <li><small><i>A news, scholarship updates & dating blog for students, especially
                            for those in Uniuversity of Uyo. </i></small></li>
                    </div>

                    <div class="ps-4 pt-3">
                        <p><b> A Database Management of Food Commodities </b></p>
                        <p>(03/2019 – 04/2019)</p>
                        <li><small><i> Created a database management for the supply of food
                            commodities, using Microsoft Access. </i></small></li>
                    </div>
                    
                    <div class="ps-4 pt-3">
                        <p><b> Smartinfo </b></p>
                        <p>(01/2019 – 02/2019)</p>
                        <li><small><i>A blog that updates the latest opportunities such as scholarships, recruitments, employments and opportunities, etc.</i></small></li>
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

        <div class="bg-secondary" id="Contactsection">
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