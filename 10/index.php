<?php
$files[] = "D:\Homework";
$results;




$max_iterations = 1000;
$i = 0;
while(count($files)) {
    $i++;
    $file = array_shift($files);

    $results.=$file.PHP_EOL;
    //$results.=$file."\r\n".PHP_EOL;
    //$results.=$file."</br>";
   // $results.=$file."\r\n</br>".PHP_EOL;
    if (is_dir($file)) {
        $files_tmp = scandir($file);
        foreach ($files_tmp as $file_tmp) {
            if ($file_tmp == '.' || $file_tmp == '..') {
                continue;
            }

            $files[] = $file . DIRECTORY_SEPARATOR . $file_tmp;

           


        }
    }
    if ($i > $max_iterations) {
        break;
    }
}

$pattern = '/[A-Z0-9]{1,}/';

preg_match($pattern,$results );
//
//if(
print_r($results);
//  echo "</br>";}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <pre><?= $results ?></pre>
</body>

