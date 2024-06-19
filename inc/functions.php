<?php

    session_start(); 

    function set_message($message, $className){
        //creating to session variables and passing message and classname
        $_SESSION['message'] = $message;
        $_SESSION['className'] = $className;
    }

    function get_message(){
        if(isset($_SESSION['message'])){  //isset just checks if variable exists not the value
            echo '<div class="alert alert-' . $_SESSION['className'] . '" role="alert">' .  //adding an alert bar (with bootstrap) and adding specific class name and message content to it
            $_SESSION['message'] 
            .  '</div>';
            unset($_SESSION['message']);
            unset($_SESSION['className']); // unsetting variables so user does not continue to see same messag over and over
        }
    }



?>