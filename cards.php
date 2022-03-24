
    <head>
        <meta charset="utf-8">
        <title>Monster Battle</title>
    </head>

<body>


<div class="title">
    <h1>Monster Battle</h1>
    <h3><a href="highscores.php">Highscores</a></h3>
</div>

<div class="flexbox">
    <div class="box <?php echo ($winner == 1 ? 'winner' : ''); ?>">

        <div class="flex-title">
            <h1><?php echo $player1->monster; ?></h1>
            <h3>Player 1</h3>
            <h2><?php echo $player1->name; ?></h2>

        </div>

        <div class="player-img">
            <img src="<?php echo 'img/' . strtolower($player1->monster) . '.gif'; ?>" />
        </div><!--End of player-img--->

        <div class="player-attributes">
            <ul>
                <?php
                    foreach($player1->stats as $label=>$stat) {
                        echo '<li>' . $label . ': ' . $stat . '</li>';
                    }
                ?>
            </ul>
        </div><!---End of player attributes--->

        <div class="player-description">

        </div><!---End of player Decription--->


    </div><!---End of box--->

    <div class="box <?php echo ($winner == 2 ? 'winner' : ''); ?>">

        <div class="flex-title">
            <h1><?php echo $player2->monster; ?></h1>
            <h3>Player 2</h3>
            <h2><?php echo $player2->name; ?></h2>
        </div>

        <div class="player-img">

            <img src="<?php echo 'img/' . strtolower($player2->monster) . '.gif'; ?>" />

        </div><!--End of player-img--->

        <div class="player-attributes">
            <ul>
                <?php
                    foreach($player2->stats as $label=>$stat) {
                        echo '<li>' . $label . ': ' . $stat . '</li>';
                    }
                ?>
            </ul>
        </div><!---End of player attributes--->

        <div class="player-description">

        </div><!---End of player Decription--->

    </div><!---End of box--->

</div><!--End of flexbox--->

<div class="title">
    <h4><?php echo $battleLog; ?></h4>
    <h3><?php echo $battleResult; ?></h3>

</div><!---End of title--->

</body>
