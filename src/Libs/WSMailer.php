<?php

namespace App\Libs;

use PHPMailer\PHPMailer\PHPMailer as PHPMailer;
use PHPMailer\PHPMailer\SMTP as SMTP;
use PHPMailer\PHPMailer\Exception;

class WSMailer  {
    
    protected object $emailer;
    
    public function __construct(){


    $this->mailer = new PHPMailer(); 
    //Server settings
    $this->mailer->SMTPDebug =  1;                    //Enable verbose debug output
    $this->mailer->isSMTP(true);     
    $this->mailer->encryption = 'tls';                                       //Send using SMTP
    //$this->mailer->Host       = $_ENV('SMTP_SERVER_HOST');             //Set the SMTP server to send through
    //$this->mailer->SMTPAuth   = $_ENV('SMTP_AUTH');                    //Enable SMTP authentication
    //$this->mailer->Username   = $_ENV('SMTP_USERNAME');                //SMTP username
    //$this->mailer->Password   = $_ENV('SMTP_PASSWORD');                               //SMTP password
    //$this->mailer->SMTPSecure = $_ENV['SMTP_SECURE'];            //Enable implicit TLS encryption
    //$this->mailer->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    
    }


/**
     * Function to send an email to a specific email address
     * with provided receiver name as well as all the content
     * of the email
     * Use the PHPMailer library
     * return error message on failure
     *
     * $addr is the receiver email address
     * $name is the receiver name
     * $subject is the Subject of the email
     * $body is the main content of the email in HTML format
     * $altbody is the alternate content of the email, use in
     * case receiver's browser doesn't support HTML email
     */
    public function sendMail($addr, $name, $subject, $body, $altbody)
    {
        $mail = new PHPMailer();
        //$mail->SMTPDebug = 3;    // Enable verbose debug output
        $mail->CharSet = 'UTF-8';

        $mail->SMTPSecure = 'tls';
        // Encode using Unicode
        $mail->isSMTP();
        // Set mailer to use SMTP
        $mail->Host = $_ENV['SMTP_SERVER_HOST'];
        // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;
        // Enable SMTP authentication
        $mail->Username = $_ENV['SMTP_USERNAME'];
        // SMTP email username
        $mail->Password = $_ENV['SMTP_PASSWORD'];
        // SMTP password
        
        // Enable TLS encryption, `ssl` also accepted
        $mail->Port = $_ENV['SMTP_SERVER_PORT'];
        // TCP port to connect to
        $mail->setFrom('wmoshop@wmomodavix.site', 'WMO Moda Vix');
        $mail->addAddress($addr, $name);
        $mail->isHTML(true);
        // Set email format to HTML
        $mail->Subject = $subject;
        // Set email subject
        $mail->Body = $body;
        // Set email body
        $mail->AltBody = $altbody;
        // Set email alternate body
        // Output error message in case of failure
        if (!$mail->send()) {
            return $mail->ErrorInfo;
        }
    }
} 