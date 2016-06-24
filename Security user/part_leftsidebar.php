    <div id="leftsidebar">
      <ul class="menu">
      	<li><a href="page_public.php">Public Page</a></li>
      	
        <?php if ( !isset($_SESSION['username']) ) { ?>

            <li><a href="index.php">Sing In</a></li>
            <li><a href="singup.php">Sing Up</a></li>

        <?php } ?>

        <li><a href="page_user.php">User Page</a></li>   
      	<li><a href="page_contact.php">Contact</a></li>
       

        <?php if ( isset($_SESSION['username']) ) { ?>

           <!-- h epilogi logout dinete mono se osous exoun kani login  -->
           <!-- h anagin gia session_start() exei kalifthi sta arxeia selidas. -->
           <li><a href="upgrade.php">Upgrade</a></li>
           <li><a href="con_logout.php">logout</a></li>
           
        <?php } ?>

      </ul>

    </div>