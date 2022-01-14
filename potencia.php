<?php
function pot($x, $y) {
    if (!is_int($y)) {
        return "Numero não é inteiro";
    }
    if ($y < 0) {
        $x = 1 / sx;
        $y = $y * -1;
    }
    $total = 1
    for ($i = 0; $i<$y;$i++){
        $result = $x * $result;
    }
   return $result;
}
$num1 = (int) $_post('num1');
$num2 = (int) $_post('num2');

$pot = $pot($num1, $num2);
?>