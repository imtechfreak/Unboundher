<?php 
$con     = mysql_connect('localhost', 'unboundh_root', 'india123'); 
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('unboundh_unboundher');
?>