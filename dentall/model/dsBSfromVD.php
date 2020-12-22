
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>

<?php 

$values = $_POST;
print_r($values);

$chuyenJson = json_encode($values,256);  

$key ="";
foreach ($values as $value) {
	# code...
	//echo $value;
	foreach ($value as $value) {
		# code...
		$key = $key ." - ". $value; 
		
		
	}
}

$key1 = substr($key,1);
$key2 = substr($key1,1);
echo $key2;



?>

</body>
</html>
