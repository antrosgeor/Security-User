<?php

	require 'rb/rb.php';
    //kanoume tin sindesi stin vasi mas 
    //        typedada    host ;    name-dada      user  pass
    R::setup('mysql:host=localhost;dbname=dbname', 'user', 'password');
 
 	$isConnected = R::testConnection();

?>