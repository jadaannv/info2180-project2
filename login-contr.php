<?php

function is_input_empty($email, $pwd){
    if(empty($email) || empty($pwd)){
        return true;
    } else{
        return false;
    }
}

function is_email_wrong($result) {
    if(!$result){
        return true;
    } else {
        return false;
    }
    
}

function is_password_wrong($pwd, $hashedPwd) {
    if(!password_verify($pwd, $hashedPwd)){
        return true;
    } else {
        return false;
    }
    
}