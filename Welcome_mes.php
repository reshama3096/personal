<!DOCTYPE html>
<html>
<head>
	<title>Codeigniter</title>
</head>
<body>
	<?php  
	/*echo "<pre>";
	print_r($userdata);  
	echo "</pre>";
	echo "<br>"; 

	echo json_encode($userdata);*/
	foreach ($userdata as $userdata_val) {
		echo $userdata_val['id']."<br>";
		echo $userdata_val['fname']."<br>";
		echo $userdata_val['lname']."<br>";
		echo $userdata_val['created_time']."<br>";
	}
	?>
</body>
</html>