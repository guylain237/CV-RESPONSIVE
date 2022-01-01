 

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
<div class="container">
    <div class="left_side" >
            <div class="partia">
               
        <div>
            
           <?php require_once 'corps.php';  ?>  
       </div>

    

    <button class="btn_plus">
        <div class='button-parent'>
                           <input type="checkbox" id='btn'>
                            <label for="btn" class='button'>
                                  <i class="material-icons">+</i>
                            </label>

        <div class="link-parent">
                 <a href='mail.php' class='link-item' id='link-one'>
                  <div class="label-container">
                <div class="label-text">email</div>
                <i class="material-icons">+</i>
               </div>
                </a>
              <a href='mail.php' class='link-item' id='link-two'>
              <div class="label-container">pdf</div>
               <i class="material-icons">+</i>
                 </a>
            </div>
        </div>
    </button>



      <div >
            
                  
            <?php require_once 'corps.php';  ?>  


       </div>
        
           



        <div >
               
            <?php require_once 'matieres.php';  ?>  

        </div>              
             

    </div>
            
           
    
    <div class="right_side">
               
        <div class="haut">
                    


                <?php require_once 'entreprise.php';  ?>  



        </div>
                
        <div class="milieu">
                    
                <?php require_once 'passion.php';  ?>  
                   
        </div>
            
        <div class="bas">
                
               <?php require_once 'academique.php'; ?>
                
        </div>

           
    </div> 
</div>      

</body>
</html>