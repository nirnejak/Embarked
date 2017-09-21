<?php

if (!defined('SERVERNAME')) define('SERVERNAME', 'localhost');
    if (!defined('USERNAME')) define('USERNAME', 'root');
    if (!defined('PASSWORD')) define('PASSWORD', '');
    if (!defined('DBNAME')) define('DBNAME', 'attendance2');

    $conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);

?>