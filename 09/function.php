<?php

function is_user_logged_in()
{
    return !empty($_SESSION['user_id']);

}

function login_in($id = null)
{
    $id= $id ?? microtime(true);
    $_SESSION['user_id']= (int)$id;

}

function get_user_name()
{
    if(!is_user_logged_in())
    {
        return '';
    }
    return $_SESSION['user_id'];

}

function log_out()
{

    $_SESSION['user_id']=null;
}

function generateCode($length=6) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
        $code .= $chars[mt_rand(0,$clen)];
    }
    return $code;
}

function login()
{

$link=mysqli_connect("localhost", "root", "", "test");

if(isset($_POST['submit']))
{
    // Вытаскиваем из БД запись, у которой логин равняеться введенному
    $query = mysqli_query($link,"SELECT user_id, user_password FROM users WHERE user_login='".mysqli_real_escape_string($link,$_POST['login'])."' LIMIT 1");
    $data = mysqli_fetch_assoc($query);

    if($data['user_password'] === md5(md5($_POST['password'])))
    {
        // Генерируем случайное число и шифруем его
        $hash = md5(generateCode(10));

            }
    else
    {
        print "Вы ввели неправильный логин/пароль";
    }
}
}



function create()
{


    $link=mysqli_connect("localhost", "root", "", "test");

    if(isset($_POST['submit']))
    {
        $err = [];

        // проверям логин
        if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['login']))
        {
            $err[] = "Логин может состоять только из букв английского алфавита и цифр";
        }

        if(strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30)
        {
            $err[] = "Логин должен быть не меньше 3-х символов и не больше 30";
        }

        // проверяем, не сущестует ли пользователя с таким именем
        $query = mysqli_query($link, "SELECT user_id FROM users WHERE user_login='".mysqli_real_escape_string($link, $_POST['login'])."'");
        if(mysqli_num_rows($query) > 0)
        {
            $err[] = "Пользователь с таким логином уже существует в базе данных";
        }

        // Если нет ошибок, то добавляем в БД нового пользователя
        if(count($err) == 0)
        {

            $login = $_POST['login'];

            // Убераем лишние пробелы и делаем двойное шифрование
            $password = md5(md5(trim($_POST['password'])));

            mysqli_query($link,"INSERT INTO users SET user_login='".$login."', user_password='".$password."'");
            header("Location: login.php"); exit();
        }
        else
        {
            print "<b>При регистрации произошли следующие ошибки:</b><br>";
            foreach($err AS $error)
            {
                print $error."<br>";
            }
        }
    }
}