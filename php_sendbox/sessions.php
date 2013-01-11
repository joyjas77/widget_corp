<?php
    session_start();
?>
<html>
    <head>
        <title>Sessions</title>
    </head>
    <body>
        <?php
            $_SESSION['first_name'] = "ivana";
            $_SESSION['last_name'] = "ivana";
        ?>
        <?php
            $name = $_SESSION['first_name'] . " " . $_SESSION['last_name'];
            echo $name;
        ?>
    
    </body>
</html>

