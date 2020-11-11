<?php
session_start();
if(isset($_SESSION['count']))
{
    echo "pageviews".$_SESSION['count'];
    $_SESSION['count']++;
}
else{
    $_SESSION['count']=1;
    echo "pageviews".$_SESSION['count'];
}



?>