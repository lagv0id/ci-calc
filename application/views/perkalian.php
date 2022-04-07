<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perkalian</title>
</head>
<h1>Perkalian</h1>
<body>
<form  method="post">
   Input Angka <input type="text" name="angka1"> 
   Input Angka <input type="text" name="angka2">
   
   <input align type="submit" name="submit">
</form>   

<?php
                
if (isset($_POST["submit"])) {
   $angka1 = $_POST["angka1"];
   $angka2 = $_POST["angka2"];
   
   echo ($angka1 * $angka2);                            
}          
?>
  
 

 
    
</body>
</html>

 
 
