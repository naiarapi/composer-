 
<?php
                                            /*Instalar composer 
                                            php -r "eval('?>'.file_get_contents('https://getcomposer.org/installer'));"
                                            php composer.phar : comandos a poder utilizar 
                                            composer update: crear librerias de mailing*/
                                            

   //acceder a las librerias 
   require("vendor/autoload.php");
   require ("vendor/phpmailer/phpmailer/PHPMailerAutoload.php");
    require ("vendor/phpmailer/phpmailer/class.phpmailer.php");
   

    $clave = $_GET['password'];
    
    $mail = new PHPMailer;
    
    //Enable SMTP debugging. 
   $mail->SMTPDebug = 2;                               
    //Set PHPMailer to use SMTP.
    $mail->isSMTP();            
    //Set SMTP host name                          
    $mail->Host = "smtp.gmail.com";
    //Set this to true if SMTP host requires authentication to send email
    $mail->SMTPAuth = true;                          
    //Provide username and password     
    $mail->Username = "npadulesir15dw@ikzubirimanteo.com";                 
    $mail->Password = $clave;                           
    //If SMTP requires TLS encryption then set it
    $mail->SMTPSecure = "tls";                           
    //Set TCP port to connect to 
    $mail->Port = 587;                                   
    
    $mail->From = "npadulesir15dw@ikzubirimanteo.com";
    $mail->FromName = "Naiara Padules";
    
    $mail->addAddress("ederferte@gmail.com", "Recepient Name");
    
    $mail->isHTML(true);
    
    $mail->Subject = "Composer Prueba";
    $mail->Body = "<i>BIENVENIDO!!!!</i>";
    $mail->AltBody = "Prueba para la validez del mailing";
    
    if(!$mail->send()) 
    {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } 
    else 
    {
        echo "Message has been sent successfully";
    }

?>