<?php


function SendEmail(){
    
  // Please specify your Mail Server - Example: mail.yourdomain.com.
  ini_set("SMTP","ssl://smtp.sfr.fr");
  
  // Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
  ini_set("smtp_port","465");
  
  // Please specify the return address to use
  ini_set('sendmail_from', 'diraneh1@gmail.com');
 
    $statusMsg = '';
    $msgClass = '';
    if(isset($_POST['submit'])){
        // Get the submitted form data
        $email = $_POST['email'];
        $name = $_POST['name'];
        $message = $_POST['message'];
        
        // Check whether submitted data is not empty
        if( !empty($email) && !empty($name)  && !empty($message)){
            
            
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                $statusMsg = 'Please enter your valid email.';
                $msgClass = 'errordiv';
            }else{
                // Recipient email
                $toEmail = 'diraneh1@gmail.com';
                $emailSubject = 'Contact Request Submitted by '.$name;
                $htmlContent = '<h2>Contact Request Submitted</h2>
                    <h4>Name</h4><p>'.$name.'</p>
                    <h4>Email</h4><p>'.$email.'</p>
                   
                    <h4>Message</h4><p>'.$message.'</p>';
                
                // Set content-type header for sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                
                // Additional headers
                $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";
                
                // Send email
                if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
                    $statusMsg = 'Your contact request has been submitted successfully !';
                    $msgClass = 'succdiv';
                 
                }else{
                    $statusMsg = 'Your contact request submission failed, please try again.';
                    $msgClass = 'errordiv';
                }
            }
        }else{
            $statusMsg = 'Please fill all the fields.';
            $msgClass = 'errordiv';
        }
    }
    
    
}



?>









