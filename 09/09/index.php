<?
// Страница авторизации
//if(isset($_POST['submit']) && !empty($_POST['submit'])):
//if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):
//your site secret key
$secret = '6LcpDDIUAAAAAKdiK3oUm_0oSzxQzS5urdMsQriR';
//get verify response data
$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);

// Функция для генерации случайной строки
function generateCode($length=6) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
        $code .= $chars[mt_rand(0,$clen)];
    }
    return $code;
}

// Соединямся с БД
$link=mysqli_connect("localhost", "root", "", "user");

if(isset($_POST['submit']))
{
    // Вытаскиваем из БД запись, у которой логин равняеться введенному
    $query = mysqli_query($link,"SELECT user_id, user_password FROM users WHERE user_login='"
        .mysqli_real_escape_string($link,$_POST['login'])."' LIMIT 1");
    $data = mysqli_fetch_assoc($query);

    // Сравниваем пароли
    if($data['user_password'] === md5(md5($_POST['password'])))
    {
        // Генерируем случайное число и шифруем его
        $hash = md5(generateCode(10));

        // Ставим куки
        //    setcookie("id", $data['user_id'], time()+60*60*24*30);
        //    setcookie("hash", $hash, time()+60*60*24*30,null,null,null,true); // httponly !!!

        // Переадресовываем браузер на страницу проверки нашего скрипта
        header("Location: world.php"); //require_once './fun.php';
        //user($_POST['login']);
        exit();
    }
    else
    {
        print "Вы ввели неправильный логин/пароль";
    }
}   //endif;

//endif;
if(isset($_POST['submit_register']))
{
    header("Location: register.php"); exit();
}

?>
<script src='https://www.google.com/recaptcha/api.js'></script>
<!DOCTYPE html>
<html>
<body>
<head>

    <style>

    </style>
</head>
<form method="POST">
    <div>
        <div >
            Логин <input name="login" type="text"><br>
        </div>
        <div>
            Пароль <input name="password" type="password"><br>
        </div>

        <div>
            <input name="submit" type="submit" value="Войти">
            <input name="submit_register" type="submit" value="Регистрация">
        </div>

     //   <div class="g-recaptcha" data-sitekey="6LcpDDIUAAAAAKdiK3oUm_0oSzxQzS5urdMsQriR"></div>
    </div>
</form>


</body>
</html>
