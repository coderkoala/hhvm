<?php <<__EntryPoint>> function main() {
$fragment = new DOMDocumentFragment();
try { $fragment->appendXML(); } catch (Exception $e) { echo "\n".'Warning: '.$e->getMessage().' in '.__FILE__.' on line '.__LINE__."\n"; }
}
