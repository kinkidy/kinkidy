<?php

    $username = "";
    $email    = "";
    $phone_number = ""; 
    $address = ""; 
    print_r($_POST);

    // if (isset($_POST['submit'])) {

    //     $handle = fopen('form.txt', 'a+');
    //     fwrite($handle, $_POST['submit']);
    //     fclose($handle);
    // }
    if (isset($_POST['submit'])) {
        $full_name = $_POST['full_name'];
		$email = $_POST['email'];
		$phone_number = $_POST['phone_number'];
        $address = $_POST['address'];
        $message = $_POST['message'];

    
            $handle = fopen($full_name , 'a+');
            fwrite($handle, $full_name);
            fwrite($handle, $email);
            fwrite($handle, $phone_number);
            fwrite($handle, $address);
            fwrite($handle, $message);

            fclose($handle);
     

    }  
?>