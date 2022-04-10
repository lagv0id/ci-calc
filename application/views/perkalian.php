<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perkalian</title>
</head>
<form></form>
<br>
<h1 align="center">PERKALIAN</h1>
<body>
<form align="center" method="post">
    <input type="text" name="angka1"> X
<input type="text" name="angka2">


   <input align="center" type="submit" name="submit">



   <?php
                
if (isset($_POST["submit"])) {
   $angka1 = $_POST["angka1"];
   $angka2 = $_POST["angka2"];

   echo   ($angka1 * $angka2);                            
}          
?>
</form>   


  
 

 
    
</body>
</html>
