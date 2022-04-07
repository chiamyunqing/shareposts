<?php
session_start(); //run this to run session

//flash message helper
//EXAMPLE - flash('register_success', 'You are now registed');
//DISPLAY IN VIEW - <?php echo flash('register_success'));
function flash($name = '', $message = '', $class = 'alert alert-success') {
    if (!empty($name)) {
        if (!empty($message) && empty($_SESSION[$name])) {
            if (!empty($_SESSION[$name. '_class'])) {
                unset($_SESSION[$name. '_class']);
            }

            $_SESSION[$name] = $message;
            $_SESSION[$name.'_class'] = $class;
        } elseif (empty($message) && !empty($_SESSION[$name])) {
            $class = !empty($SESSION[$name . '_class']) ? $_SESSION[$name. '_class'] : '';
            echo '<div class="'.$class.'"id="msg-flash">'.$_SESSION[$name].'</div>';
            unset($_SESSION[$name]);
            unset($_SESSION[$name.'_class']);

        }
       
    }
}

function isLoggedIn(){
    return isset($_SESSION['user_id']);
}    