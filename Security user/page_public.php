<?php
  session_start();  // xriazete sigoura sto leftsidebar.php
  require('part_header.php');
  require('part_leftsidebar.php');
?>
  
    <div id="main">
       <h2>Public Page</h2>
       <?php echo_msg(); ?>
       <?php echo_msgok(); ?>
       
       <p>This is a public page for Safe Programming Security.</p>
       <p>You must log-in right to the database, for you can read the user page.</p>
    </div>

<?php require('part_footer.php'); ?>