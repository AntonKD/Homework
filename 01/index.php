 <html><body>
<?php

// 1 задание.
      $nanme ='Anton'; $age = 22;
echo "1 task </p> "."My name is = $nanme </p>"."My age  = $age </p>";

// 2 задание
        $a=10; $s=1/4*$a*sqrt(3);
echo "2 task </p>"." Area of a triangle = $s </p>";

// 3 задание
        $a= 2; $c=2; $b=5;
if ($a<$c)
    {
        $x = $a+$b/ $c*$a;
        echo  "3.1 task a < c = $x";
    }
else
    if ($a==$c)
    {
        $x =100;
        echo  "3.2 task a = c = $x";
    }

else if ($a>$c)
    {   $x =$c*(3*$b)+$c/$c*sqrt($c);
        echo  "3.3  task a > c = $x";
    }
"</br></br></br></br></br>"
?>




<form action="index.php" method="post">

    </p>You name = <input type="text" name="Name" />
    </p>You age = <input type="text" name="Age" />
    </p>A = <input type="text" name="A" />
    </p>B = <input type="text" name="B" />
    </p>C = <input type="text" name="C" />

    </p><input type="submit" />

    <?php
   // echo htmlspecialchars
     echo "</p> My name = ".$_POST['Name']."</p> My age = ".$_POST['Age']; // вывод имени и возраста на экран


     echo "</p> A = ".$_POST['A']."</p> B = ".$_POST['B']."</p> C = ".$_POST['C'];//вывод данных на икран

    // 2 задание
    $s=1/4*$_POST['A']*sqrt(3);
    echo "</p>"." Area of a triangle = $s </p>";

    // 3 задание
    $a= $_POST['A']; $c=$_POST['C']; $b=$_POST['B'];
    if ($a<$c)
    {
        $x = $a+$b/ $c*$a;
        echo  "3.1 task a < c = $x";
    }
    else
        if ($a==$c)
        {
            $x =100;
            echo  "3.2 task a = c = $x";
        }

        else if ($a>$c)
        {   $x =$c*(3*$b)+$c/$c*sqrt($c);
            echo  "3.3  task a > c = $x";
        }
    ?>
</form>

</body></html>

