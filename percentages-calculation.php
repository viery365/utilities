<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Percentages Calculation</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
  </head>
  <body>
    <form method="post" action="">
      <label for="input-value">LEFT OVER:</label>
        <input id="input-value" type="text" name="input-value">
        <input type="submit" name="submit" value="Check Percentages">
    </form>
    <?php if(isset($_POST['submit']) && !empty($_POST['input-value'])):
      $inputValue = $_POST['input-value'];
      echo '<h1>Input Value ' . $inputValue. '</h1>';

      function getSavings($n, $inputValue){
        return round(($n / 100) * $inputValue, 2);
      }

      function getMimos($n, $inputValue){
        $savings = getSavings($n, $inputValue);
        return $inputValue - $savings;
      }
      for($i = 1; $i <= 100; $i++){
        echo '<h2>Savings: ' . $i . '% = ' . getSavings($i, $inputValue) . ' Mimos: ' . getMimos($i, $inputValue) . '</h2>';
      }
      ?>
  <?php endif; ?>
  </body>
</html>
