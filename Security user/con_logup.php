<?php
    require 'connection/connection.php'; 
    require 'crypt/crypt.php';

	header('Content-type: text/html; charset=utf-8');
	echo "<pre>".print_r($_POST, 1)."</pre>";
	
	echo "Στο σημείο αυτό γίνεται επεξεργασία των στοιχείων της φόρμας με τη βοήθεια της PHP.";

    // sundesi me vasi
    // to root einai ta dikeomata pou dinoume san ti user na xiristis tin vasi .. me to root einai admin
    // to password to afinoume keno mias kai den exoume vali pass stin vasi mas
    // to database einai to onoma tis vasis mas 
    // to server bazoume to onoma tou server pou exoume tin vasi mas gia afti tin fasi to apache opote to localhost
    
    $username = $_POST['sing_up_username'];
    $phone    = $_POST['sing_up_phone'];
    $email    = $_POST['sing_up_email'];
    $password = $_POST['sing_up_password'];
    $passwordmd5  = cryptPass($password);

    if(!$isConnected)
     {
        die("invalid connect \n please try again");
     }
    else
     {
        //$row = R::load('user', $username->name);
            $row = R::getRow("SELECT name FROM user WHERE name = '$username' ");    
            //$row  = R::store($data);
            print_r($row);

            if($row["name"] == $username)
             {
                header("Location: singup.php?msg=the user name and the password is the data!");  
             }
            else
             {

        $logup_db = R::dispense('user');
        $logup_db-> name     = $username;
        $logup_db-> password = $passwordmd5;
        $logup_db-> email    = $email;
        $logup_db-> phone    = $phone;
        //$connect_db-> marked   = $marked;
        R::store($logup_db);
        //$connect_db-> joined   = date('Y-m-d H:i:s');

        //close rb
        R::close();

        //$sql="INSERT INTO messages (name, email, phone, subject, message ) VALUES ('$name','$email', '$tel_phone', '$subject', '$message')";
        header("Location: index.php?msgok=Successful registration. Now you can log-in page!");
     }
 }

?>