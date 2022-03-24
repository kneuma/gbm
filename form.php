<head>
<link href="css/monster.css" rel="stylesheet" type="text/css">
</head>


<div class="battle">
<form action="index.php" method="POST" >

<label>Player 1</label>
<input type="text" name="player1" value="<?php if(isset($_POST['player1'])) echo $_POST['player1']; ?>" />

<h4>Attacks </h4>

<label>Player 2</label>
<input type="text" name="player2" value="<?php if(isset($_POST['player2'])) echo $_POST['player2']; ?>" />

 <h4>With</h4>

<select name="attack-type">

  <option value="strength">Strength</option>
  <option value="agility">Agility</option>
  <option value="intelligence">Intelligence</option>

</select>
<br />
<br />

<button>
    Battle
</button>
</div>
