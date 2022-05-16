<?php

function conectar(){

	$user="root";
	$pass="";
	$server="donovan.ns.cloudflare.com";
	$db="articulos";
	$con=mysql_connect($server,$user,$pass) or die ("Error al conectar a la ase de datos".mysql_error());
	mysql_select_db($db,$con);

	return $con;
}
