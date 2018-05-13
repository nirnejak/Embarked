<?php

if (!defined('SERVERNAME')) define('SERVERNAME', 'localhost');
    if (!defined('USERNAME')) define('USERNAME', 'root');
    if (!defined('PASSWORD')) define('PASSWORD', '');
    if (!defined('DBNAME')) define('DBNAME', 'id3187617_project');

    $conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);

?>