<!DOCTYPE html>
<html>
<body>

<?php  
$x = 75;
  
function myfunction() {
  global $x; // mengakses variabel global
  echo $x;
}

myfunction();
?>  

</body>
</html>
