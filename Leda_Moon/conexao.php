<!-- Aqui é o ph + chama dados etc.-->
<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "tcc";
$connection =mysql_connect("localhost", "root", "") or die (mysql_error ());
mysql_select_db("tcc") or die(mysql_error());
?> 