<?php <<__EntryPoint>> function main() {
$h = new RecursiveArrayIterator(array());
$x = new reflectionmethod('RecursiveArrayIterator', 'asort');
$z = $x->invoke($h);
echo "DONE";
}
