<?php

$rand=rand();
$file=fopen('reset_pass.txt', 'a');
fwrite($file, $rand.PHP_EOL);
fclose($file);
if(isset($_POST['submit'])){
	$user=$_POST['ok'];
	//echo($user);
	$file=fopen('images/user.csv', 'r');
	//var_dump($data);exit;
	$username = array();
	while($data = fgetcsv($file)){
		array_push($username, $data[0]);
	}
	//var_dump($username);exit;

	if(in_array($user,$username)){
		echo $url='<a href="http://localhost/15-01-2020/students_result/get_code.php?code='.$rand.'">http://localhost/15-01-2020/students_result/get_code.php?code='.$rand.'</a>';
		//header('Location: get_code.php');
	}else{
		header('Location: login.php');
	}

}


// 1. create a form to get username from user
// 2. read the user.csv file and check whether the username match or not 
// 3. if matched then echo the following url 
// 4. otherwise redirect to the login page 


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action=""method="post">
		Username:<br><input type="text"name="ok"><br>
		<input type="submit"name="submit"value="submit">
		
	</form>
	
</body>
</html>