<?php
$dbconn = pg_connect("host=db port=5432 dbname=myappdb user=admin password=pleasechangeme");

if($dbconn)
{
	echo "Connected";
}else{
	echo "Not connected";
}