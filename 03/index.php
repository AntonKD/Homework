<?php
// task 1
for ($i=1; $i<=112; $i=$i+3)
{
    if($t<2147)
    {
        $t=$t+$i;
        echo "</p> sum = ".$t;

    }
    else break;
}
echo "<hr>";
// task 2
$r=rand(1, 20);
for ($i=0; $i<$r; $i++)
{
    if ($i%2 !=0)
    { $am[$i]=1;
        echo "</p> am"."[".$i."] =".$am[$i] ;
    }
    else
    { $am[$i]=0;
        //echo "</p>".$am[$i];
        echo "</p> am"."[".$i."] =".$am[$i] ;
    }
}
echo "<hr>";
// task 3
$r=rand(1, 25);
for ($i=0; $i<$r; $i++)
{
    $at[$i]= pow($i,2);
    echo "</p> at"."[".$i."] =".$at[$i] ;
}
echo "<hr>";
// task 4
$r=rand(1, 15); $pro=1;
for ($i=0; $i<$r; $i++)
{   $at[$i]=rand(1, 15);
    $sum+=$at[$i];
    $pro*=$at[$i];
    echo "</p> sum =".$sum."  "." pro = ".$pro ;
}
echo "<hr>";
// task 5
$r=rand(1, 9);

for ($i=0; $i<$r; $i++)
{   $az[$i]=rand(1, 5);
    $ab[$i]=$az[$i];
 /*   $ag[$i]=$az[$i];
    echo "</p> ATTTTt ".$ag[$i];*/
    for ($j=0; $j<$r; $j++)
    {
        if( $az[$i]== $ab[$j] && $i!=$j )
        {
            $az[$i]=null;
           // echo "</p> az =".$az[$i];
        }
       // else  echo "</p> az =".$az[$i];
    }
    echo "</p> az =".$az[$i] ;
}




echo "<hr>";
// task 6
$r=rand(1, 9);$k=0;
for ($i=0; $i<$r+$k; $i++)
{
    $au[$i] = rand(-5, 5);
}
for ($i=0; $i<$r+$k; $i++)
{       if( $au[$i]<0)
        {   $k++;
           for ($j=$r+$k-1; $j>$i; $j--)
           {
               $au[$j] = $au[$j-1] ;

           }
            $au[$i+1]=0;
        }

    echo "</p> au =".$au[$i] ;

}
//echo "<hr>";

// task 7
$bmv =
    [
        'model'=> 'X',
        'speed'=> 120,
        'doors'=> 5,
        'years'=> 2006
    ];

$toyota =
    [
        'model'=> 'Carina',
        'speed'=> 130,
        'doors'=> 4,
        'years'=> 2007
    ];

$opel=
    [
        'model'=> 'Corse',
        'speed'=> 140,
        'doors'=> 5,
        'years'=> 2007
    ];
echo "<hr>";
echo "Name bmv"." Model ".$bmv['model']." Speed ".$bmv['speed']." Doors ".$bmv['doors']." Years ".$bmv['years'];
//echo "</p>".$bmv['speedds'];11111111111
echo "<hr>";
//task 8
$car =
    [
        'bmv' =>
            [
                'model'=> 'X5',
                'speed'=> 120,
                'doors'=> 5,
                'years'=> 2006
            ],
        'toyota' =>
            [
                'model'=> 'Carina',
                'speed'=> 130,
                'doors'=> 4,
                'years'=> 2007
            ],
        'opel'=>
            [
                'model'=> 'Corse',
                'speed'=> 140,
                'doors'=> 5,
                'years'=> 2007
            ],

    ]

?>




<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, use  r-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>car</title>
</head>
<body>
<p>task 7</p>
<p>   <?="Name bmv"." Model ".$bmv['model']." Speed ".$bmv['speed']." Doors ".$bmv['doors']." Years ".$bmv['years']?>  </p>
<p>   <?="Name toyota "." Model ".$toyota['model']." Speed ".$toyota ['speed']." Doors ".$toyota ['doors']." Years ".$toyota ['years']?>  </p>
<p>   <?="Name opel "." Model ".$opel['model']." Speed ".$opel['speed']." Doors ".$opel['doors']." Years ".$opel['years']?>  </p>
<hr>
<p>task 8</p>
<?foreach($car as $ar => $m):?>
      <p>   <?="Name ".$ar ." Model ".$m['model']." Speed ".$m['speed']." Doors ".$m['doors']." Years ".$m['years']?>  </p>
<?endforeach?>



</body>
</html>


