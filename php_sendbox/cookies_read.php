<!DOCTYPE html>
<html>
    <head>
        <title>Reading Cookies</title>
    </head>
    <body>

        <?php
        $var1 = 0;
        if (isset($_COOKIE['test'])) {
            $var1 = $_COOKIE['test'];
        }
        echo $var1;
        ?>
        <?php
        // this will delete the cookie
        setcookie('test', 0, time() - (60 * 60 * 24 * 7));
        ?>

    </body>
</html>

