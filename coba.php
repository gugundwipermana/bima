<?php
	mysql_connect('localhost', 'bimakitc_psi', 'P@ssw0rd571');
	mysql_select_db('bimakitc_db_bima');

	$query = mysql_query('SELECT * FROM users');

	while($row = mysql_fetch_object($query)) {
		echo $row->email;
	}

echo phpinfo();
?>