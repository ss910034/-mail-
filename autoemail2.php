<?php
 // require_once('connectVar.php');
	// $maileru=$_POST['mailer'];
	// $mailu=$_POST['mailermail'];
	// $cc=$_POST['two'];
	// $top=$_POST['to'];
    require_once('PHPMailerAutoload.php'); //引入phpMailer 記得將路徑換成您自己的path
   // $sql="SELECT * FROM `light` WHERE 1";
   // $result=$conn->query($sql);
   // while($row=mysqli_fetch_row($result))
  //  {
    $mail= new PHPMailer(); //初始化一個PHPMailer物件
    $mail->IsSMTP();
    $mail->SMTPAuth=true;	    
    $mail->Host = "smtp.gmail.com"; //SMTP主機 (這邊以gmail為例，所以填寫gmail stmp)
    $mail->Username = "ss910034@gmail.com"; //您的 gamil 帳號
    $mail->Password = "m30460074"; //您的 gmail 密碼
    $mail->SMTPSecure = "ssl"; // SSL連線 (要使用gmail stmp需要設定ssl模式) 
    $mail->Port = 465; //Gamil的SMTP主機的port(Gmail為465)。
    $mail->CharSet = "utf-8"; //郵件編碼
   $mail->SMTPDebug =4;    
    //$mail->AddBCC($cc); //設定 密件副本收件人
    $mail->From = "ss910034@gmail.com"; //寄件者信箱
    $mail->FromName ="This is me"; //寄件者姓名
    $mail->AddAddress("ms910034@g-mail.nsysu.edu.tw","Siao");
      $mail->IsHTML(true); //郵件內容為html
     // $mail->addAttachment('Invitation for '.trim($row[1]).'.doc'); //添加附件(若不需要則註解掉就好)
      $mail->Subject = "測試在測試"; //郵件標題
      $mail->Body ="
      <!DOCTYPE html PUBLIC '-//W3C//DTD HTML 4.01//EN' 'https://www.w3.org/TR/html4/strict.dtd'>
      <html lang='zh-TW'><head>
      <meta http-equiv=Content-Type content='text/html; charset=UTF-8'>
      <title>邀請函</title>
  </head>
  <body style='width: 100%;'>
    <h2>Hi I am Mike.</h2>
  </body>
  </html>
                  ";

      if(!$mail->send()) {
          echo '信件發送失敗!!';    
          echo 'Mailer Error: ' . $mail->ErrorInfo;
      } else {    
          echo 'Mail has delivered successfully<br>';
      }
   // } 
?>
