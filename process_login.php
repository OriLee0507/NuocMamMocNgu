<?php

$serverName = "localhost\\SQLEXPRESS";

$connectionOptions = array(
    "Database" => "mocngu",
    "Uid" => "",
    "PWD" => ""
);

$conn = sqlsrv_connect($serverName, $connectionOptions);

if($conn === false){

    die(print_r(sqlsrv_errors(), true));

}

$username = $_POST['username'];

$password = $_POST['password'];

$query = "
SELECT *
FROM users
WHERE username='$username'
AND password='$password'
";

$result = sqlsrv_query($conn, $query);

if(sqlsrv_has_rows($result)){

    echo "<h1>Đăng nhập thành công</h1>";

}else{

    echo "<h1>Sai tài khoản hoặc mật khẩu</h1>";

}

?>