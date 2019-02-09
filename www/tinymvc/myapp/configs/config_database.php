<?php

/**
 * database.php
 *
 * application database configuration
 *
 * @package		TinyMVC
 * @author		Monte Ohrt
 */

$config['default']['plugin'] = 'TinyMVC_PDO'; // plugin for db access
$config['default']['type'] = 'mysql';      // connection type
$config['default']['host'] = 'mysql';  // db hostname
$config['default']['name'] = 'bdayproject';     // db name
$config['default']['user'] = 'root';     // db username
$config['default']['pass'] = 'root';     // db password
$config['default']['persistent'] = false;  // db connection persistence?

?>