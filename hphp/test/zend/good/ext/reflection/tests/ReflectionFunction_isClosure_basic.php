<?php <<__EntryPoint>> function main() {
$closure = function($param) { return "this is a closure"; };
$rc = new ReflectionFunction($closure);
var_dump($rc->isClosure());
}
