<?php

include("config.php");
if($con)
{
	echo "Connected";
}
$admin ="admin";
$pwd="8cb2237d0679ca88db6464eac60da96345513964";
    $sql_command="SELECT authority_level FROM cz_login WHERE login_user_id = '$admin' and login_passkey = '$pwd'";
    

    $result = mysqli_query($con,$sql_command);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
echo $row['authority_level'];
