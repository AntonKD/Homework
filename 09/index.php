<?php

Session_start();
require_once "./function.php";

if(!is_user_logged_in())
{  //показать форма ввода логина-пароля
    if(isset($_POST['submit_login']))
    {
        $error=[];
        $login = $_POST['login'];
        $password = $_POST['password'];
            if(strlen($login)>16 || strlen($login)<5)
            { $error['login']= 'поле login должен быть от 5 до 16 символов';

            }

            if(strlen($password)>12 || strlen($password)<7)
            { $error['password']= 'поле password должен быть от 7 до 12 символов';

            }
                if(empty($error))
                {
                    login_in();
                    header('location : index.php');
                }

    }
    include "login.html";
    if(isset($_POST['submit_regist'])) {
        include "Create.html";
// Установка кодировки соединения
        if (isset($_POST['submit_create'])) {
            if (check_password == 1) {
               $log= $_POST['User_login'];
               $pas= $_POST['create_password'];
                connect_bd($log,$pas );
            } else {
                echo "error";
            }
        }
    }
}  //показать личній кабинет
   else {
         if(!empty($_POST['log_out']))

             {
                log_out();
                header('location : index.php ');
             }

    include './profile.html';
    }
