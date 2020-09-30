<?php
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $emailFrom = $_POST['email'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];
        $message = $_POST['message'];


        $mailTo = 'er.anmolgupta01@gmail.com';
        $subject = 'New Form Submission';
        $email_body = "User Name: ".$name.".\n".
                        "User Email: ".$email.".\n".
                         "User Message: ".$message.;
        
        $headers="From: ".$emailFrom;

        mail($to, $subject, $message, $email_body, $headers)

        if(mail($to, $subject, $message, $headers)){
            echo "<h2>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!<h2>
        }
        else{
            echo "Something Went Wrong!"
        }


    }

?>
