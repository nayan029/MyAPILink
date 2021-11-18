<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Mail;
use App\Helpers\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class MailHelper
{

    public static function mail_send($email_message, $semail, $subject, $attachment = array())
    {

        $mail = new PHPMailer(true);
        try {
            //Server settings

            /*$mail->SMTPDebug = SMTP::DEBUG_SERVER;  */               // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'mail.aessg.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'enquiry@aessg.com';                     // SMTP username
            $mail->Password   = 'FPC031150i@';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer:: ENCRYPTION_STARTTLS` encouraged
            $mail->Port       = '465';          // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('enquiry@aessg.com', 'Spaerousell');
            /*$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
			$mail->addAddress('ellen@example.com');               // Name is optional*/

            $mail->addAddress($semail);

            $mail->addReplyTo('enquiry@aessg.com', 'Spaerousell');
            /*$mail->addCC('cc@example.com');
			$mail->addBCC('bcc@example.com');*/



            // Attachments
            if (count($attachment) > 0) {
                foreach ($attachment as $attachmentdata) {
                    $base_path = base_path('public/uploads/attachment/' . $attachmentdata->attachment);
                    $mail->addAttachment($base_path);         // Add attachments
                }
            }

            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $email_message;
            /*$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';*/

            $mail->send();
            /*echo 'Message has been sent';*/
        } catch (Exception $e) {
            /*echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";*/
        }
    }
}
