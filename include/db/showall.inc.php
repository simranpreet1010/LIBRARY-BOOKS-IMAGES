<?php
session_start();
$session_id_to_destroy = 'bookID';
session_id($session_id_to_destroy);

session_destroy();
session_write_close();
header("location: ../../catalog.php");
exit();