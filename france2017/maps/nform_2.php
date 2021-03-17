<!DOCTYPE html>
<html>
<body>


<?php

$data = $_POST['choix_des_departements'];
foreach ($_POST['choix_des_departements'] as $selected_option) {
    echo $selected_option;
}

?>
<!-- This is a comment -->
<!-- scrip uses chosen library -->
<h3>Pour les départements <?=$data?> <p> Choisissez un ou plusieurs communes <p/> </h3>


<form method="GET" action="https://elections-pres-france17.herokuapp.com/">
  <input type="hidden" name="key1" value="70" />
  <input type="hidden" name="key2" value="69" />
  <input type="submit" name="submit" value="c'est parti!" />
</form>



</body>
</html>
