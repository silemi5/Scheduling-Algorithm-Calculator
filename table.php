<?php
    if(isset($_POST['process']) && isset($_POST['algo']))
    {
        $process = $_POST['process'];
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
        <form action="./algo/<?php print($algo); ?>.php" method="POST">
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
                            for($x = 1; $x <= $process; $x++)
                            {
                                print
                                ("
                                    <tr>
                                        <td>P" . $x . "</td>
                                        <td><input class=\"in\" type=\"number\" name=\"AT[]\" min=\"0\"></td>
                                        <td><input class=\"in\" type=\"number\" name=\"BT[]\" min=\"0\"></td>
                                        <td><input class=\"prio\" type=\"number\" name=\"Prio[]\" min=\"0\"></td>                 
                                    </tr>
                                ");
                            }
                        ?>
                </tbody>
            </table>
            Time Quantum: <input class="in" type="number" name="TQ" min="1" value="1">
            <input type="hidden" name="process" value="<?php print($process); ?>">
            <br>
            <input type="submit">
        </form>
    </body>
</html>