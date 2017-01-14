<?php
    if(isset($_POST['process']))
    {
        $process = $_POST['process'];
    }
    else
        exit("Error!");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <?php
            print($process);
        ?>
    </body>
</html>