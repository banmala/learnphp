<?php
    include  $_SERVER['DOCUMENT_ROOT'].'/learn/project/config/init.php';
    // redirect('cms/index.php');
    
    $user = new user();
    $data = array(
        'username'=>'banmala',
        'email'=>'banmala@gmail.com',
        'role'=>'Admin'
    );
    $user->addUser($data,true);