<!DOCTYPE html>
<html>
    <head>
        <title>Functions2</title>
    </head>
    <body>
        <?php
            // using globals
            $bar = "outside";
            function foo() {
                global $bar;
                $bar = "inside";
            }
            foo();
            echo $bar . "<br />";
            
        ?>
        <br />
        <?php
        // using local variables, arguments and return values
            $bar = "outside";
            function foo2($var) {
                $var = "inside";
                return $var;
            }
            $bar = foo2($bar);
            echo $bar . "<br />";
            
        ?> 
        <br />
        <?php
            function paint($color="red", $room="office") {
                echo "the color of the {$room} is {$color}.";
            }
            paint("blue", "bedroom");
        ?>
    </body>
</html>

