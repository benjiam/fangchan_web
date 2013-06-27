<?php

header('Content-type: text/json');
$s = time();
$arr = Array('a'=>$s,'b'=>2,'c'=>3);

echo json_encode($arr);

?>
