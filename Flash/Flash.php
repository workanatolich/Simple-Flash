<?php

class Flash {
    
    public static function set_message(string $key, string $value) {
        $_SESSION[$key] = $value;
    }

    public static function display_message(string $key) {
        echo $_SESSION[$key];
    } 

    public static function delete_message(string $key) {
        unset($_SESSION[$key]);
    }
}