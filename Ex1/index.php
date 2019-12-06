<?php
$exerciseNb = 1;
include '../header.php';
$age = 27;

if ($age >= 18){
  echo 'Vous êtes majeur.';
} else {
  echo 'Faudra revenir dans quelques années.';
}

include '../footer.php';
