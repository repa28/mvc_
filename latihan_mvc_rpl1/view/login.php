<!DOCTYPE html>
<head>silahkan login untuk masuk ke dalam sistem</head>
<body>
    <?php
    echo $reslt;
    ?>
    <form action="" method="POST">
        <p>
            <label>username</label>
            <input id="username" value="" name="username" type="text" required="required" /><br>
        </p>

        <p>
            <label>password</label>
            <input id="password" name="password" type="password" required="required" />
        </p>
        <br />

        <p>
            <button type="submit" name="submit"><span>Login</span></button>
            <button type="reset"><span>reset</span></button>
        </p>
</form>
</body>
</html>