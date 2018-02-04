<?php
  require_once('connectVar.php');
  class word{ 
    function start()
    {
      ob_start();
      echo '<html xmlns:o="urn:schemas-microsoft-com:office:office"
      xmlns:w="urn:schemas-microsoft-com:office:word"
      xmlns="http://www.w3.org/TR/REC-html40">';
    }
    function save($path)
    {
      echo "</html>";
      $data = ob_get_contents();
      ob_end_clean(); 
      $this->wirtefile ($path,$data);
    } 
    function wirtefile ($fn,$data)
    {
      $fp=fopen($fn,"wb");
      fwrite($fp,$data);
      fclose($fp);
    }
  }
  $html = " 
  <head>
    <meta http-equiv=Content-Type content='text/html; charset=UTF-8'>
    <title>邀請函</title>
</head>
<body style='width: 100%;'>
<table border='0' cellspacing='0' cellpadding='0' align='center' style='font-family: Times New Roman;width:600px;display:block;margin:auto;'>
    <tr style='font-family: Calibri'>
        <td><img src='../image001.png' style='display: inline-block;width:50.8px;height: 30.3px;'></td>
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
        <span style='font-family:'Times New Roman',serif; font-size:14.0pt; color:#0D0D0D; '>Dear Prof.</span>
        <span style='font-family:'Times New Roman',serif; font-size:14.0pt; color:#0D0D0D; '>&nbsp;</span>
        <p style='text-align:justify;text-justify:inter-ideograph;'><span style='font-family:'Times New Roman',serif; font-size:14.0pt; color:#0D0D0D; '>The Optics &amp; Photonics Taiwan, the International Conference  (OPTIC 2017) has served as the largest annual meeting for the significant progress  of research and development on optics and photonics in Taiwan. In 2017, OPTIC  will be held in Kaohsiung, Taiwan from December 7 to December 9. On behalf of  the conference organizing committee, it is our pleasure and honor to invite you  to join the technical program committee of the subsession, &ldquo;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &rdquo;. The main purpose for this committee is to :</span></p>
        <ol>
          <li><span style='font-family:'Times New Roman',serif; font-size:14.0pt; color:#0D0D0D; '>review the contributed  papers</span></li>
          <li><span style='font-family:'Times New Roman',serif; font-size:14.0pt; color:#0D0D0D; '>organize the sections </span></li>
          <li><span style='font-family:'Times New Roman',serif; font-size:14.0pt; color:#0D0D0D; '>select the candidates of  best student papers</span></li>
        </ol>
        <br><br>
        <p style='text-align:justify;text-justify:inter-ideograph;'><span style='font-family:'Times New Roman',serif; font-size:14.0pt; color:#0D0D0D; '>Sincerely yours,</span></p></div>
          <div style='text-align:justify;text-justify:inter-ideograph;font-size:12.0pt;'><strong>Program      Committee Chair</strong></div>
          <div style='text-align:justify;text-justify:inter-ideograph;font-size:12.0pt;'>Yi-Jen Chiu</div>
          <div style='text-align:justify;text-justify:inter-ideograph;'><img src='../image004_0000.png' alt='1' width='174' height='50' /></div>
          </td>
    </tr>
        <tr>
            <td colspan='2' align='center'>
                <p><img src='../image008_0000.png' alt='1' width='600' height='170' style=''/></p>
            </td>
    </tr>
</table>
</body>
  "; 
 
//批量生成 
    $word = new word(); 
    $word->start(); 
    //$html = "aaa".$i; 
    $wordname = 'Invitation for.doc'; 
    echo $html; 
    $word->save($wordname); 
    ob_flush();//每次执行前刷新缓存 
    flush(); 
?>
