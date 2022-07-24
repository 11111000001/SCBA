<?php
function exec_query($db,$query)
{
$con = mysqli_connect("localhost", "root", "","scbaupdated");

//$con = mysqli_connect("localhost", "kinderah_SCBA", "147Ff741!","kinderah_SCBA");

if(!$con)
die ("Eroor while connecting".mysqli_error($con));
mysqli_query($con,"SET collation_connection = utf8_general_ci");
mysqli_set_charset($con,"utf8");
$r= mysqli_query($con,$query);
if(!$r)
	die("error in query: ".$query." Error: ".mysqli_error($con));
mysqli_close($con);
return $r;
}


//exec_query(DBNAME,$query);

// DB connection here
?>