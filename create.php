<?php
    require_once 'authController/createAuth.php';
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

        <div class="container my-5">
            <div class="row shadow rounded">
                <div class="text-center">
                    <h1>CREATE YOUR RESUME</h1>
                    <h5 class="text-danger">All fileds are required</h5>
                </div>

                <form action="create.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="fname" class="form-label">First name</label>
                                <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter First Name" value="<?php echo htmlspecialchars($Fname); ?>" aria-describedby="fnamehelp">
                                <div id="fnamehelp" class="form-text text-danger"><?php echo $errors['Fname']; ?></div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="lname" class="form-label">Last name</label>
                                <input type="text" name="lname" id="lname" class="form-control" placeholder="Enter Last Name" value="<?php echo htmlspecialchars($Lname); ?>" aria-describedby="lnamehelp">
                                <div id="lnamehelp" class="form-text text-danger"><?php echo $errors['Lname']; ?></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email address" id="email" value="<?php echo htmlspecialchars($email); ?>" aria-describedby="emailhelp">
                                <div id="emailhelp" class="form-text text-danger"><?php echo $errors['email']; ?></div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <label for="Phone" class="form-label">Phone Number</label>
                                <input type="text" name="Phone" id="Phone" class="form-control" placeholder="Enter Phone Number" value="<?php echo htmlspecialchars($Phone); ?>" aria-describedby="Phonehelp">
                                <div id="Phonehelp" class="form-text text-danger"><?php echo $errors['Phone']; ?></div>
                            </div>
                        </div>                    
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="DOB" class="form-label">Date of Birth</label>
                                <input type="date" name="DOB" id="DOB" class="form-control" value="<?php echo htmlspecialchars($DOB); ?>" aria-describedby="DOBhelp">
                                <div id="DOBhelp" class="form-text text-danger"><?php echo $errors['DOB']; ?></div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="Address" class="form-label">Contact Address</label>
                                <input type="text" name="Address" class="form-control" placeholder="Enter address" id="Address" value="<?php echo htmlspecialchars($Address); ?>" aria-describedby="Addresshelp">
                                <div id="Addresshelp" class="form-text text-danger"><?php echo $errors['Address']; ?></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="Description" class="form-label">Description</label>
                                <input type="text" name="Description" class="form-control" placeholder="Tell us about yourself" id="Description" value="<?php echo htmlspecialchars($Description); ?>" aria-describedby="Descriptionhelp">
                                <div id="Descriptionhelp" class="form-text text-danger"><?php echo $errors['Description']; ?></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="University" class="form-label">University Attended</label>
                                <input type="text" name="University" id="University" class="form-control" placeholder="Name of Institution" value="<?php echo htmlspecialchars($University); ?>" aria-describedby="Universityhelp">
                                <div id="Universityhelp" class="form-text text-danger"><?php echo $errors['University']; ?></div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="Course" class="form-label">Course Studied</label>
                                <input type="text" name="Course" class="form-control" placeholder="Enter Course Studied" id="Course" value="<?php echo htmlspecialchars($Course); ?>" aria-describedby="Coursehelp">
                                <div id="Coursehelp" class="form-text text-danger"><?php echo $errors['Course']; ?></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="sss" class="form-label">Secondary School Attended</label>
                                <input type="text" name="sss" id="sss" class="form-control" placeholder="Name of Secondary School" value="<?php echo htmlspecialchars($sss); ?>" aria-describedby="ssshelp">
                                <div id="ssshelp" class="form-text text-danger"><?php echo $errors['sss']; ?></div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="Certificate" class="form-label">Certificate Obtained</label>
                                <input type="text" name="Certificate" class="form-control" placeholder="Certificate Obtained" id="Certificate" value="<?php echo htmlspecialchars($Certificate); ?>" aria-describedby="Certificatehelp">
                                <div id="Certificatehelp" class="form-text text-danger"><?php echo $errors['Certificate']; ?></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="Picture" class="form-label">Display Picture</label>
                                <input type="file" name="Picture" accept="image/*" class="form-control" id="Picture" title="Choose a Profile Picture" value="<?php echo htmlspecialchars($Picture); ?>" aria-describedby="Picturehelp">
                                <div id="Picturehelp" class="form-text text-danger"><?php echo $errors['Picture']; ?></div>
                            </div>
                        </div>
                    </div>

                    <div class="feedbackmessage">
                        <p class="text-danger"><?php echo $errors['dbError']; ?></p>
                        <p class="text-success"><?php echo $errors['success']; ?></p>
                    </div>
                                    
                    <div class="row my-3">
                        <div class="col d-grid gap-2">
                            <button type="submit" name="submitCreateForm" value="submitCreateForm" class="btn btn-primary"> Create </button>
                        </div>
                    </div>
                </form>

            </div>
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