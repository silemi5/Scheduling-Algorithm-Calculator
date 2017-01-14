<?php
    if(isset($_POST['process']) && isset($_POST['algo']))
    {
        $processes = $_POST['process'];
        $algo = $_POST['algo'];
    }
    else
        exit("Error!");
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Input</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        Please fill up AT and BT. If applicable, fill up Priority:
        <table border=1>
            <thead>
                <tr>
                    <th>Process</th>
                    <th>AT</th>
                    <th>BT</th>
                    <th>Priority</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    for($x = 1; $x <= $processes; $x++)
                    {
                        print
                        ("
                            <tr>
                                <td>P" . $x . "</td>
                                <td><input class=\"in\" type=\"number\" name=\"AT" . $x . "\" min=\"0\"></td>
                                <td><input class=\"in\" type=\"number\" name=\"BT" . $x . "\" min=\"0\"></td>
                                <td><input class=\"prio\" type=\"number\" name=\"Pr" . $x . "\" min=\"0\"></td>                 
                            </tr>
                        ");
                    }

                ?>
            </tbody>
        </table>
    </body>
</html>