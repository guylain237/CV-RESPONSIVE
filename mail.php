<?php
if(isset($_POST['mailform'])){

    $originaire = "originaire de l'ouest Cameroun";
$marié = "marié deux enfants - santé RAS";
$datenaiss = "née le 20 octobre 1986 a douala";
$resident = 'residant a Ndogbong';
$ville = 'Douala-cameroun';
$map = 'Map: 4.053276, 9.765047';
$num = '(237)  659003009';
$mobile = 'mobile,telegramme,whatsApp';
$email = 'junioressono@gmail.com';
$goog = 'Google+.Twitter,Linkedin,Github';
$header="MIME-Version: 1.0\r\n";
$header.='From:"foningivan"<ivanfoning1@gmail.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='
<html>
  <body>
   
    <div align="center">
        <p > ...........................</p> </br>
        <p > junior Essono </p> </br>
        <p > ...........................</p>
        <p> Architecte logiciel / DevOps </p>
        <p > originaire de l\'ouest cameroun </p> </br>
        <p >  marié deux enfants - santé RAS </p> </br>
        <p > née le 20 octobre 1986 a douala </p></br>
        <p > residant a Ndogbong </p></br>
      <p >Douala-cameroun </p></br>
        <p >Map: 4.053276, 9.765047 </p></br>
        <p >(237)  659003009 </p></br>
        <p >(237) mobile,telegramme,whatsApp </p></br>
        <p >(237)  659003009 </p></br>
        <p >junioressono@gmail.com </p></br>
    </div>
  </body>
</html>
';

mail("guylainboss2@gmail.com", "cv tagne guylain", $message, $header);
}
?>
