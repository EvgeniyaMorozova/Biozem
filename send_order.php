<meta charset="utf8"/>

<?php

error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

//print_r($_POST);
//echo '<br>';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->isHTML(true);

try {

    $mail->isSMTP();                                          
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->Username   = 'biozem.order@gmail.com';        
    $mail->Password   = ' ';  // password                            
    $mail->SMTPDebug  = 1;  
    $mail->SMTPAuth   = TRUE;
    $mailer->SMTPSecure = 'tls';
    $mail->Port       = 587;
   

$mail->setFrom('biozem.order@gmail.com'); 
$mail->addAddress(' ');  // to email

$name = $_POST['firstName'];
$lastname = $_POST['lastName'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$deliveryMethod = $_POST['deliveryMethod'];
$address = $_POST['address'];
echo "<br>";

$u5=$_POST['universal_5,5'];
$u5a=$_POST['amount_u5,5'];
$u25=$_POST['universal_25'];
$u25a=$_POST['amount_u25'];
$u50=$_POST['universal_50'];
$u50a=$_POST['amount_u50'];
$un=$_POST['universal_n'];
$una=$_POST['amount_un'];

$c5=$_POST['coniferous_5,5'];
$c5a=$_POST['amount_c5,5'];
$c25=$_POST['coniferous_25'];
$c25a=$_POST['amount_c25'];
$c50=$_POST['coniferous_50'];
$c50a=$_POST['amount_c50'];
$cn=$_POST['coniferous_n'];
$cna=$_POST['amount_cn'];

$kmn50=$_POST['KMN_50'];
$kmn50a=$_POST['amount_kmn50'];
$kmnn=$_POST['KMN_n'];
$kmnna=$_POST['amount_kmnn'];


echo "<br>";

$order= "<table>
          <tr>
              <td>Товар</td>
              <td></td>
              <td>количество</td>
          </tr>
          <tr>
              <td>универсальный 5,5</td>
              <td>$u5</td>
              <td>$u5a</td>
          </tr>
          <tr>
              <td>универсальный 25</td>
              <td>$u25</td>
              <td>$u25a</td>
          </tr>
          <tr>
              <td>универсальный 50</td>
              <td>$u50</td>
              <td>$u50a</td>
          </tr>
          <tr>
              <td>универсальный навалом</td>
              <td>$un</td>
              <td>$una</td>
          </tr>
          <tr>
              <td>для хвойных 5,5</td>
              <td>$c5</td>
              <td>$c5a</td>
          </tr>
          <tr>
              <td>для хвойных 25</td>
              <td>$c25</td>
              <td>$c25a</td>
          </tr>
          <tr>
              <td>для хвойных 50</td>
              <td>$c50</td>
              <td>$c50a</td>
          </tr>
          <tr>
              <td>для хвойных навалом</td>
              <td>$cn</td>
              <td>$cna</td>
          </tr>
          <tr>
              <td>кмн 50</td>
              <td>$kmn50</td>
              <td>$kmn50a</td>
          </tr>
          <tr>
              <td>кмн навалом</td>
              <td>$kmnn</td>
              <td>$kmnna</td>
          </tr>
          </table>";


    
$body='Имя: '.$name.' Фамилия: '.$lastname.' Тел: '.$tel.' E-mail: '.$email.' Доставка: '.$deliveryMethod.' Адрес: '.$address.'<br>Заказ: '.$order.'<br>';

echo $body;
echo "<br>";

$mail->Subject = 'Новый заказ';
$mail->Body=$body;

 $send_mail = $mail->send();
 
 if($send_mail ) { echo 'сообщение успешно отправлено'; }
  
} catch (Exception $e) {
    
  echo "при отправке сообщения возникли ошибки. Mailer Error: {$mail->ErrorInfo}";
}
  
?> 