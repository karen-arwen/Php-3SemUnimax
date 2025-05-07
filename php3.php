<?php
  $nota1 = 7.5; 
$nota2 = 4.5; 
   
  $media = ($nota1 + $nota2) / 2;

if ($media >= 5) {
 
    echo "<p style='color: green;'>Aprovado! Média: $media</p>";
  } else {
 
    echo "<p style='color: orange;'>Reprovado! Média: $media</p>";
  }
?>
