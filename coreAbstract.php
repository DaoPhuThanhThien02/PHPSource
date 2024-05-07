<?php
    abstract class  Product{
        public $id;
        public $name;

        public function __construct($id, $name) {
            $this -> id = $id;
            $this -> name = $name;
    }
    public function setID($id) {
        $this -> id = $id;
    }

    public function getID() {
        return $this -> id;
    }

    public function setName($name) {
        $this -> name = $name;
    }

    public function getName() {
        return $this -> name;
    }
    abstract protected function toString($id, $name);
    }
    class Laptop extends Product {
        public $company;
        public $color;
        public $amount;
        public $price;
        
        public function __construct($id, $name, $company, $color, $amount, $price) {
            $this -> id = $id;
            $this -> name = $name;
            $this -> company = $company;
            $this -> color = $color;
            $this -> amount = $amount;
            $this -> price = $price;
        }
        
        public function setCompany($company) {
            $this -> company = $company;
        }

        public function getCompany() {
            return $this -> company;
        }

        public function setColor($color) {
            $this -> color = $color;
        }

        public function getColor() {
            return $this -> color;
        }

        public function setAmount($amount) {
            $this -> amount = $amount;
        }

        public function getAmount() {
            return $this -> amount;
        }

        public function setPrice($price) {
            $this -> price = $price;
        }

        public function getPrice() {
            return $this -> price;
        }
        
        function subtotal() {
            return intval($this -> price) * intval($this -> amount);
        }

        public function toString($id, $name)
                {   
                    return $this -> id . "-" . $this -> name . "-" . $this -> company . "-" . $this -> color . "-" . $this -> amount . "-" . $this -> price . "-" . $this -> subtotal();
                }
}

?>