<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require './PHPMailer/src/Exception.php';
    require './PHPMailer/src/PHPMailer.php';
    require './PHPMailer/src/SMTP.php';

    $mail = new PHPMailer();

    if(isset($_POST["submit"]))
    {
        try
        {
            $name = $_POST["name"];
            $type = $_POST["type"];
            $email = $_POST["email"];
            $number = $_POST["number"];
            $resume = $_FILES["resume"];
            $to = "mail@webxstudio.in";
            $subject = "Contact for $type";
            $message = "<html>
            <head>
            <title>Applying for $type</title>
            </head>
            <body>
            <p>name: $name</p>
            <p>email: $email</p>
            <p>phone no: $number</p>
            </body>
            </html>";

            $mail->IsSMTP();
            $mail->Host       = 'sg06.tmd.cloud';

            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;
            $mail->SMTPDebug  = 0;
            $mail->SMTPAuth   = true;

            $mail->Username   = 'works@webxstudio.in';
            $mail->Password   = 'works@webxstudio';

            $mail->SetFrom('works@webxstudio.in', 'Rahul Bharati');
            $mail->AddReplyTo('no-reply@webxstudio.in','no-reply');
            $mail->Subject    = $subject;
            $mail->MsgHTML($message);

            $mail->AddAddress('mail@webxstudio.in', 'Resume');

            $mail->AddStringAttachment(file_get_contents($resume["tmp_name"]), $resume["name"]);
            if($mail->send())
            {
                echo "Thank you for contacting us. We'll get to you as soon as possible";
            }
        }
        catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }
?>