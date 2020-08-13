<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php   

      // without parameter
      function simple(){

     echo " Welcome to my Website <br><br><br> " ;

      }
        //  call function
         simple();

//  Parameter
 function table( $Number){

  for ($i=1; $i <= 10; $i++){ 
 
         echo "<h2> $Number x $i = ".$Number*$i."<h2>";
   }
 }
  
  //  call function
  table(2);
     
        //  Multiple Parameters 

  function data($name , $Age , $education ){

     echo  " Name ".$name."<br> Age ".$Age ." <br> Education ".$education ;

  } 

    //  call function
    data("Maira",19,11);

?>   
</body>
</html>