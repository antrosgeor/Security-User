<?php session_start(); ?>
<?php require('part_header.php'); ?>
<?php require('part_leftsidebar.php'); ?>
  
    <div id="main">

       <h1>Sing Up</h1><br>
       <h2>Register</h2>
              
       <?php echo_msg(); ?>
       <?php echo_msgok(); ?>

                  <?php if ( isset($_SESSION['username']) ) { ?>

       <p>In order to continue, you must be registered.</p>

         <form name="up" method="post" action="con_up.php" onsubmit="return validate_form_up();">
	          <div id="maind">
		           <h4>Enter the Username : *<br> 
		           		<input type="text" id="up_username" name="up_username" value="" /> 
		           </h4>
		           <h4>Enter the Password : *<br> 
		           		<input type="password" id="up_re_password" name="up_re_password"  value=""/> 
		           </h4>
		           <br />
		           <h2>Complement the you want to change from the form below : </h2>
		           <br />
		           <h4>Changed Phone Number : <br> 
		           		<input type="tel" id="up_phone" name="up_phone" value="" maxlength="10"/> 
		           </h4>
		           <h4>Changed Email Address : <br> 
		           		<input type="email" id="up_email" name="up_email"  value=""/> 
		           </h4>
 		           <h4>Changed Password : <br> 
		           		<input type="password" id="up_password" name="up_password"  value=""/> 
		           </h4>
		           <br>
	           </div>
	           <p><input name="submit" type="submit" id="submit" value="REGISTER" class = "btn btn-success"></p>
         </form>

         <?php } else echo '<p>Hello '.$_SESSION['username'].'!</p>'; ?>
       
    </div>

<?php require('part_footer.php'); ?>