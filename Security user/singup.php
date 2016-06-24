<?php session_start(); ?>
<?php require('part_header.php'); ?>
<?php require('part_leftsidebar.php'); ?>
  
    <div id="main">

       <h1>Sing Up</h1><br>
       <h2>Register</h2>
       
       <?php echo_msg(); ?>
       <?php echo_msgok(); ?>

                  <?php if ( !isset($_SESSION['username']) ) { ?>

       <p>In order to continue, you must be registered.</p>

         <form name="sing_up" method="post" action="con_logup.php" onsubmit="return validate_form_singup();">
	          <div id="maind">
		           <h4>Choose Username : *<br> 
		           		<input type="text" id="sing_up_username" name="sing_up_username" value="" /> 
		           </h4>
		           <h4>Confirm Phone Number : *<br> 
		           		<input type="tel" id="sing_up_phone" name="sing_up_phone" value="" maxlength="10"/> 
		           </h4>
 		           <p>A verification message will be sent to this Phone.</p>
		           <h4>Choose Password : *<br> 
		           		<input type="password" id="sing_up_password" name="sing_up_password"  value=""/> 
		           </h4>
		           <h4>Confirm Password : *<br> 
		           		<input type="password" id="sing_up_re_password" name="sing_up_re_password"  value=""/> 
		           </h4>
		           <h4>Email Address : *<br> 
		           		<input type="email" id="sing_up_email" name="sing_up_email"  value=""/> 
		           </h4>
		           <p>A verification e-mail will be sent to this address.</p>
		           <h4>Confirm Email Address : *<br> 
		           		<input type="email" id="sing_up_re_email" name="sing_up_re_email"  value=""/> 
		           </h4>
		           <br>
	           </div>
	           <input type="checkbox" name="ok" value="ok" id="ok" /> Agree to terms of service<br>
	           <p><input name="submit" type="submit" id="submit" value="REGISTER" class = "btn btn-success"></p>
         </form>

         <?php } else echo '<p>Hello '.$_SESSION['username'].'!</p>'; ?>
       
    </div>

<?php require('part_footer.php'); ?>