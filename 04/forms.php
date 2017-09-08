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

<?php if(!isset($_POST['submit']))
{ ?>
    <form action="forms.php" method="post">
        <div class="container">

            <div class="form-group">
                <label for="City">City</label>
                <input required type="text" class="form-control" name="city" id="city"  placeholder="Please enter you City"
                       value="<?=isset($_POST['city']) ? $_POST['city'] : ''?>">
            </div>

            <div class="form-group">
                <label for="Name">Name</label>
                <input required type="text" class="form-control" name="Name" id="Name"  placeholder="Please enter you Name"
                       value="<?=isset($_POST['Name']) ? $_POST['Name'] : ''?>">
            </div>


            <div class="form-group">
                <label for="Age">Age</label>
                <input required type="number" class="form-control" name="Age" id="Age"  placeholder="Please enter you Age"
                       value="<?=isset($_POST['Age']) ? $_POST['Age'] : ''?>">
            </div>

            <div class="form-group">

                <label for="Message">Message</label>
                <textarea required id="Message" class="form-control" name="Message" >
                    <?=isset($_POST['Message']) ? $_POST['Message'] : ''?></textarea>
            </div>

            <input type="submit" class="btn btn-primary" name="submit" value="submit">
        </div>
    </form>
    <?
} else { echo "<p style='text-align:center;'>" . "Hi " . $_POST['Name'];
    "</p>";
    echo "<p style='text-align:center;'>" . "Hi " . $_POST['Name'] . " you " . $_POST['Age'] . " Age</p>";

    echo "<p style='text-align:center;'>" . "You massager " . htmlentities($_POST['Message'], ENT_QUOTES);
    "</p>"; }  ?>





<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>






