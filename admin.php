<?php
session_start();
session_destroy();
  $_SESSION['pseudo'] = $_POST['pseudo'];
  $_SESSION['mdp'] = $_POST['mdp'];
  echo "Salut a toi brave , " . $_SESSION['pseudo'] . " ! ";
?>
<link rel="stylesheet" href="./style.css">

<button type="submit" name="button"><a href="./index.php">Deconnexion</a></button>
<br>
<form class="" action="index.php" method="post">
  <label for="div1">div1:</label>
  <input type="checkbox" name="div1" value=""></input>

  <label for="div2">div2:</label>
  <input type="checkbox" name="div2" value=""></input>

  <label for="div3">div3:</label>
  <input type="checkbox" name="div3" value=""></input>
  
  <button type="submit" name="button">save</button>
</form>


<?php
  include('./template/footer.php');
?>
