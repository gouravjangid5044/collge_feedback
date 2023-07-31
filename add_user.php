<?php
session_start();
if(!isset($_SESSION['mail1']))
{
    header('location:dashboard_login.php');
}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true);
date_default_timezone_set('Asia/Kolkata');
?>
<?php
$con = mysqli_connect("localhost", "root", "", "college");
if($_SERVER['REQUEST_METHOD']=='POST')
{

    $user = mysqli_real_escape_string($con,$_POST['user']);

    $query1 = "SELECT * FROM `faculty` WHERE email='$user'";
    $sql1 = mysqli_query($con, $query1);
    $rows = mysqli_num_rows($sql1);
    if($rows==0)
    {
        
        try {           
            $mail->isSMTP();                                           
            $mail->Host       = 'smtp.gmail.com';                     
            $mail->SMTPAuth   = true;                                   
            $mail->Username   = 'gouravjangid305044@gmail.com';                    
            $mail->Password   = 'ipxopdohrtlasgim';                             
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
            $mail->Port       = 465;                                    
        
          
            $mail->setFrom('gouravjangi305044@gmail.com', 'Gourav');
        
            $mail->addAddress($user);             
        
        
            $mail->isHTML(true);
            $mail->Subject = 'Setting Password For Email ID';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $token = md5(rand());
            $curr_date = date('Y-m-d H:i:s',strtotime('+300 second'));
            $query3 = mysqli_query($con,"INSERT INTO `faculty` (`id`,`email`,`password`,`time`) VALUES (NULL,'$user','$token','$curr_date')");
            $mail->Body = '<div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
            <div style="margin:50px auto;width:70%;padding:20px 0">
              <p style="font-size:1.1em">Hi,</p>
              <p>Use the following Link to add password. Link is valid for 5 minutes</p>
              <h2 style="background: #00466a;margin: 0 auto;width: max-content;padding: 0 10px;color: #fff;border-radius: 4px;"><a href="https://localhost/college1/setting_pass.php?token='.$token.'&user='.$user.'" target="_blank">Click Me</a></h2>
              <p style="font-size:0.9em;">Regards,<br>Gourav</p>
              <hr style="border:none;border-top:1px solid #eee" />
              <div style="float:right;padding:8px 0;color:#aaa;font-size:0.8em;line-height:1;font-weight:300">
              </div>
            </div>
          </div>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $check=$mail->send();
            
            if($check&&$query3)
            {
                // echo 'Message has been sent';
                echo "<script>alert('Link Has been sent to user 👍'); window.location.href='operations.php';</script>";

            }
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
    else
    {
        echo "<script>alert('User already present❗'); window.location.href='operations.php'</script>";
    }
}
?>