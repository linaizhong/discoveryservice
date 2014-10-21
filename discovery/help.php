<?php

require_once('config.php');
require_once('templates.php');
require_once('functions.php');
require_once('languages.php');

    global $langStrings, $language;

if (file_exists('custom-languages.php')){
        require_once('custom-languages.php');
}

    printHeader();

       include('aaf-help.php');

    printFooter();
?>
