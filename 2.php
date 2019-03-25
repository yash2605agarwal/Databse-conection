<html>
<head>
<title>Find Largest & Smallest numbers in an Array  </title>
</head>
<body>
<h3>PHP Program to sorts all even number first, all odd numbers second in ascending order  </h3>
Enter the Numbers separated by Commas <br />
(eg: 12,23,56)
<br /><br />
<form method="post">
<input type="text" name="numbers"/>
<button type="submit">Check</button>
</form>
</body>
</html>

<?php 
	error_reporting(0);
if($_POST)
{
$numbers = $_POST['numbers'];
$array = explode(',', $numbers);
 $even =array();
$odd = array();
foreach ($array as $item)
 {
 if($item%2==0)
 {
  $even[] = $item;
 }
else 
{
  $odd[] = $item;
}
}
usort($even);
usort($odd);
$array_sort = array_merge($even,$odd);
print_r($array_sort);
}
?>
