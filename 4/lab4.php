<?php
$link = mysqli_connect("localhost","root","","stud3");
if(!$link)
{
    echo "error".PHP_EOL;
    echo "debugging error".mysqli_connect_error().PHP_EOL;
    echo "debugging error".mysqli_connect_errno().PHP_EOL;
    exit;
}
$name = $_POST['name'];
$studs = simplexml_load_file("http://localhost/php/4/lab4.xml");
foreach($studs as $stud)
{
    $name = $stud->name;
    $usn = $stud->usn;
    mysqli_query($link, "insert into info values('$name','$usn')");
}
$name = $_POST['name'];
$res = mysqli_query($link, "select * from info where name = '$name'");
if(mysqli_num_rows($res) == 0)
{
    echo "doest not exist";
}
else {
    echo "<table>";
    echo "<tr>
    <td>name</td>
    <td>usn</td>
    </tr>";
    while($arr= mysqli_fetch_row($res))
    echo "<tr>
    <td>$arr[0]</td>
    <td>$arr[1]</td>
    </tr>";
   echo  "</table>";
}



?>