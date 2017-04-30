<?php
	$HOSTNAME = 'localhost';
	$USENAME = 'root';
	$PASSWORD = '';
	$DB = 'ums';
	$DBC = mysqli_connect($HOSTNAME,$USENAME,$PASSWORD,$DB);
	if(!$DBC){
		echo "DB Connection Failed!";
	} 
	//for bangla
	mysql_select_db('ums');
	mysql_query('SET CHARACTER SET utf8');
	mysql_query("SET SESSION collation_connection ='utf8_general_ci'"); 
