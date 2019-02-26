<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require './PHPMailer/src/Exception.php';
    require './PHPMailer/src/PHPMailer.php';
    require './PHPMailer/src/SMTP.php';

    $mail = new PHPMailer();

    try
    {
        $name = $_POST["name"];
        $type = $_POST["type"];
        $email = $_POST["email"];
        $description = $_POST["description"];
        $to = "mail@webxstudio.in";
        $subject = "Contact for $type";
        $message = "<html>
        <head>
        <title>Contact for $type</title>
        </head>
        <body>
        <p>name: $name</p>
        <p>email: $email</p>
        <p>Description: </br>$description</p>
        </body>
        </html>";

        $mail->IsSMTP();
        $mail->Host       = 'sg06.tmd.cloud';

        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;
        $mail->SMTPDebug  = 0;
        $mail->SMTPAuth   = true;

        $mail->Username   = 'enquiry@webxstudio.in';
        $mail->Password   = 'enquiry@webxstudio';

        $mail->SetFrom('enquiry@webxstudio.in', 'Webxstudio');
        $mail->AddReplyTo('no-reply@webxstudio.in','no-reply');
        $mail->Subject    = $subject;
        $mail->MsgHTML($message);

        $mail->AddAddress('mail@webxstudio.in', 'Enquiry');

        // $mail->AddAttachment($fileName);
        $mail->send();
        $msg = "Thank you for contacting us. We'll get to you as soon as possible";
    }
    catch (Exception $e) {
        $msg = 'Message could not be sent. Mailer Error: '. $mail->ErrorInfo;
    }
    return $msg;
?>