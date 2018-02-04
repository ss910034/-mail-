<?php 
		$Name=$_GET['name'];
  //   	header("Content-type: text/html; charset=utf8"); //頁面編碼
		// header("Content-Type:application/msword");   //將此html頁面轉成word
		header('Content-type:application/force-download'); //告訴瀏覽器 為下載 
		header('Content-Transfer-Encoding: Binary'); //編碼方式
		header("Content-Disposition:attachment;filename=".mb_convert_encoding("Invitation for $Name","gbk","utf8").".doc");   //設定word檔名
		header("Pragma:no-cache");
		header("Expires:0");
?>  
<!DOCTYPE html PUBLIC '-//W3C//DTD HTML 4.01//EN' 'https://www.w3.org/TR/html4/strict.dtd'>
    <html lang='zh-TW'><head>
    <meta http-equiv=Content-Type content='text/html; charset=UTF-8'>
    <title>邀請函</title>
</head>
<body style='width: 100%;'>
<table border='0' cellspacing='0' cellpadding='0' align='center' style='font-family: Times New Roman;width:600px;display:block;margin:auto;'>
    <tr style="font-family: Calibri">
        <td><img src='C:/wamp64/www/image001.png' style='display: inline-block;width:50.8px;height: 30.3px;'></td>
        <td style='padding: 0pt 0pt 0pt 0pt; display: inline-block;text-align: left;'> 
          <strong><span style='color:black; '>Secretariat      of OPTIC 2017</span></strong><br>
          <strong><span style='color:black; '>Department      of Photonics</span></strong><br>
          <strong><span style='color:black; '>National      Sun Yat-sen University</span></strong><br>
          <strong><span style='color:black; '>No.      70 Lein-Hai Road, Kaohsiung, </span></strong><br>
          <strong><span style='color:black; '>Taiwan      804, R. O. C.</span></strong><br>
          <strong><a href='Tel:+886-7-525-2000'>Tel:+886-7-525-2000</a> ext 4451-4452</strong><br>
          <strong>Fax:+886-7-525-4499</strong><br>
          <strong>E-mail:      optic2017@mail.nsysu.edu.tw</strong></td>
    </tr>
    <tr>
    	<br>
        <td colspan='2'>
            <div align='center' style='text-align:center;'><strong><span style='font-size:22.0pt; color:#C00000;font-family: Calibri'>OFFICIAL  INVITATION LETTER</span></strong></div>
            <br>
        </td>
    </tr>   
    <tr>
        <td colspan='2' style='font-size:14.0pt; '>
            <p align='right' style='text-align:right;'><span style='font-size:14.0pt; color:#0D0D0D; '>&nbsp;</span><span style='font-family:'Times New Roman',serif; font-size:14.0pt; color:#0D0D0D; '>2017.03</span></p>
        <span style='font-family:'Times New Roman',serif; font-size:14.0pt; color:#0D0D0D; '>Dear Prof. <?php echo $_GET['name']; ?></span>
        <span style='font-family:'Times New Roman',serif; font-size:14.0pt; color:#0D0D0D; '>&nbsp;</span>
        <p style='text-align:justify;text-justify:inter-ideograph;'><span style='font-family:'Times New Roman',serif; font-size:14.0pt; color:#0D0D0D; '>The Optics &amp; Photonics Taiwan, the International Conference  (OPTIC 2017) has served as the largest annual meeting for the significant progress  of research and development on optics and photonics in Taiwan. In 2017, OPTIC  will be held in Kaohsiung, Taiwan from December 7 to December 9. On behalf of  the conference organizing committee, it is our pleasure and honor to invite you  to join the technical program committee of the subsession, &ldquo;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_GET['session']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &rdquo;. The main purpose for this committee is to :</span></p>
        <ol>
          <li><span style='font-family:'Times New Roman',serif; font-size:14.0pt; color:#0D0D0D; '>review the contributed  papers</span></li>
          <li><span style='font-family:'Times New Roman',serif; font-size:14.0pt; color:#0D0D0D; '>organize the sections </span></li>
          <li><span style='font-family:'Times New Roman',serif; font-size:14.0pt; color:#0D0D0D; '>select the candidates of  best student papers</span></li>
        </ol>
        <br><br>
        <p style='text-align:justify;text-justify:inter-ideograph;'><span style='font-family:'Times New Roman',serif; font-size:14.0pt; color:#0D0D0D; '>Sincerely yours,</span></p></div>
          <div style='text-align:justify;text-justify:inter-ideograph;font-size:12.0pt;'><strong>Program      Committee Chair</strong></div>
          <div style='text-align:justify;text-justify:inter-ideograph;font-size:12.0pt;'>Yi-Jen Chiu</div>
          <div style='text-align:justify;text-justify:inter-ideograph;'><img src='C:/wamp64/www/image004_0000.png' alt='1' width='174' height='50' /></div>
          </td>
    </tr>
        <tr>
            <td colspan='2' align='center'>
                <p><img src='C:/wamp64/www/image008_0000.png' alt='1' width='600' height='170' style=''/></p>
            </td>
    </tr>
</table>
</body>
</html>