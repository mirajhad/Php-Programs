<?php
$link = mysqli_connect('localhost','root','','web');
if(!$link)
{
echo "error unable to connect" .PHP_EOL;
echo "debugging error" .mysqli_connect_errno() .PHP_EOL;
echo "debugging error" .mysqli_connect_error() .PHP_EOL; 
exit;
}
$name = $_POST['name'];
$age = $_POST['age'];
echo "Inserted successfully";
$query = "insert into age_info values('$name','$age')";
mysqli_query($link, $query) or die(mysqli_error());
$res = mysqli_query($link, "select * from age_info");
echo "<table>";
echo "<tr>
<td>name</td>
<td>age</td>
</tr>";
while($arr = mysqli_fetch_row($res))
echo "<tr>
<td>$arr[0]</td>
<td>$arr[1]</td>
</tr>";

echo "</table>";
?>