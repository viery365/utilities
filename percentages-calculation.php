<?php

if(isset($_POST['submit']) && !empty($_POST['input-value'])){

  ob_start();

    $inputValue = $_POST['input-value'];
    echo '<h1>Input Value ' . $inputValue. '</h1>';

    function getSavings($n, $inputValue){
      return round(($n / 100) * $inputValue, 2);
    }

    $remaining;

    for($i = 1; $i <= 100; $i++){
      $remaining = $inputValue - getSavings($i, $inputValue);
      $calculation = '<h3>Savings: ' . $i . '% = ' . getSavings($i, $inputValue) . ' Mimos: ' . $remaining . '</h3>';
      echo $calculation;
    }

    $output = ob_get_clean();
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Percentages Calculation</title>
  </head>
  <body>
    <form method="post" action="">
      <label for="input-value">LEFT OVER:</label>
        <input id="input-value" type="text" name="input-value">
        <input type="submit" name="submit" value="Check Percentages">
    </form>
    <?=$output ?? ''?>
  </body>
</html>
