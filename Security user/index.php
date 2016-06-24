<?php session_start(); ?>
<?php require('part_header.php'); ?>
<?php require('part_leftsidebar.php'); ?>
<?php require_once 'duo/duo_web.php'; ?>
<?php require 'connection/connection.php'; ?>
<?php require 'crypt/crypt.php'; ?>


<?php if ( !isset($_SESSION['username']) ) { ?>

<div id="main">
       <h1>Sign in</h1>

        <?php echo_msg(); ?>
        <?php echo_msgok(); ?>

        <?php
        
        /*
         * STEP 3:
         * Once secondary auth has completed you may log in the user
         */

        if (isset($_POST['sig_response'])) {
            $resp = Duo::verifyResponse(IKEY, SKEY, AKEY, $_POST['sig_response']);
            if ($resp) {
                 $authorised= true;  // o xristis diapisteftike
                 session_start();    // 3ekiname session gia afto to xristi
                 $_SESSION['username']= $resp;  //katagrafoume to xristi sto session
                 header('Location: page_user.php');
                 exit();
            }
        }

        /*
         * STEP 2:
         * verify username and password
         * if the user and pass are good, then generate a sig_request and
         * load up the Duo iframe for secondary authentication
         */

        else if (isset($_POST['user']) && isset($_POST['pass'])) {

        	$username = $_POST['user'];
			$password = $_POST['pass'];
            
	     	$row = R::getRow("SELECT name, password FROM user WHERE name = '$username' ");	


            if($row["name"]== $username && crypt($password, $row["password"]) == $row["password"]){

            //if ($row["name"]== $username /*&& $row["password"] == $passwordmd5*/) {
                /*
                 * Perform secondary auth, generate sig request, then load up Duo
                 * javascript and iframe.
                 */
                $sig_request = Duo::signRequest(IKEY, SKEY, AKEY, $_POST['user']);
            ?>
                <script type="text/javascript" src="duo/Duo-Web-v2.js"></script>
                <link rel="stylesheet" type="text/css" href="duo/Duo-Frame.css">
                <iframe id="duo_iframe" frameborder="0" data-host="<?php echo HOST; ?>" data-sig-request="<?php echo $sig_request; ?>"></iframe>
        <?php
            }else{
            	 header("Location: index.php?msg=Failed user accreditation!" );
            }
        }


        /*
         * STEP 1: login form
         * handled exactly as usual
         */

        else {
            // Output simple login form
            echo "<form action='index.php' method='post'>";
            echo "<div id='maind'><h4>Username: <br>  <input type='text' name='user' /> </h4>";
            echo "<h4>Password: <br> <input type='password' name='pass' />  </h4></div>";
            echo "<input type='submit' value='Submit'  class = 'btn btn-success' />";
            echo "</form>";
        }

        echo "</html>";

    

?></div>

<?php } else echo '<p>Hello '.$_SESSION['username'].'!</p>'; ?>

<?php require('part_footer.php'); ?>

