<?php 

$exper_aca= array
(
"titre"=>"Cursus Academique ",
"sous_titre"=>"Diplomes et formation certifiante",

"statut1"=>"DIPET Electronique",
"mail1"=>" @Enset de douala",
"annee1"=>"aout 2016",
"specialite1"=>"gestion d`eclairage  d`une maison(android+arduino)",


"statut2"=>"Oracle SQL Associate",
"mail2"=>" @Kentnix Sarl ",
"annee2"=>"octobre 2008",
"specialite2"=>"SQL2 , SQL3 , XML",


"statut3"=>"Oracle SQL Certified",
"mail3"=>"@Kentnix Sarl",
"annee3"=>"Mars 2009",
"specialite3"=>"Oracle DataBase 11g Administration",


"statut4"=>"Licence Professionnelle ",
"mail4"=>"@Douala Institu of Tech",
"annee4"=>"octobre 2008",
"specialite4"=>"Programmation appliqué pour internet",


"statut5"=>"DEC/BTS",
"mail5"=>"@CCNB Dieppe-Canad",
"annee5"=>"septembre 2007 ",
"specialite5"=>"Etélecommunication et Réseaux",



"statut6"=>"Baccalaureat",
"mail6"=>"@Lycee technique de Douala Bassa",
"annee6"=>"juin 2015 ",
"specialite6"=>"Electronique, mentien BIEN(major du centre)",

);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV responsive</title>
<link rel="stylesheet" type="text/css" href="style/cv.css" >
<link rel="stylesheet" type="text/css" href="style/bouton.css" >
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

 <div class="experience">
                    <img src="graduation_cap_30px.png" alt="" srcset="" class="tail" />
                    <div class="titre">
                        <label class="experien" for=""><?php echo $exper_aca["titre"] ;?> <b style="background: #015F9F;"></b>    </label><br />
                        <label class="expertise" for=""> <?php echo $exper_aca["sous_titre"] ;?></label>
                    </div>
                    <div>
                        <img class="menu1" src="menu.png" alt="" srcset="" />
                          </div>
                </div>


              <div class="contenu">

                <div class="partie1">

                    <p style="font-weight: bold; font-size: 18PX;"><?php echo $exper_aca["statut1"] ;?>- <?php echo $exper_aca["mail1"] ;?><b style="font-size: 25px;"></b></p>
                    <p class="chef"><?php echo $exper_aca["annee1"] ;?>-<b style="color: black; font-weight: normal;"><?php echo $exper_aca["specialite1"] ;?></p>
    
                        <hr>
                    </div>
                <div class="partie1">
                    <p style="font-weight: bold; font-size: 18PX;"><?php echo $exper_aca["statut2"] ;?>- <b style="font-size: 25px;"><?php echo $exper_aca["mail2"] ;?></b></p>
                    <p class="chef"><?php echo $exper_aca["annee2"] ;?>-<b style="color: black; font-weight: normal;"><?php echo $exper_aca["specialite2"] ;?></p>
    
                        <hr>
                    </div>
                <div class="partie1">
                <p style="font-weight: bold; font-size: 18PX;"><?php echo $exper_aca["statut3"] ;?>- <b style="font-size: 25px;"> <?php echo $exper_aca["mail3"] ;?></b></p>
                <p class="chef"><?php echo $exper_aca["annee3"] ;?>-<b style="color: black; font-weight: normal;"><?php echo $exper_aca["specialite3"] ;?></p>

                    <hr>
                </div>
                <div class="partie1">
                    <p style="font-weight: bold; font-size: 18PX;"><?php echo $exper_aca["statut4"] ;?>- <b style="font-size: 25px;"><?php echo $exper_aca["mail4"] ;?> </b></p>
                    <p class="chef"><?php echo $exper_aca["annee4"] ;?>-<b style="color: black; font-weight: normal;"><?php echo $exper_aca["specialite4"] ;?></p>

                    <hr>
                </div>
                
                <div class="partie">
                    <p style="font-weight: bold; font-size: 18PX;"><?php echo $exper_aca["statut5"] ;?>- <b style="font-size: 25px;"> <?php echo $exper_aca["mail5"] ;?></b></p>
                    <p class="chef"><?php echo $exper_aca["annee5"] ;?>-<b style="color: black; font-weight: normal;"><?php echo $exper_aca["specialite5"] ;?></p>

                   
                    <hr>
                </div>
                
                <div class="partie1">
                    <p style="font-weight: bold; font-size: 18PX;"><?php echo $exper_aca["statut6"] ;?>- <b style="font-size: 25px;"><?php echo $exper_aca["mail5"] ;?> </b></p>
                    <p class="chef"><?php echo $exper_aca["annee6"] ;?>-<b style="color: black; font-weight: normal;"><?php echo $exper_aca["specialite6"] ;?></p>

                   
                   
                    <hr>
                </div>
    </div>

</body>
</html>

                