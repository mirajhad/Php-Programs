<?php
$link = mysqli_connect('localhost','root','','stud');
if(!$link)
{
    echo "unable to connect".PHP_EOL;
    echo "debugging error".mysqli_connect_error().PHP_EOL;
    echo "debugging error".mysqli_connect_errno().PHP_EOL;
    exit;
}
$name = $_POST['name'];
$res = mysqli_query($link, "select * from info where name = '$name'");
if((mysqli_num_rows($res)) == 0)
{
    echo "$name does not exist";
}else{
echo "<table>";
echo "<tr>
<th>Name</th>
<th>addr1</th>
<th>addr2</th>
<th>email</th>
</tr>";
while($arr = mysqli_fetch_row($res))
{
    echo "<tr>
<td>$arr[0]</td>
<td>$arr[1]</td>
<td>$arr[2]</td>
<td>$arr[3]</td>
</tr>";
echo "</table>";
}
}
?>