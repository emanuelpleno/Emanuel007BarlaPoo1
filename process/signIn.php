<?php
include '../class/petitionClass.php';
include '../class/authenticityClass.php';
include '../class/routeClass.php';

use Emanuel007BarlaPoo1\Petition\petitionClass as petition;
use Emanuel007BarlaPoo1\authenticity\authenticityClass as authenticity;
use Emanuel007BarlaPoo1\route\routeClass as route;

$user = petition::getParamPost('user');
$pass = petition::getParamPost('password');

if (authenticity::verifyUserAndPassword($user, $pass) === true) {
  route::redirect('../template/menu.php');
} else {
  
  route::redirect('../index.php?user=false');
}

