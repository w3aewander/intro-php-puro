<?php
/**
 *  Fachada para e-mail
 *  @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 *  @version 1.0
 *
 */

namespace App\Libs;

class WSMailerFacade extends WSMailer
{

    public static function From(string $fromAddress, string $fromName = "")
    {
        echo $fromAddress;
        return self::setFrom($fromAddress, $fromName);
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
        $mail->SMTPSecure = 'tls';
        // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;
        // TCP port to connect to
        $mail->setFrom('wander.silva@gmail.com', 'Enviando para testes');
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
