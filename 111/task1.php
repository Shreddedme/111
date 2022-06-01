<?php
$number = 442158755745;
$int = 4;
echo "В данном числе:"."<br />".substr_count($number, $int);




$ch = 442158755745;
$num = 4;
$result = 0;
settype($ch,'string');
settype($num,'string');
for($i=0;$i<=strlen($ch)-1;$i++){
    if($ch[$i] == $num){
        $result++;
    }
}
echo 'Цифра '.$num.' в числе '.$ch.' встречается '.$result.' раза.';
