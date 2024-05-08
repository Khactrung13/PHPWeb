<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    

    require_once('phpmailer/Exception.php');
    require_once('phpmailer/PHPMailer.php');
    require_once('phpmailer/SMTP.php');

    function sendMail($to,$subject,$content){    
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'khactrung060801@gmail.com';                     //SMTP username
            $mail->Password   = 'upkgfmgpjtzdhyqw';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('khactrung060801@gmail.com', 'Mailer');
            $mail->addAddress($to);     //Add a recipient

            
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $content;

            $mail->send();
            //echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
            }
    //sendMail('20T1020607@husc.edu.vn','Test mail','Test');

?>