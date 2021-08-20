<?php

    require_once 'classes.php';
    $database = new Database;

    $Fname = $Lname = $email = $Phone = $DOB = $Address = $Description = $University = $Course = 
    $sss = $Certificate = $Picture = "";

    $errors = array('Fname'=>'', 'Lname'=>'', 'email'=>'', 'Phone'=>'', 'DOB'=>'', 
                    'Address'=>'', 'Description'=>'', 'University'=>'', 'Course'=>'', 
                    'sss' =>'', 'Certificate'=>'', 'Picture'=>'', 'success'=>'', 'dbError'=>''
                    );

    if(isset($_POST['submitCreateForm'])) {

        $Fname = $_POST['fname'];
        $Lname = $_POST['lname'];
        $email = $_POST['email'];
        $Phone = $_POST['Phone'];
        $DOB = $_POST['DOB'];
        $Address = $_POST['Address'];
        $Description = $_POST['Description'];
        $University = $_POST['University'];
        $Course = $_POST['Course'];
        $sss = $_POST['sss'];
        $Certificate = $_POST['Certificate'];
        $Picture = $_FILES['Picture'];

        // check first name
        if(empty($Fname)){
            $errors['Fname'] = 'Your First name is required';
        } else{
            if(!preg_match('/^[a-zA-Z\s]+$/', $Fname)){
                $errors['Fname'] = 'First name must be letters and space only';
            }
        }

        // check last name
        if(empty($Lname)){
            $errors['Lname'] = 'Your Last name is required';
        } else{
            if(!preg_match('/^[a-zA-Z\s]+$/', $Lname)){
                $errors['Lname'] = 'Last name must be letters and space only';
            }
        }

        // check email
        if(empty($email)){
            $errors['email'] = 'Your email address is required';
        } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = 'Email must be a valid email address';
        }

        // check Phone
        if(empty($Phone)){
            $errors['Phone'] = 'Your Phone name is required';
        } elseif (!preg_match('/^[\+0-9\-]*$/', $Phone)){
            $errors['Phone'] = 'Speial characters not allowed';
        }

        // check DOB 
        if(empty($DOB)){
            $errors['DOB'] = 'Your Date of Birth name is required';
        }

        // check Address 
        if(empty($Address)){
            $errors['Address'] = 'Your Address name is required';
        } else{
            if(!preg_match('/^[0-9a-zA-Z\,\.\(\)\-\+\s]*$/', $Address)){
                $errors['Address'] = 'Special characters not allowed';
            }
        }

        // check Description 
        if(empty($Description)){
            $errors['Description'] = 'Your Description name is required';
        } else{
            if(!preg_match('/^[0-9a-zA-Z\,\.\-\?\+\*\(\)\&\%\@\#\"\/\s]*$/', $Description)){
                $errors['Description'] = 'Must be letters and space only';
            }
        }

        // check University 
        if(empty($University)){
            $errors['University'] = 'Your University name is required';
        } else{
            if(!preg_match('/^[0-9a-zA-Z\,\.\-\+\s]*$/', $University)){
                $errors['University'] = 'Must be letters and space only';
            }
        }

        // check Course 
        if(empty($Course)){
            $errors['Course'] = 'Your Course name is required';
        } else{
            if(!preg_match('/^[0-9a-zA-Z\,\.\-\+\s]*$/', $Course)){
                $errors['Course'] = 'Must be letters and space only';
            }
        }

        // check sss 
        if(empty($sss)){
            $errors['sss'] = 'Your secondary school name is required';
        } else{
            if(!preg_match('/^[0-9a-zA-Z\,\.\-\+\s]*$/', $sss)){
                $errors['sss'] = 'Must be letters and space only';
            }
        }

        // check Certificate 
        if(empty($Certificate)){
            $errors['Certificate'] = 'Your secondary school name is required';
        } else{
            if(!preg_match('/^[0-9a-zA-Z\,\.\-\+\s]+$/', $Certificate)){
                $errors['Certificate'] = 'Must be letters and space only';
            }
        }

        // check image upload
        if (empty($_FILES['Picture']['tmp_name'])) {
            $errors['Picture'] = 'Profile Picture required';
        } else {
            $imgName = $Fname.$Lname.date("d-m-Y-h-i-sa");
            $imgName = preg_replace('/[\/]/s', '', $imgName);
            $extension = pathinfo($_FILES["Picture"]["name"], PATHINFO_EXTENSION);
            $imgName = $imgName.'.'.$extension;
            $imgLocation = './assets/img/resume/' . $imgName;
        }

        if(array_filter($errors)){
            // echo 'There are errors in the form';
            // $errors['dbError'] = 'There are errors in the form';
        } else {
            unset($_POST['submitCreateForm']);

            if (!move_uploaded_file($_FILES['Picture']['tmp_name'], $imgLocation)) {
                $errors['Picture'] = 'Failed to upload Picture';
            }

            if(!array_filter($errors)){

                $datas = [
                    "Fname" => $Fname,
                    "Lname" => $Lname,
                    "email" => $email,
                    "Phone" => $Phone,
                    "DOB" => $DOB,
                    "Address" => $Address,
                    "Description" => $Description,
                    "University" => $University,
                    "Course" => $Course,
                    "sss" => $sss,
                    "Certificate" => $Certificate,
                    "Picture" => $imgName
                ];
                
                if ($database->insertdb("resume", $datas)) {
                    
                    session_start();
                    
                    // $_SESSION['Pid'] = $Pid;
                    $_SESSION['Fname'] = $Fname;
                    $_SESSION['Lname'] = $Lname;
                    $_SESSION['email'] = $email;
                    $_SESSION['Phone'] = $Phone;
                    $_SESSION['DOB'] = $DOB;
                    $_SESSION['Address'] = $Address;
                    $_SESSION['Description'] = $Description;
                    $_SESSION['University'] = $University;
                    $_SESSION['Course'] = $Course;
                    $_SESSION['sss'] = $sss;
                    $_SESSION['Certificate'] = $Certificate;
                    $_SESSION['Picture'] = $imgName;
    
                    $_SESSION['success'] = 'Registration successful, here is your resume!';
    
                    header('location: resume.php');
                    // exit();
    
                } else {
                    $errors['dbError'] = 'error saving data to the database, thus unable to create resume';
                }

            }
            
        }
    };
    
?>