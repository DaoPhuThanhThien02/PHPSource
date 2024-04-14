<!DOCTYPE html>
<html>
    <body>
        <?php
        $txt = "Hanoi";
        echo "T love $txt";
        ?>
        <?php
        $txt = "Hanoi";
        echo "I love ". $txt ."!" ;
        ?>
        <?php
        $x = 5;
        $y = 4;
        echo $x + $y ;
        ?>
        <?php
        $x = 5;
        $y = "Jonh";
        echo $x;
        echo "<br>";
        echo $y;
        ?>
        <?php
        var_dump(5);
        var_dump("John");
        var_dump(3.14);
        var_dump(true);
        var_dump([2,3,56]);
        var_dump(NULL);
        ?>
        <?php
        $c = $y = $z = "Fruit";
        echo $c;
        echo "<br>";
        echo $y;
        echo "<br>";
        echo $z;
        ?>
        <?php
        $a = 5;

        function myTest() {
            global $a;
            echo "<p> Variable x inside function is: $a</p>";
        }
        myTest();
        echo "<p> Variable x inside function is: $a</p>";
        ?>
        <?php
        function myTest1() {
            static $x = 0;
            echo $x;
            $x++;
        }
        
        myTest1();
        echo "<br>";
        myTest1();
        echo "<br>";
        myTest1();
        ?>
    </body>
</html>