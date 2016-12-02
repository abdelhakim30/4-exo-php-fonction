<?php
function exo (int $age ,string $genre)
{
  if ($age >= 18) {
    if ($genre == "Homme") {
      return "Vous êtes un homme et vous êtes majeur";
    }else {
      return "Vous êtes une femme et vous êtes majeur";
    }
  }
      else {
        if ($genre == "Homme") {
          return "Vous êtes un homme et vous êtes mineur";
        }
        else{
          return "Vous êtes une femme et vous êtes mineur";
        }
      }
    }
    echo exo (50, "Homme");
 ?>
