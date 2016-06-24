<?php

//exteli to logout kai anakateuthini sth home me minima

session_start();    //connect to the session...
session_destroy();  //...and destroy it
header("Location: index.php?msgok=Successful Logout!");
exit();
  
?>