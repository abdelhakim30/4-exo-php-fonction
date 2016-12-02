<?php
function exo (int $num , int $num1)
{
if ($num > $num1) {
  return " Le premier nombre est plus grand";
} elseif ($num == $num1){
  return "Les deux nombres sont identiques";
}
else {
  return "Le premier nombre est plus petit";
}
}
echo exo (5,5);
?>
