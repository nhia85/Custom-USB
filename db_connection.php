<?php
$SERVER="localhost";
$USERNAME="root";
$PASSWORD="password01";
$DATABASE="product";

$connection = @mysql_connect($SERVER,$USERNAME,$PASSWORD)
                or die ("connection failed: <br />" . mysql_error());
                
$db  = mysql_select_db($DATABASE,$connection)
        or die ("Error in the database: " . mysql_error());
?>