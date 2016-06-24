<?php 
  //an o xristis den exei kani login o kodikas tou con_is_logged_in.php
  // na ton anakatethini allou kai den tha dei pote tin parousa selida 
  require('con_is_logged_in.php');

  // an perasi ton elexo tote xtizoume tin selida kanonika opos exei 
  require('part_header.php');
  require('part_leftsidebar.php');
?>
  
    <div id="main">
       <h2>Σελίδα Χρήστη</h2>
       <?php echo_msg(); ?>
       <?php echo_msgok(); ?>
       <p>Logged correctly in the Page</p>
       
    </div>

<?php require('part_footer.php'); ?>