<?php 

$exper_pro = array
(
"titre"=>"Expérience Professionnelle",
"sous_titre"=>"Expertise en entreprise",

"statut1"=>"Chefs des projets informatiques",
"mail1"=>"@Ets M DEM",
"annee1"=>"DE JUIN 2019 A CE JOUR -http//mdem.com",
"specialite1"=>"Chef du projet annuaire-universitaire.cm de l`ART",


"statut2"=>"Fondateur & DT",
"mail2"=>" @Startup Chickdev",
"annee2"=>"De juin 2015 a ce jour -http//Chickdev.com",
"specialite2"=>"Realisation de plusieurs sites webs et apllications wem et mobiles",


"statut3"=>"Enseignant",
"mail3"=>"@Institut Universitaire de la Cote",
"annee3"=>"DDe octobre 2011 a ce jour -http//istdi.net",
"specialite3"=>"Analyse UML et MERISE;BD/SQL ORACLE MYSQL; DEV IOS & Android ; BI & BIG Data Talent Di & Hadoop  1ere ,2eme et 4éme annee",


"statut4"=>"Développeur en Chef ",
"mail4"=>"@Kayroual group",
"annee4"=>"De mai 2013 à juin 2015 -http//kayroual.com",
"specialite4"=>"Realisation de multiples projets logiciels et web, infographie,..",


"statut5"=>"Responsable commerciale",
"mail5"=>"@BAO Sarl",
"annee5"=>"De decembre 2012 à juin 2013 -http//bao-sarl.com",
"specialite5"=>"Definition des strategiques commerciales, controle de qualite, suivi...",

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
                        <img src="batiment.jpg.png" alt="" srcset="" class="tail" />
                        <div class="titre">
                            <label class="experien" for=""><?php echo $exper_pro["titre"] ;?></label><br />
                            <label class="expertise" for=""> <?php echo $exper_pro["sous_titre"] ;?></label>
                        </div>
                        <div>
                            <img class="menu1" src="menu.png" alt="" srcset="" />
                              </div>
                    </div>

              <div class="contenu">
                    
                

                <div class="partie1">
                    <p style="font-weight: bold; font-size: 18PX;"><?php echo $exper_pro["statut1"] ;?> - <b style="font-size: 25px;"><?php echo $exper_pro["mail1"] ;?></b></p>
                    <p class="chef"><?php echo $exper_pro["annee1"] ;?></p> 
                    <p class="font"> <span><?php echo $exper_pro["specialite1"] ;?></span></p>

                    
                    <hr>
                </div>
                <div class="partie1">
                    <p style="font-weight: bold; font-size: 18PX;"><?php echo $exper_pro["statut2"] ;?> - <b style="font-size: 25px;"><?php echo $exper_pro["mail2"] ;?></b></p>
                    <p class="chef"><?php echo $exper_pro["annee2"] ;?></p>
                    <p class="font"> <span><?php echo $exper_pro["specialite2"] ;?></span></p>

                    
                    <hr>
                </div>
                <div class="partie1">
                    <p style="font-weight: bold; font-size: 18PX;"><?php echo $exper_pro["statut3"] ;?>- <b style="font-size: 25px;"><?php echo $exper_pro["mail3"] ;?> </b></p>
                    <p class="chef"><?php echo $exper_pro["annee3"] ;?></p>
                    <p class="font"> <span><?php echo $exper_pro["specialite3"] ;?></span></p>
                    

                    
                    <hr>
                </div>

                <div class="partie1">
                    <p style="font-weight: bold; font-size: 18PX;"><?php echo $exper_pro["statut4"] ;?>- <b style="font-size: 25px;"><?php echo $exper_pro["mail4"] ;?> </b></p>
                   
                    <p class="chef"><?php echo $exper_pro["annee4"] ;?></p>
                    <p class="font"><span><?php echo $exper_pro["specialite4"] ;?></span></p>

                  
                    <hr>
                </div>
                <div class="partie1">
                    <p style="font-weight: bold; font-size: 18PX;"><?php echo $exper_pro["statut5"] ;?> - <b style="font-size: 25px;"><?php echo $exper_pro["mail5"] ;?> </b></p>
                    <p class="chef"><?php echo $exper_pro["annee5"] ;?></p>

                    <p class="font"><span><?php echo $exper_pro["specialite5"] ;?></span></p>

                   
                    <hr>
                </div>



                </div>

</body>
</html>