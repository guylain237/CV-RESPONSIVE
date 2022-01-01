<?php 

$presentation = array
(
"username"=>"Tagne guylain florian",
"profession"=>"Architecque logiciel/DevOps",
"date_naissance"=>"Neè le 20 octobre 1986",
"origine"=>"Sud-Cameroun",
"status"=>"Marie, 2 EnfantS",
"sante"=>"RAS",
"quartier"=>"Ndogbong",
"ville"=>"Douala-Cameroun",
"map"=>"4 053276 , 9.7654047",
"telephones"=>"674053983",
"contact"=>"mobile, telegram, whatsapp",
"email"=>"junioressono@gmail.com",
"page"=>"google+ twitter,linkedin,github",
"projet"=>"+45 Projets",
"contrat"=>"+31 Contrat",
"exp"=>" 2 Ans D,Exp",

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
<div class="photo"  style="background-image: url(img1.jpg);">

<div class="SEARCH">
                        <input type="search" size="20px" name="" value="rechercher un chef de projet" style="width: 100%; height: 20% ;margin-top:3%; background-image: 0;">
                    </div>
            <div class="profiltext">
                
                    <div class="imgbx">
                     <img src="img.jpg"/>
                    </div>
                         <div>  <h3><?php echo $presentation["username"] ;?><br><span><?php echo $presentation["profession"] ;?></span></h3></div>
           </div>
 </div>

 <div class="contactinfo">

<ul>
                    
                
                    <li> 
                        <span class="icon"><i class="fa fa-birthday-cake" aria-hidden="true"></i></span>
                        <span class="tex"><?php echo $presentation["date_naissance"] ;?></span><br>
                        <span class="text"><?php echo $presentation["origine"] ;?></span><br>
                        <span class="text"><?php echo $presentation["status"] ;?></span>
                        <hr width="90%"> 
                    </li>
                    <li> 
                        <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                          </svg></span>
                        <span class="tex"><?php echo $presentation["quartier"] ;?></span><br>
                       <span class="text"><?php echo $presentation["ville"] ;?></span><br>
                       <span class="text"><?php echo $presentation["map"] ;?></span>
                        
                        <hr width="90%"> 
                    </li>
                    <li> 
                        <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"  fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                          </svg></span>
                        <span class="tex"><?php echo $presentation["telephones"] ;?></span><br>
                        <span class="text"><?php echo $presentation["contact"] ;?></span>
                        <hr width="90%"> 
                    </li>
                 
                    <li> 
                        <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"  fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                          </svg></span>
                        <span class="tex"><?php echo $presentation["email"] ;?></span><br>
                        <span class="text"><?php echo $presentation["page"] ;?></span>
                        <hr width="90%"> 
                    </li>  
                   
                    
                </ul>
               
            </div>
            <div class="contrat">
            <label for="" style="margin-left: 10px"><?php echo $presentation["projet"] ;?></label>
            <label for="" style="margin-left: 15px"><?php echo $presentation["contrat"] ;?></label>
            <label for="" style="margin-left: 20px"><?php echo $presentation["exp"] ;?></label>
            </div>
              <div style="background: red; width: 100px; height: 2px; "></div>
              </div>

</body>
</html>