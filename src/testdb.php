<?php
$dbconn = pg_connect("host=db port=5432 user=postgres password=postgres");

if($dbconn)
{
	echo "Connected";
}else{
	echo "Not connected";
}