<?php 
    $username = "_jakarta";
    $password = "wsxE99##";

    function is_username_valid($username){
        if(preg_match("/^[a-z_-]{1,8}$/", $username)){
            echo "True";   
        } else{
            echo "False";
        }
    }

    function is_password_valid($password){
        if(preg_match("/^([1-zA-Z0-9#w!@£]{1,8})$/", $password)){
            echo "True";   
        } else{
            echo "False";
        }
    }

    // /^[a-z_-]{1,8}$/
    // /^([1-zA-Z0-9w!@£]{1,8})$/
    echo is_username_valid($username);
    echo is_password_valid($password);

?>