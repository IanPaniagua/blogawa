<?php
// VALIDATE REGISTRATION
function validateUser($user) {
    $errors = array();

    if (empty($user['username'])){
        array_push($errors, 'Username is required');
    }
    if (empty($user['email'])){
        array_push($errors, 'Email is required');
    }
    if (empty($user['password'])){
        array_push($errors, 'Password is required');
    }
    if ($user['passwordConf'] !== $user['password']){
        array_push($errors, 'Password do not match');
    }

    $existingUser = selectOne('users', ['email' => $user['email']]);
    if(($existingUser)) {
        if (isset($user['update-user']) && $existingUser  ['id'] != $user['id']) {
            array_push($errors, 'User already exists');
        }
        if(isset($user['add-user'])) {
            array_push($errors, 'User already exists');
        }
}
return($errors);
}
// VALIDATE LOGIN
function validatelogin($user) {
    $errors = array();

    if (empty($user['username'])){
        array_push($errors, 'Username is required');
    }

    if (empty($user['password'])){
        array_push($errors, 'Password is required');
    }
   

    return $errors;
}