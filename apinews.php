<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:log.php');
}
else{
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        img{

width: calc(100% - 20px);
height: 60%;
margin:10px;
padding:10px;
}

.newsgrid{
    margin:10px;
    border:1px sol;
    padding:10px;
}

    </style>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css"/>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   
    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/newscard.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

 <?php include('includes/apiheader.php');?>



    


 












 <div class="container">


     
      <div class="row" style="margin-top: 20px">

       
        <div class="col-md-8">


       
         
          


        


            <div class="card-body">
             <p>
<?php

include "simple_html_dom.php";
  $ch = curl_init();
  curl_setopt($ch,CURLOPT_URL,"https://www.ndtv.com/latest");
  curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
  $response = curl_exec($ch);
  curl_close($ch);

  //echo $response;

  $html = new simple_html_dom();
  $html->load($response);

  

  foreach($html->find('div[class=ins_left_rhs]') as $element){
      echo $element . '<br>';
}
  
 
 
?>
</p>


            </div>
            
            <br><br>
          


      

         
        </div>

        <!-- Sidebar Widgets Column -->
      <?php include('includes/asidebar.php');?>
      </div>
    

    </div>





























    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
<?php } ?>