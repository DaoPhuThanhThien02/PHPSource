<!DOCTYPE html>
<html>
    <body>
        <?php
        class Fruit {
            public $name;
            public $color;
            
            function __construct($name, $color)
            {
                $this -> name = $name;
                $this -> color = $color;
            }
            /*function set_name($name) {
                $this -> name = $name;
            }*/
            function get_name(){
                return $this -> name;
            }

            /*function set_color($color) {
                $this -> color = $color;
            }*/
            function get_color(){
                return $this -> color;
            }
        }
        /*$lemon = new Fruit();
        $lemon -> set_name("lemon");
        $lemon -> set_color("yellow");
        echo "The first fruit: ". $lemon -> get_name() . "<br>";
        echo $lemon -> get_color() . "<br>";
        $apple = new Fruit();
        $apple -> set_name("apple");
        $apple -> set_color("green");
        echo "The second fruit: ". $apple -> get_name() . "<br>";
        echo $apple -> get_color() . "<br>";
        $banana = new Fruit();
        var_dump($banana instanceof Fruit);*/
        $apple = new Fruit("Apple", "red");
        echo $apple -> get_name();
        echo "<br>";
        echo $apple -> get_color();
        $lemon = new Fruit("Lemon", "yellow");
        echo $lemon -> get_name();
        echo "<br>";
        echo $lemon -> get_color();
        ?>
    </body>
</html>