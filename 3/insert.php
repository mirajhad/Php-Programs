<?php
$link = mysqli_connect('localhost','root','','stud');
if(!$link)
{
    echo "unable to connect".PHP_EOL;
    echo "debugging error".mysqli_connect_errno().PHP_EOL;
    echo "debugging errot".mysqli_connect_error().PHP_EOL;
    exit;
}
$name = $_POST['name'];
$addr1 = $_POST['addr1'];
$addr2 = $_POST['addr2'];
$email = $_POST['email'];
echo "inserted successfully";
$query = "insert into info values('$name','$addr1','$addr2','$email')";
mysqli_query($link, $query) or die($mysqli_error());
$res = mysqli_query($link,"select * from info");
echo "<table>";
echo "<tr>
<td>name</td>
<td>addr1</td>
<td>addr2</td>
<td>email</td>
</tr>";
while($arr = mysqli_fetch_row($res))
echo "<tr>
<td>$arr[0]</td>
<td>$arr[1]</td>
<td>$arr[2]</td>
<td>$arr[3]</td>
</tr>";
echo "</table>";
?>