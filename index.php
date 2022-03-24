<!DOCTYPE html>
<html lang="en">
<link href="css/monster.css" rel="stylesheet" type="text/css">

<?php



    if($_POST){

        include('player.php');

        session_start();

        //setup database login

        include('db.php');

        //Scrub from data to make it sage gor interacting with out data
        $player1 = mysqli_real_escape_string($mysql, $_POST['player1']);
        $player2 = mysqli_real_escape_string($mysql, $_POST['player2']);





        $result = mysqli_query($mysql, "SELECT * FROM highscores WHERE name='$player1'");



        $player1 = new Player($_POST['player1']);
        $player2 = new Player($_POST['player2']);
        $attackType = $_POST['attack-type'];
        //compare player stats for specific attack type
        //then output a message declaring the winner

        $battleLog = $player1->monster . ' attacks ' . $player2->monster . ' using ' . $attackType;

        //player1 wins
        if($player1->stats[$attackType] > $player2->stats[$attackType]){
            $winner = 1;
            $battleResult = 'Player 1 Wins!';

            //Check highscores to see if player 1 exists
            $sql= "SELECT * FROM highscores WHERE name='$player1->name'";
            $result = mysqli_query($mysql, $sql);

            //true
            if($result->num_rows){
                $sql= "UPDATE highscores SET wins = wins + 1 WHERE name='$player1->name'";
            } else {
                //false
                $sql = "INSERT INTO highscores(name, wins, losses, draws,winRatio) VALUES('$player1->name', 1,0,0,0)";
            }
            $result = mysqli_query($mysql, $sql);


            //Check highscores to see if player 2 exists
            $sql= "SELECT * FROM highscores WHERE name='$player2->name'";
            $result = mysqli_query($mysql, $sql);

            //true
            if($result->num_rows){
                $sql= "UPDATE highscores SET losses = losses + 1 WHERE name='$player2->name'";
            } else {
                //false
                $sql = "INSERT INTO highscores(name, wins, losses, draws,winRatio) VALUES('$player2->name', 0,1,0,0)";
            }
            $result = mysqli_query($mysql, $sql);

        }



        //player 2 wins
        elseif ($player1->stats[$attackType] < $player2->stats[$attackType]){
            $winner = 2;
            $battleResult = '<h2>Player 2 Wins!</h2>';


            //Check highscores to see if player 2 exists
            $sql= "SELECT * FROM highscores WHERE name='$player2->name'";
            $result = mysqli_query($mysql, $sql);

            //true
            if($result->num_rows){
                $sql = "UPDATE highscores SET wins = wins + 1 WHERE name='$player2->name'";

            } else {
                //false
                $sql = "INSERT INTO highscores(name, wins, losses, draws,winRatio) VALUES('$player2->name', 1,0,0,0)";

            }
            $result = mysqli_query($mysql, $sql);

            //Check highscores to see if player 1 exists
            $sql= "SELECT * FROM highscores WHERE name='$player1->name'";
            $result = mysqli_query($mysql, $sql);

            //true
            if($result->num_rows){
                $sql= "UPDATE highscores SET losses = losses + 1 WHERE name='$player1->name'";
            } else {
                //false
                $sql = "INSERT INTO highscores(name, wins, losses, draws,winRatio) VALUES('$player1->name', 0,1,0,0)";
            }
            $result = mysqli_query($mysql, $sql);


        }

        //draw
        else {
            $winner = 0;
            $battleResult = 'Battle was a Draw';

            //Check highscores to see if player 1 exists
            $sql= "SELECT * FROM highscores WHERE name='$player1->name'";
            $result = mysqli_query($mysql, $sql);

            //true
            if($result->num_rows){
                $sql= "UPDATE highscores SET draws = draws + 1 WHERE name='$player1->name'";
            } else {
                //false
                $sql = "INSERT INTO highscores(name, wins, losses, draws,winRatio) VALUES('$player1->name', 0,0,1,0)";
            }
            $result = mysqli_query($mysql, $sql);



            //Check highscores to see if player 2 exists
            $sql= "SELECT * FROM highscores WHERE name='$player2->name'";
            $result = mysqli_query($mysql, $sql);

            //true
            if($result->num_rows){
                $sql= "UPDATE highscores SET draws = draws + 1 WHERE name='$player2->name'";
            } else {
                //false
                $sql = "INSERT INTO highscores(name, wins, losses, draws,winRatio) VALUES('$player2->name', 0,0,1,0)";
            }
            $result = mysqli_query($mysql, $sql);
        }


        include('cards.php');
}
    include('form.php');

 ?>
