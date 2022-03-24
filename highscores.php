<?php

    include('db.php');
    $sql ="SELECT * FROM highscores ORDER BY wins DESC";
    $scoresQuery = mysqli_query($mysql, $sql);

 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Monster Battle Highscores</title>

        <link href="css/monster.css" rel="stylesheet" type="text/css">
    </head>
    <body>

        <div class="title">
            <h1>Monster Battle Highscores</h1>
        </div>

        <table>

            <thead>
                <tr>
                    <th>Rank</th>
                    <th>Name</th>
                    <th>Wins</th>
                    <th>Draws</th>
                    <th>Losses</th>
                    <th>Ratio</th>

                </tr>
            </thead>

            <tbody>
                <?php

                    $i = 1;
                    while($result = $scoresQuery->fetch_assoc()){

                 ?>

                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $result['name']; ?></td>
                        <td><?php echo $result['wins']; ?></td>
                        <td><?php echo $result['draws']; ?></td>
                        <td><?php echo $result['losses']; ?></td>
                        <td><?php echo $result['winRatio']?></td>

                    </tr>

                <?php

                    $i++;

                    }

                 ?>
            </tbody>
        </table>

    </body>
</html>
