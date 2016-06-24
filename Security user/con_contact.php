<?php
    require 'connection/connection.php'; 

    if(!$isConnected){

        die("connection failed \n please try again");

    }
    else{

        $name      = $_POST['name'];
        $email     = $_POST['email'];
        $tel_phone = $_POST['tel_phone'];
        $subject   = $_POST['subject'];
        $message   = $_POST['message'];
        $marked    = "unread";

        //sindesi me tin vasi kai apostoli tin stixion sto massages.
        $connect_db = R::dispense('messages');
        $connect_db-> name     = $name;
        $connect_db-> email    = $email;
        $connect_db-> phone    = $tel_phone;
        $connect_db-> subject  = $subject;
        $connect_db-> message  = $message;
        $connect_db-> marked   = $marked;
        R::store($connect_db);

        //close rb
        R::close();

        header("Location: page_contact.php?msgok=Your message has been successfully sent!");
     }

?>