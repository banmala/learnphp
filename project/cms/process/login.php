<?php
    include  $_SERVER['DOCUMENT_ROOT'].'/learn/project/config/init.php';
    if($_POST){
        debugger($_POST);
        if(isset($_POST['email']) && !empty($_POST['email'])){
            if(isset($_POST['password']) && !empty($_POST['password'])){
                $data['email'] = $_POST['email'];
                $data['password'] = sha1($_POST['email'].$_POST['password']);
                $user = new user();
                $user_info = $user->getUserbyEmail($data['email']);
                if(isset($user_info[0]->email) && !empty($user_info[0]->email)){
                    if($user_info[0]->password == $data['password']){
                        $_SESSION['user_id'] = $user_info[0]->id;
                        $_SESSION['user_name'] = $user_info[0]->username;
                        $_SESSION['user_email'] = $user_info[0]->email;

                        $token = tokenize();
                        $_SESSION['token']=$token;

                        redirect('../index','success','Welcome to Dashboard');
                    }else{
                        redirect('../login','error','Password Doesnt Matched..');
                    }
                }else{
                    redirect('../login','error','Email Not Found Please Contact Admin For Recheck..');
                }
            }else{
                redirect('../login','error','Password Required..');
            }
        }else{
            redirect('../login','error','Email Required..');
        }
    }else{
        redirect('../login','error','Unauthorized Access..');
    }
?>