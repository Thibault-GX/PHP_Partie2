<?php
$exerciseNb = 5;
include '../header.php';
$gender = 'Homme';

if ($gender != 'Homme')
{
  echo 'C\'est une développeuse !';
}
else {
  echo 'C\'est un développeur.';
}

include '../footer.php';
