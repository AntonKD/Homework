<?php $log='us';$pa='Pas25';  ?>
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

    <?php echo "user= ".$log."       pas= ".$pa;if(!isset($_POST['ok']))
    { ?>
        <form method="post">
            <div class="container">

                <div class="form-group">
                    <label for="login">login</label>
                    <input required type="text" class="form-control" name="login" id="login"  placeholder="Please enter you login"
                           value="<?=isset($_POST['login']) ? $_POST['login'] : ''?>">
                </div>

                <div class="form-group">
                    <label for="Pass">Password</label>
                    <input required type="text" class="form-control" name="Pass" id="Pass"  placeholder="Please enter you Password"
                   value="<?=isset($_POST['Pass']) ? $_POST['Pass'] : ''?>">
                </div>

                 <input type="submit" class="btn btn-primary" name="ok" value="ok">
            </div>
        </form>
         <?
                } else
                    {
            if($log==$_POST['login'] && $pa == $_POST['Pass']) {
                require "forms.php"; }
            else

                echo    "password and login error";

        }
         ?>





<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>






