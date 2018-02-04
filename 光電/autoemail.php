<?php
$sCharset = 'big5';

//@ 要送給誰
$sMailTo = 'ss910034@gmail.com';
//@ 誰送的
$sMailFrom = 'ss910034@gmail.com';
//@ 信件的主旨
$sSubject = "This is an MIME/HTML format email";
//@ 信件內容
$sMessage = "
<h1>Hello everyone!</h1>
";

//@ 為了傳送 HTML 格式的 email, 我們需要設定 MIME 版本和 Content-type header 內容.
$sHeaders = "MIME-Version: 1.0\r\n" .
            "Content-type: text/html; charset=$sCharset\r\n" .
            "From: $sMailFrom\r\n";

//@ 傳送 email
            echo "Hello";
mail($sMailTo, $sSubject, $sMessage, $sHeaders);
echo "Hello";
?>