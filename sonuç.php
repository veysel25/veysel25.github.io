<?php
header("Content-Type:text/html; charset=UTF-8");
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$mailGönder = new PHPMailer(true);

try {

    $mailGönder->SMTPDebug	 = 	0;
    $mailGönder->isSMTP();                                            
    $mailGönder->Host        = 'mail.gmail.com';                  
    $mailGönder->SMTPAuth   = true;                                   
    $mailGönder->Username   = 'mail.gmail.com';                     
    $mailGönder->Password   = 'VEYsel25';                               
    $mailGönder->SMTPSecure = "tls";        
    $mailGönder->Port       = 587;   
	$mailGönder->SMTPOptions= array(
									'ssl'=>[
										'verfy_peer'=>false,
										'verfy_peer_name'=>false,
										'allow_self_signed'=>true
										],
									);
 
    $mailGönder->setFrom('mail.smtp.gmail.com', 'Proje');
    $mailGönder->addAddress('veysel2529@gmail.com', 'veysel karani');  
    $mailGönder->addReplyTo('mail.gmail.com', 'Proje');
    $mailGönder->isHTML(true);                                  // Set email format to HTML
    $mailGönder->Subject = 'mail konusu';
    $mailGönder->isHTML('Mailin Gövdesi');
	//$mailGönder->Body	='Mailin Gövdesi';
	//$mailGönder->AltBody	='Mailin Gövdesi(HTML mail kabul etmeyen sunucular için)';"

    $mailGönder->send();
    echo 'Mail Gönderildi';
} catch (Exception $e) {
    echo  'mail gönderim hatası<br  />Hata Açıklaması :',  $mail->ErrorInfo;
}


     
?>