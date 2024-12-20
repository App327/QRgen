<?php

require_once $_SERVER["DOCUMENT_ROOT"].'/libs/phpqrcode.php';

QRcode::png($_GET["txt"], false, $_GET["level"], $_GET["size"], $_GET["margin"], false);

?>