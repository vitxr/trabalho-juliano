<!-- Aqui é o ph + chama dados etc.-->
<?php
@mysql_connect("localhost", "root", "") or die (mysql_error ());
mysql_select_db("tcc") or die(mysql_error());
?> 