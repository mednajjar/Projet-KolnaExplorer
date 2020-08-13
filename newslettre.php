<?php
    if(isset($_POST['abonner']))
    {
   
        $email = htmlspecialchars(stripslashes(trim($_POST['email']))); // Get Email Value
        
      
          if(!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)){
            $email_error = 'Invalid email';
          }
         
        $to = "najjarmedd@gmail.com"; // You can change here your Email
        $subject = "You have a email subscriber from kolna Explorer website"; // This is your subject
         
        // HTML Message Starts here
        $message ="
        <html>
            <body>
                <table style='width:600px;'>
                    <tbody>
                     
                        <tr>
                            <td style='width:150px'><strong>Email ID: </strong></td>
                            <td style='width:400px'>$email</td>
                        </tr>
                    </tbody>
                </table>
            </body>
        </html>
        ";
        // HTML Message Ends here
         
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 
        // More headers
        $headers .= 'From: Admin <najjarmedd@gmail.com>' . "\r\n"; // Give an email id on which you want get a reply. User will get a mail from this email id
        // $headers .= 'Cc: najjarmedd@gmail.com' . "\r\n"; // If you want add cc
        // $headers .= 'Bcc: najjarmedd@gmail.com' . "\r\n"; // If you want add Bcc
        
         
        if(mail($to,$subject,$message,$headers)&& !isset($email_error)){
            // Message if mail has been sent
            echo "<script>
                    alert('Mail has been sent Successfully.');
                </script>";
        }
 
        else{
            // Message if mail has been not sent
            echo "<script>
                    alert('Email failed to sent');
                </script>";
        }
       
    }
?>