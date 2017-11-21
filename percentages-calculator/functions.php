<?php

function getSavings($n, $inputValue){
  return round(($n / 100) * $inputValue, 2);
}
