<?php 

$matiere = array
(
   
        "title1"=>"Developpement font-end",
          "maitrise1"=>"HTML5, SASS, Vue , Angular, javaFX",
   
   
    "title2"=>"NDeveloppement back-end",
    "maitrise2"=>"NodeJS,Drupal8,Laravel,Kotlin,Java EE 7,",
   

    
    "title3"=>"Developpement mobile",
    "maitrise3"=>"Android Kotlin, IOS Swift, Cordova, Flutter ",
  
   
    "title4"=>"UI/UX DESIGN",
    "maitrise4"=>"Photoshop cc, Adobe XD , Material Design ",
    

    
    "title5"=>"Base de donnees & Bid Data",
    "maitrise5"=>"Oracle 11g,ProgreSQL,Hadoop,Talent DI",
    

    
    "title6"=>"Outil/Environnement ",
    "maitrise6"=>"visual paradigm, Git,Docker,K8S, Linux ",
   


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

<div class="contactinfo langue">

<ul>
                   <li>
                    
                    <svg class="larger" style="margin-left: -10%;color:#015F9F;" xmlns="http://www.w3.org/2000/svg" width="25" height="25"  fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
                      </svg>
                   <label for=""  class="box" ><?php echo $matiere["title1"] ;?> </label>
                   <span class="logo" ><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"  fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                  </svg></span>  
                   <br>
                   <span class="text"><?php echo $matiere["maitrise1"] ;?></span>
                   <br><br>
                       <span class="degre"><div style="width: 90%;"></div></span>
                       <br>
                   </li>
                   <li>
                    <svg class="larger" style="margin-left: -10%;color:#015F9F;" xmlns="http://www.w3.org/2000/svg" width="25" height="25"  fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
                      </svg> <label for=""  class="box" style="font-size: 100%;"><?php echo $matiere["title2"] ;?></label>
                        <span class="logo"Style="margin-left: 15%;"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"  fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                          </svg></span> 
                       <br>
                     <span class="text"><?php echo $matiere["maitrise2"] ;?></span>
                     <br><br>
                      <span class="degre"><div style="width: 50%;"></div></span>
                      <br>
                  </li>
                  <li>
                    <svg class="larger" style="margin-left: -10%;color:#015F9F;" xmlns="http://www.w3.org/2000/svg" width="25" height="25"  fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
                      </svg><label for="" class="box" style="font-size: 100%;"><?php echo $matiere["title3"] ;?> </label>
                        <span class="logo" style="margin-left: 25%;"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"  fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                          </svg></span> 
                        <br>
                        <span class="text"><?php echo $matiere["maitrise3"] ;?> </span>
                        <br><br>
                      <span class="degre"><div style="width: 60%;"></div></span>
                      <br>
                  </li>
                  <li>
                    <svg class="larger" style="margin-left: -10%;color:#015F9F;" xmlns="http://www.w3.org/2000/svg" width="25" height="25"  fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
                      </svg>
                      <label for="" class="box"><?php echo $matiere["title4"] ;?><span class="logo"></label>
                       <span class="class logo" ><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"  fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                      </svg></span>
                    <br>
                     <span class="text"><?php echo $matiere["maitrise4"] ;?></span>
                     <br><br>
                      <span class="degre"><div style="width: 90%;"></div></span>
                      <br>
                  </li>
                  <li>
                    <svg class="larger" style="margin-left: -10%;color:#015F9F;" xmlns="http://www.w3.org/2000/svg" width="25" height="25"  fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
                      </svg>  <label for=""  class="box"><?php echo $matiere["title5"] ;?></label>
                         <span class="logo" color:red">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"  fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                          </svg></span> 
                         <br>
                     <span class="text"><?php echo $matiere["maitrise5"] ;?> </span>
                     <br><br>
                      <span class="degre"><div style="width: 90%;"></div></span>
                      
                  </li>
                  <li>
                    <svg class="larger" style="margin-left: -10%;color:#015F9F;" xmlns="http://www.w3.org/2000/svg" width="25" height="25"  fill="currentColor" class="bi bi-check-square-fill" viewBox="0 0 16 16">
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
                      </svg> <label for="" class="box"><?php echo $matiere["title6"] ;?>  </label>

                         <span class="logo" ><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"  fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                          </svg></span>
                   <br>
                     <span class="text"><?php echo $matiere["maitrise6"] ;?> </span>
                     <br><br>
                      <span class="degre"><div style="width: 90%;"></div></span>
                      
                  </li>
                </ul>
</div>
</body>
 </html>               