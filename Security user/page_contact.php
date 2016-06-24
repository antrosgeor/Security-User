<?php session_start(); ?>
<?php require('part_header.php'); ?>
<?php require('part_leftsidebar.php'); ?>

    <div id="main">
       <h1>Contact Us</h1><br>
       
       <?php echo_msg(); ?>
       <?php echo_msgok(); ?>

         <form name="sing_up" method="post" action="con_contact.php" onsubmit="return validate_form_contact();">
	           <h2>Your information</h2><br>
        	  <div id="maind">         
		           <h4>Name : *<br>
		             	<input type="text" id="name" name="name" value="" /> 
		           </h4>

		           <h4>Email : *<br> 
		           		<input type="email" name="email" id="email" value="" /> 
		           </h4>
		           
		           <h4>Phone : *<br> 
		           		<input type="tel" name="tel_phone" id="tel_phone" value="" maxlength="10" /> 
		           </h4>
		           
		           <br>
		           
		           <h2>Your message</h2>
		           <br>
		           
		           <h4>Suject : *<br> 
		           		<input type="text" name="subject" id="subject" value="" /> 
		           </h4>
		           
		           <h4>Message : *<br> 
		           		<textarea id="message" name="message" rows="5" cols="40" value="" ></textarea> 
		           </h4>
		           
		           <br>
	         
	         </div>
	           
	           <p>
 	           	 	<button type="reset" value="Reset" class = "btn">Reset</button>
	           	 	<input name="submit" type="submit" class = "btn btn-success" value="submit">
	           </p>
         
         </form>
       
    </div>

<?php require('part_footer.php'); ?>