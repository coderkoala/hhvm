<?php <<__EntryPoint>> function main() {
$obj = new ReflectionExtension('reflection');
$test = $obj instanceof ReflectionExtension;
var_dump($test);
echo "==DONE==";
}
