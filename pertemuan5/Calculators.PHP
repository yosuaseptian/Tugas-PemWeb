<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    

<?php
 
 // If the submit button has been pressed
 if(isset($_POST['submit']))
 {
 // Check number values
 if(is_numeric($_POST['number1']) && is_numeric($_POST['number2']))
 {
 // Calculate total
 if($_POST['operation'] == 'tambah')
 {
 $total = $_POST['number1'] + $_POST['number2']; 
 }
 if($_POST['operation'] == 'kurang')
 {
 $total = $_POST['number1'] - $_POST['number2']; 
 }
 if($_POST['operation'] == 'dikali')
 {
 $total = $_POST['number1'] * $_POST['number2']; 
 }
 if($_POST['operation'] == 'dibagi')
 {
 $total = $_POST['number1'] / $_POST['number2']; 
 }
 
 // Print total to the browser
 echo "<h1> Hasil dari {$_POST['number1']} {$_POST['operation']} {$_POST['number2']} adalah {$total}</h1>";
 
 } else {
 
 // Print error message to the browser
 echo 'Numeric values are required';
 
 }
 }
 ?>
    
</body>
</html>