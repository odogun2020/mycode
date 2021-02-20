<?php
echo "<strong><em>WELCOME TO RECHARGE PIN GENERATOR</em></strong>";
echo "</br>";
echo "</br>";
echo "</br>";

function card_pin($len = (12)){
    $num = range(0,10);
    shuffle($num);
    return implode('', array_slice($num, 0, $len));
}

for ($i=1; $i<=200; $i++) {
    echo  $i . " ". "<strong>PIN:</strong>". card_pin(12).PHP_EOL."</br></br>";
}

?>