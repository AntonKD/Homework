<?php
// task 1 condition
$age = rand(-100, 100);
$t = rand(1, 3);
echo "</p>".$age."  ";
 if (18<=$age && $age<=59)
{
    switch ($t) {
        case '1':
            echo " A little more and you are free.</p>";
            break;
        case '2':
            echo "You need to try a little more.</p> ";
            break;
        case '3':
            echo " You still have to work and work.</p>";
         break;
        default:
            echo 'error';
            break;
    }
}
 elseif ($age>59 && $age<100)
{
    switch ($t)
    {
        case '1':
            echo "Free.</p>";
            break;
        case '2':
            echo "Where shall we eat? </p> ";
            break;
        case '3':
            echo "You are already an old man</p> ";
            break;
        default:
            echo 'error';
            break;
    }
}
 elseif (1<=$age && $age<=18)
{
    switch ($t)
    {
        case '1':
            echo "You are still a child;</p> ";
            break;
        case '2':
            echo "Rest while you can.</p> ";
            break;
        case '3':
            echo "It's too early for you to work.</p> ";
            break;
          default:
            echo 'error';
            break;
    }
}
elseif ($age<1 || $age>100)
 {
     switch ($t)
     {
         case '1':
             echo "You do not exist yet;</p>";
             break;
         case '2':
             echo "You are a ghost;</p> ";
             break;
         case '3':
             echo "Unknown age</p> ";
             break;
         default:
             echo 'error';
             break;
     }
 }

 //task 1 for && table
$rows = rand(1,10);; //строка
$cols = rand(1,10);; //столбец

$tb= '<table border="1">';

for($i=1;$i<=$rows;$i++)  //строка
{
    $tb .= '<tr>';
    for($j=1;$j<=$cols;$j++) //столбец
    {
        if($i==1 ||$j==1)
           $tb .= '<td  style="background-color:#ffc800;text-align:center;">' .$i*$j.'</td>';
       elseif($i==$j)
           $tb .= '<td style="color:#83ff23;background-color:#802c0a;text-align:center">' .$i*$j.'</td>';
           else
               $tb .= '<td style="text-align:center">'.$i*$j.'</td>';
    }
    $tb.= '</tr>';
}

// task 3 for
$tb .= '</table>';
echo $tb;

for($i=1;$i<50;$i++)
{
    if ($i % 2)
        echo "</p>" . $i;
}
echo"<br>";

for ($i=1; $i <= $rows; $i++)
{

   '<tr>';
    for ($x=1; $x <= $cols; $x++)
    {
        echo '<td>'.$x.'</td>';
    }
    echo "<br>"."  ".'</tr>';

}

// task 4 hit in the area
$a=rand(-5,5); $b=rand(-5,5); // точки
$x=2;$x1=-2;
$y=2;$y1=-2;
$c=0;
$R=1;

//$p=1/2*($x1+$y1);


$z=(($a-$x)^2)+(($b-$y)^2); // точка в круге.
if ($z< (R^2)) echo "</p>  yes "; else echo "</p> no ";

?>