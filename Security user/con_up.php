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
    
    $username = $_POST['up_username'];
    $phone    = $_POST['up_phone'];
    $email    = $_POST['up_email'];
    $password = $_POST['up_password'];
    $re_pass  = $_POST['up_re_password'];

    $passwordmd5  = cryptPass($password);

    if(!$isConnected){

        die("invalid connect \n please try again");
        
    }
    else
     {
        //$row = R::load('user', $username->name);
            $row = R::getRow("SELECT name, password FROM user WHERE name = '$username' ");    
            //$row  = R::store($data);
            print_r($row);

            if($row["name"] == $username)
             {
                if(!(!$email)){
                    $loaded_user = R::load('user', $username);
                    $users_Table-> email = $email;
                    R::store($users_Table);
                }
                if(!(!$phone)){
                    $loaded_user = R::load('user', $username);
                    $users_Table-> phone = $phone;
                    R::store($users_Table);
                }
                if(!(!$password) && crypt($re_pass, $row["password"]) == $row["password"]){
                    $passwordcry = cryptPass($password);
                    $loaded_user = R::load('user', $username);
                    $users_Table-> password = $passwordcry;
                    R::store($users_Table);
                }

                //$connect_db-> joined   = date('Y-m-d H:i:s');

                //close rb
                R::close();

                //$sql="INSERT INTO messages (name, email, phone, subject, message ) VALUES ('$name','$email', '$tel_phone', '$subject', '$message')";
                header("Location: index.php?msgok=Successful registration. Now you can log-in page!");
             }else{
                
                header("Location: singup.php?msg=the user name and the password it is NOT right!");  
             
             }
     }

?>