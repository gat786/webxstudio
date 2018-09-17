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
            $mail->Host       = 'smtp.gmail.com';

            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;
            // $mail->SMTPDebug  = 1;
            $mail->SMTPAuth   = true;

            $mail->Username   = 'rahulrbharati@gmail.com';
            $mail->Password   = '72485@Me';

            $mail->SetFrom('rahulrbharati@gmail.com', 'Rahul Bharati');
            $mail->AddReplyTo('no-reply@webxstudio.in','no-reply');
            $mail->Subject    = $subject;
            $mail->MsgHTML($message);

            $mail->AddAddress('rahulrbharati@gmail.com', 'title1');

            // $mail->AddAttachment($fileName);
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