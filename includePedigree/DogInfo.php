<?php
  
include_once('include/config.php');
include_once('include/connection.php');
include_once('include/global.php');
  
    if($_SERVER['REQUEST_METHOD'] == "GET")
    {
       
       $gender = $_GET['gender'];
       $inputValue = $_GET['inputValue'];

		$fatherArr="";
		$query = "SELECT * FROM dogs WHERE dg='".$gender."' and UPPER(dn) = UPPER('".$inputValue."')";
		$request = exec_query(DBNAME,$query);
		while($row = mysqli_fetch_array($request)){
			$fatherArr  = array(
                    'df' => $row['df'],
                    'dm' => $row['dm'],
                    'mn' => $row['mn'],
                    'drn' => $row['drn'],
                    'wt' => $row['wt'],
                    'hd' => $row['hd'],
                    'ed' => $row['ed'],
                    'dna' => $row['dna'],
                    'kkl' => $row['kkl']
             );
            //$responseData =$row['dn'].",".$row['df'].",".$row['dm'];
		}


        $jsonstring = json_encode($fatherArr);
        echo $jsonstring;
		
       	}
?>


