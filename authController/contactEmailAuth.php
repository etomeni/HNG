<?php
    // require_once 'classes.php';
    // $database = new Database;

    $name = $email = $message = "";
    $errors = array('name'=>'', 'email'=>'', 'message'=>'', 'success'=>'', 'dbError'=>'');

    if(isset($_POST['submitContactForm'])) {

        $name = $_POST['Name'];
        $email = $_POST['Email'];
        $message = $_POST['message'];

        // check first name
        if(empty($name)){
            $errors['name'] = 'Your name is required';
        } else{
            if(!preg_match('/^[a-zA-Z\s]+$/', $name)){
                $errors['name'] = 'Name must be letters and space only';
            }
        }

        // check email
        if(empty($email)){
            $errors['email'] = 'Your email address is required';
        } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = 'Email must be a valid email address';
        }

        if(empty($message)){
            $errors['message'] = 'A message is required';
        }

        if(array_filter($errors)){
            // echo 'There are errors in the form';
        } else {
            unset($_POST['submitContactForm']);
           
            $datas = [
                "name" => $name,
                "email" => $email,
                "message" => $message
            ];    
            $email_from = 'sundaywht@gmail.com';

            $email_subject = "New Form submission";
        
            $email_body = "You have received a new message from the user $name.\n". "\nHere is the message:\n $message.";



            $to = "yourname@yourwebsite.com";

            $headers = "From: $email_from \r\n";
          
            $headers .= "Reply-To: $email \r\n";
          
            mail($to,$email_subject,$email_body,$headers);
          
            function IsInjected($str)
            {
                $injections = array('(\n+)',
                       '(\r+)',
                       '(\t+)',
                       '(%0A+)',
                       '(%0D+)',
                       '(%08+)',
                       '(%09+)'
                       );
                           
                $inject = join('|', $injections);
                $inject = "/$inject/i";
                
                if(preg_match($inject,$str))
                {
                  return true;
                }
                else
                {
                  return false;
                }
            }
            
            if(IsInjected($email))
            {
                echo "Bad email value!";
                exit;
            }
          

        }
    }

?>