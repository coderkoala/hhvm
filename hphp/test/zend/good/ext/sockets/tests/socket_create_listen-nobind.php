<?php <<__EntryPoint>> function main() {
$sock = socket_create_listen(80);
error_reporting(0);
unlink(dirname(__FILE__) . '/006_root_check.tmp');
}
