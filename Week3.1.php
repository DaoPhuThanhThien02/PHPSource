<!DOCTYPE html>
<html>
    <body>
        <?php
        /*Lớp con có thể kế thừa tất cả các thuộc tính của lớp cha qua phương thức public và protected
        */
        class Fruit {
            public $name;
            public $color;
            public function __construct($name, $color)
            {
                $this -> name = $name;
                $this -> color = $color;
            }
            public function intro(){
                echo "The fruit is {$this -> name} and the color is {$this -> color}";
            }
        }

        class Strawberry extends Fruit {
            public function message() {
                echo "Am I a fruit or berry?";
            }
        }

        $strawberry = new Strawberry("Strawberry", "red");
        $strawberry -> message();
        $strawberry -> intro();
        ?>
    </body>
</html>