<?php
$array=[
        ["a1,a2,a3"],
        ["b1,b2,b3"]
        ];
echo "<pre>";
print_r($array);
echo "</pre>";
$count=count($array);
for ($i=0;$i<$count;$i++) {
    $a = array_merge($array[$i], $array[$i+1]);
}
//print_r($a);
$c=implode(',',$a);
//echo $c;
$d=explode(',',$c);
print_r($d);

?>
