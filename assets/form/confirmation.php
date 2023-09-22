<?php
     include("connexion.php") 
     ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Merci</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Righteous&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../form/thankupage/merci1.css" />
 <!-- Favicons -->
 <link href="../assets/img/min.png" rel="icon">
 <link href="../assets/img/max.png" rel="apple-touch-icon">
 <style>
   .name{
     color: #468f0e;}
  span{
    text-align:left;
  }
 </style>
  <?php
    
   
    $K1=$_POST["name"];
    $K2=$_POST["email"];
    $K3=$_POST["subject"];
    $K4=$_POST["message"];

   $sql="insert into green(name,email,subject,msg)";
   $sql=$sql."values('".$K1."', '".$K2."','".$K3."','".$K4."')";
   mysqli_query($con,$sql)
           or die('erreer insert');
         
           
        $alert = '<div class="alert-success" style=" z-index: 1;
  background: #D4EDDA;
  font-size: 18px;
  padding: 20px 40px;
  min-width: 420px;
  position: fixed;
  right: 0;
  top: 10px;
  border-left: 8px solid #3AD66E;
  text-align:center;
  border-radius: 4px;">
                 <span>&nbsp;&nbsp;&nbsp;Merci<span class="name">"'.$K1.'"</span>de Nous contacter.</span>
                </div>';
                echo "$alert";
              
         
         ?>
         

        
</head>
    <body>
    <div class="box">
               <h1>Merci &nbsp;<span class="name"><?php echo $K1; ?></span></h1>
               <p><span> Green</span>Index vous contactera bientôt
</p>
               <br>
               
               <div class="pyro">
                 <div class="before"></div>
                 <div class="after"></div>
               </div>
            </div>
        

    <?php
    
   
    $K1=$_POST["name"];
    $K2=$_POST["email"];
    $K3=$_POST["subject"];
    $K4=$_POST["message"];

   $sql="insert into green(name,email,subject,msg)";
   $sql=$sql."values('".$K1."', '".$K2."','".$K3."','".$K4."')";
   mysqli_query($con,$sql)
           or die('erreer insert');
         
           
        $alert = '<div class="alert-success" style=" z-index: 1;
  background: #D4EDDA;
  font-size: 18px;
  padding: 20px 40px;
  min-width: 420px;
  position: fixed;
  right: 0;
  top: 10px;
  border-left: 8px solid #3AD66E;
  text-align:center;
  border-radius: 4px;">
                 <span>&nbsp;Message envoyé On va te contacter via email:<span class="name">"'.$K2.'"</span>
                </div>';
                echo "$alert";
              
         
         ?>
      
         </body>
        </html>