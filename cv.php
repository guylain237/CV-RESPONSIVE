<?php  
require_once 'corps.php'; 
require_once 'matieres.php'; 
require_once 'entreprise.php'; 
require_once 'passion.php'; 
require_once 'academique.php'; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV responsive</title>
<link rel="stylesheet" type="text/css" href="cv.css" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="left_side" >
            <div class="partia">
               
                <div class="photo">
                    <DIV class="SEARCH">
                        <input type="search" size="20px" name="" value="rechercher un chef de projet" style="width: 100%; height: 20% ;margin-top:3%; background-image: 0;">
                    </DIV>
            <div class="profiltext">
                
                <div class="imgbx">
                    <img src="img.jpg">
                </div>
                <h3><?php echo $presentation["username"] ;?><br><span><?php echo $presentation["profession"] ;?></span></h3>
            </div>
        </div>
        <button class="btn_plus">
            <img src="plus.png" style="height: 25px; width: 25px; margin-top: 5px" alt="" srcset="" />
        </button>

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
              <div style="background: red; width: 120px; height: 2px; "></div>
        </div>
        
           
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
             

            </div>
            
            <div class="right_side">
                <div class="haut">
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
                </div>
                <div class="milieu">
                    
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
                   
             </div>
             <div class="bas">
                
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
            </div>

           
            </div>
    </div>
</body>
</html>