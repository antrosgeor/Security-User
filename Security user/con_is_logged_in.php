<?php
  // stin periptosi pou den exei gini login (afto to elexoume me tin parametro
  // username sto pinaka $_SESSION ) epanerxete i selida index.php me sxetiko minima 
  
  // edo i selides mas stelnonte sto kodima mas stadiaka, kathos to periexomeno tous ginete diathesimo
  //  gia afto to logo DEN prepi na exei stali tpt apolitos oute ena space!!! prin gini anakatefthinsi me header(). diaforetika exoume error
  //ara oles oi doulies mas prepi na ginoun noris. prin to html kai prin apo echo
  
  session_start(); // afto xriazete gia na gini prosvasi sto session
  if (!isset($_SESSION['username'])) {
     header("Location: index.php?msg=Must you login!");
     exit();
  }   
 
 ?>