<?php session_start(); ?>
<?php require('part_header.php'); ?>
<?php require('part_leftsidebar.php'); ?>
 
    <div id="main">
       <h1>Sign in</h1>

        <?php echo_msg(); ?>
        <?php echo_msgok(); ?>
       
        <!-- AN DEN KANI LOGIN DOSE TIN FORMA LOGIN  -->
        <?php if ( !isset($_SESSION['username']) ) { ?>
       
        <p>Returning users sign in here:<br></p>
        	<form accept-charset="utf-8" name="form1" method="post" action="con_login.php" role = "form" onSubmit="return validate_form_user();">
	           <div id="maind">
	           		<h4>Username: <br> 
	           			<input  type="text" name="username" id="username"/> 
	           		</h4>

	           		<h4>Password: <br> 
	           			<input  type="password" name="password" id="password"/> 
	           		</h4>
	           </div>
	           
	           <br>
	           
	           <p>
	           		<a href="forgot.php">Forgot Password ?</a>
	           </p>
	           
	           <br>
		       <tr>
					<td colspan="2" align="right">
						<p>
							<button type="reset" value="Reset">Reset</button>
							<input name="submit" type="submit" value="SIGN IN"/>
						</p>		
					</td>
				</tr>
         	</form>

       <?php } else echo '<p>Hello '.$_SESSION['username'].'!</p>'; ?>
       
    </div>

<?php require('part_footer.php'); ?>