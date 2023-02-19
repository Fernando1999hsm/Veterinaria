<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>usuario</td>
                <td>contra</td>
                <td>nombre</td>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($usuarios as $user){
                    echo "<tr>";
                    echo "<td>".$user['Usuario']."</td>";
                    echo "<td>".$user['Contrasena']."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>