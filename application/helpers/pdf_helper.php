<?php

require_once APPPATH.'helpers/dompdf/lib/html5lib/Parser.php';
require_once APPPATH.'helpers/dompdf/lib/php-font-lib/src/FontLib/Autoloader.php';
require_once APPPATH.'helpers/dompdf/lib/php-svg-lib/src/autoload.php';
require_once APPPATH.'helpers/dompdf/src/Autoloader.php';
Dompdf\Autoloader::register();
use Dompdf\Dompdf;

function dompdf() {
    return new Dompdf();
}
