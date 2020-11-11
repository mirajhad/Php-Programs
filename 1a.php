<?php
$no_day=60*60*20*30+time();
setcookie("visitdate",date("G:i:s a - d/m/y"),"$no_day");
if(isset($_COOKIE["visitdate"]))
{
 $lastvisit=$_COOKIE["visitdate"];
 print "<center><b>your last visit was".$lastvisit;
}
 else
 {
     print "set the cookie";
 }

?>