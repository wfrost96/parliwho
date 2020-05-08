<?php
$interest_searched = "";
if(isset($_POST['SubmitButton'])){
  $interest_searched = $_POST['inputText'];
}
?>

<html>
  <head>
  </head>
  <body>
    <form action="" method="post">
      <input list="interests" name="inputText">
      <datalist id="interests">
        <?php include "peers_interests.php" ?>
      </datalist>
      <input type="submit" name="SubmitButton"/>
    </form>

    <?php echo "Peers interested in ". $interest_searched . ":";?>
    <br><br>
    <?php

    $result = json_decode(exec("python search.py $interest_searched"), true);

    $relevant_peers = $result['relevant_peers'];
    echo $relevant_peers;

    #$interest_searched = $result['interest_searched'];
    #echo $interest_searched;

    ?>

  </body>
</html>
