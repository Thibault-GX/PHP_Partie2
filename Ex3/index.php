<?php
$exerciseNb = 3;
include '../header.php';
$age = 27;
$gender = 'homme';

if ($gender == 'homme' AND $age >= 18)
{
  echo 'Vous êtes un homme et êtes majeur.';
}
elseif ($gender == 'homme' AND $age < 18)
{
  echo 'Vous êtes un homme et êtes mineur.';
}
elseif ($gender == 'femme' AND $age >= 18)
{
  echo 'Vous êtes une femme et êtes majeur.';
}
elseif ($gender == 'femme' AND $age < 18)
{
  echo 'Vous êtes une femme et êtes mineur.';
}
else
{
  echo 'Mais qui vous dit que je suis un homme ?';
}

/* Solution de Cécile, mieux optimisée
if (($gender == 'femme' OR $gender == 'homme') AND $age >= 18) {
  echo 'Vous êtes un '.$gender.' et vous êtes majeur';
}
elseif (($gender == 'homme' OR $gender =='femme') AND $age < 18) {
  echo 'Vous êtes un '.$gender.' et vous êtes mineur';
}
*/
include '../footer.php';
