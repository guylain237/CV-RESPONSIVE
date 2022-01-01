<?php 

$interet = array
(
"titre"=>"Points d`interets",
"passion"=>"Simple passe temps pour se divertis",

);

$langue = array
(
    "point"=>"Pratiquées en entreprise",

"langue1"=>"Francais",
"langue2"=>"Anglais",


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
<div class="box1">
                      
                      <div class="interet">
                          <h2 ><?php echo $interet["titre"] ;?></h2>
                          <p class="simple"> <?php echo $interet["passion"] ;?></p><br><br>
                      </div>
                      <div class="size">
                        <img src="jeux.jpg" alt=""  >
                        
                       
                      </div>
                  </div>
                  <div class="box2">
                      <div>
                          <h2 >Langues</h2>
                          <p class="simple"><?php echo $langue["point"] ;?></p><br><br>
                      </div>
                      <div>
                          <svg class="larger" style="margin-left: 5%;color:#015F9F;" xmlns="http://www.w3.org/2000/svg" width="25" height="25"  fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
                              <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
                            </svg><label for="" id="french"
                              class="box"><?php echo $langue["langue1"] ;?></label>
                          <div>
                              <svg class="larger" style="margin-left: 5%;color:#015F9F;" xmlns="http://www.w3.org/2000/svg" width="25" height="25"  fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
                                  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
                                </svg> <label for="" id="english" style="text-align:end;" class="box"><?php echo $langue["langue2"] ;?></label>
                          </div>
                      </div>
                     
                  </div>
</body>
</html>