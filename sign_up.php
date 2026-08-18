<?php include 'process.php';?>

<html>
<head>
    <title>Resepku</title>
    <style>
        .form{
            width: 250px;
            height: 100px;
            margin: auto;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .user, .pass{
            display: flex;
            width: 100%;
            justify-content: space-between;
        }
    </style>
</head>
<body>
<form action="" method="post">
    <div class="form">
        <div class="user">
            <label>Username: </label>
            <input type="text" name="user" required>
        </div>
        <div class="user">
            <label>Email: </label>
            <input type="email" name="email" required>
        </div>
        <div class="pass">
            <label>Password: </label>
            <input type="text" name="pass" required>
        </div>
        <input type="submit" name="dor" value="Daftar">
    </div>
</form>

</body>
</html>