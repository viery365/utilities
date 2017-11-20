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

require 'percentages-calculation.view.php';
