<? php

required_once 'php/functions.php';

if($_POST)
{
	if(isset($_POST['user']))
	{
		$user=strtolower($_POST['user']);

		$query="select * from Users where fbsql_username='$user'";
		$result=queryMysql($query);

		if(mysqli_num_rows($result)==0)
		{
			echo 'true';

		}
		else{
			echo 'false'
		}
	}
}
?>