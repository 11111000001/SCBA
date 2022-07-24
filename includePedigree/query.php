<?php
function getlogo()
{
	$select="select * from logo where id=1";
	$return=exec_query(DBNAME,$select);
			return $return;
}

function gethead()
{
	$query="select * from head";
	$resulttext=exec_query(DBNAME,$query);
			return $resulttext;
}		

function getindex_2()
{
	$query="select * from index_2";
	$resultindex2=exec_query(DBNAME,$query);
			return $resultindex2;
}

function getindex_1()
{
	$query="select * from index_1";
	$resultindex2=exec_query(DBNAME,$query);
			return $resultindex2;
}

function getlogo2()
{
	$select="select * from logo where id=2";
	$return=exec_query(DBNAME,$select);
			return $return;
}


function echoconditions()
	{
		$select="select * from conditions";
		$result=exec_query(DBNAME,$select);
			return $result;
	}

function login($client,$password)
	{
		$query="select * from users where name='".$client."'";
		$request=exec_query(DBNAME,$query);
		return $request;
	}


function echotrophy()
	{
		$query="select * from trophy";
		$result=exec_query(DBNAME,$query);
		return $result;	
	}

function echo_organizers()
	{
		$query="select * from organizers";
		$result=exec_query(DBNAME,$query);
		return $result;
	}


?>