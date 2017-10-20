<?php

    class change_name
    {   public function __construct()
        {

            static $calls = 0;
            $calls++;
            return $calls;
            //echo $calls;
        }


    }


    class children_change_name extends change_name
    {
        public  function convert_text()
        {  //массив анг

            $eg_bg = array('Y','E','X','A', 'P','O','C','T','N',);
            $eg_sm = array('y','e','x','a', 'p','o','c','t','n',);
            //массив руск
            $ru_bg= array('У','Е','Х','А', 'Р','О','С','Т','И',);
            $ru_sm= array('у','е', 'х','а','р','о','с','т','и',);
            //массив руск
            $myvar=$this->myvar;

            if(!empty($_POST['text1'])){
                if(preg_match('/^[a-zA-Z]{1,}+$/D',$myvar))
                {  echo 'Английские буквы есть'."</br>";
                    if(preg_match('/^[a-z]+$/D',$myvar))
                    {              echo 'буквы маленькие'."</br>";

                        echo(str_ireplace ($eg_sm, $ru_bg, $myvar));
                    }
                    else{
                        echo 'буквы большие '."</br>";
                        echo(str_ireplace ($eg_bg, $ru_sm, $myvar)); }

                }
                else {
                    if(preg_match('/^[a-zA-Z]+$/u',$myvar)){
                        echo 'Руские буквы есть'."</br>";
                        if(preg_match('/^[a-z]+$/uD',$myvar))
                        {              echo 'буквы большие '."</br>";

                            echo(str_ireplace ($ru_bg,$eg_sm, $myvar));
                        }
                        else{
                            echo 'буквы маленькие '."</br>";
                            echo(str_ireplace ( $ru_sm,$eg_bg, $myvar)); }
                        // echo(str_ireplace ($is,$sm, $myvar));
                    }else{echo 'некоректные данные '."</br>";}
                }

            } else { echo 'Ведите текст'."</br>";}

        }
    }



if(!empty($_POST['submit'])) {
    $text = $_POST['text1'];
    $var_text=str_split($text);
    //var_dump($var_text);

    foreach ($var_text as $item)
    {
        $item= new children_change_name();
    }
    $class_convert_text = new children_change_name();
    $class_convert_text->myvar = $text;

    $class_convert_text->convert_text();



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
    <input name="text1" type="text"><br>
        </div>
      <div>
            <input name="submit" type="submit" value="Войти">
      </div>
    </div>
</form>
</body>
</html>