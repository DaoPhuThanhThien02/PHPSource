<?php
            class Product {
                public $id;
                public $name;
                public $company;
                public $color;
                public $amount;
                public $price;

                function __construct($id, $name, $company, $color, $amount, $price) {
                    $this -> id = $id;
                    $this -> name = $name;
                    $this -> company = $company;
                    $this -> color = $color;
                    $this -> amount = $amount;
                    $this -> price = $price;
                }

                function setID($id) {
                    $this -> id = $id;
                }

                function getID() {
                    return $this -> id;
                }

                function setName($name) {
                    $this -> name = $name;
                }

                function getName() {
                    return $this -> name;
                }

                function setCompany($company) {
                    $this -> company = $company;
                }

                function getCompany() {
                    return $this -> company;
                }

                function setColor($color) {
                    $this -> color = $color;
                }

                function getColor() {
                    return $this -> color;
                }

                function setAmount($amount) {
                    $this -> amount = $amount;
                }

                function getAmount() {
                    return $this -> amount;
                }

                function setPrice($price) {
                    $this -> price = $price;
                }

                function getPrice() {
                    return $this -> price;
                }
                
                function subtotal() {
                    return intval($this -> price)* intval($this -> amount);
                }

                function toString()
                {   
                    return $this -> id . "-" . $this -> name . "-" . $this -> company . "-" . $this -> color . "-" . $this -> amount . "-" . $this -> price . "-" . $this -> subtotal();
                }
            }
        ?>