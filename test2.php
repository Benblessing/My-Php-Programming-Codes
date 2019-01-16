<?php
    session_start();
    $_SESSION['user'] =  $_POST['user'];
?>
<html>
    <head></head>
    <body>
        <form action="test2.php" method="post">
            <input type="text" name="user" />
            <button type="submit">login</button>
        </form>
        <a href="test3.php">test 3</a>
    </body>
</html>