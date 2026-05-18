<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <style>

        body{
            font-family: Arial;
            background: #fff8e1;

            display:flex;
            justify-content:center;
            align-items:center;

            height:100vh;
        }

        .box{
            background:white;
            padding:30px;
            border-radius:10px;
            width:300px;

            box-shadow:0 0 10px rgba(0,0,0,0.2);
        }

        input{
            width:100%;
            padding:10px;
            margin-top:10px;
        }

        button{
            width:100%;
            padding:10px;
            margin-top:15px;

            background:#ffd54f;
            border:none;

            cursor:pointer;
            font-weight:bold;
        }

    </style>

</head>
<body>

<div class="box">

<h2>Đăng nhập Admin</h2>

<form action="process_login.php" method="POST">

    <input
        type="text"
        name="username"
        placeholder="Username">

    <input
        type="password"
        name="password"
        placeholder="Password">

    <button type="submit">
        Login
    </button>

</form>

</div>

</body>
</html>