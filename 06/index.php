<?php $b=0;
function test(){
    global $b;
    if (!$_POST['first_name'])
    {
        echo "</br> Вы не ввели имя.";
    }else $b+=1;
    if (!$_POST['last_name'])
    {
        echo "</br> Вы не ввели фамилию.";
    }else $b+=1;
    if (!$_POST['position'])
    {
        echo "</br> Вы не ввели должность.";
    }else $b+=1;

}
/*function create($list)

   {

       $file = fopen('file.csv', 'w');

       foreach ($list as $fields) {
           fputcsv($file, $fields);
       }

       fclose($file);
   }*/

function read ($files)

{    $file=fopen('file.csv','r' );

    while ($row = fgetcsv($file))
    {

        var_dump($row);
    }

    fclose($file);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>

<form method="post">
    <div class="container">

        <div class="form-group">
            <label for="first_name">Имя</label>
            <input type="text" class="form-control" name="first_name" id="first_name" >
        </div>

        <div class="form-group">
            <label for="last_name">Фамилия</label>
            <input type="text" class="form-control" name="last_name" id="last_name">
        </div>

        <div class="form-group">
            <label for="position">Должность</label>
            <input type="text" class="form-control" name="position" id="position">
        </div>

        <input type="submit" class="btn btn-primary" name="отправить" value="отправить">
        <input type="submit" class="btn btn-primary" name="загрузить" value="загрузить">

        <?php if(!isset($_POST['отправить']))
        {



        } else {
            test();
            if($b==3){
                $file = fopen('file.csv', 'w+');

                $list = [
                    'name' => $_POST['first_name'],
                    'surname' => $_POST['last_name'],
                    'position' => $_POST['position'],
                ];



                fputcsv($file, $list);


                fclose($file);
                //create($list);
            }
        }
        if (!isset($_POST['загрузить'])) {

        } else {
            "</br>" . read($file);
        }

        ?>

    </div>
</form>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>






