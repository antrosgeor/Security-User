<?php

// echo_msg(): tiponi minima pou erxete apo to URL
// stin parametro msg (ara einia sto pinaka $_GET )
function echo_msg() {
	  if (isset($_GET['msg']))
	    echo '<p style="color:red;">'.$_GET['msg'].'</p>';
	}

function echo_msgok() {
	  if (isset($_GET['msgok']))
	    echo '<p style="color:green;">'.$_GET['msgok'].'</p>';
	}

?>