<?php

$a = "abc";

echo sha1($a);

echo "</br>\n";

for($i=0; $i<10; $i++) {

   $a = sha1($a);
}

echo $a;

?>
