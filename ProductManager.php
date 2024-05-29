<?php
class ProductManager extends Controller
{
    public $productModel;

    public function __construct()
    {
        $this -> productModel = $this -> model("ProductModel");
    }

    function displayIntroduction()
    {
        $this -> view("master", ["Page" => "home"]);
    }

    function getProductsbyBand()
    {
        $this -> view("master", ["Page" => "getProductsbyBand"]);
    }
     
    public function displayProductByBand()
    {
        if (isset($_POST["btSearch"])) {
            $band = $_POST["selectBand"];
            $tblname = 'tblproduct';
            $field = "band";
            $products = $this -> productModel -> getRecordsbyField($tblname, $field, $band);
            $this -> view("master", ["Page" => "getProductsbyBand", "Products" => $products]);
        }
    }

    function getProductsbyYear()
    {
        $this -> view("master", ["Page" => "getProductsbyYear"]);
    }

    public function displayProductByYear()
    {
        if (isset($_POST["btSearchY"])) {
            $band = $_POST["selectYear"];
            $tblname = 'tblproduct';
            $field = "year";
            $products = $this -> productModel -> getRecordsbyField($tblname, $field, $band);
            $this -> view("master", ["Page" => "getProductsbyYear", "Products" => $products]);
        }
    }

    function getProductsbyYearandBand()
    {
        $this -> view("master", ["Page" => "getProductsbyYearandBand"]);
    }

    public function displayProductByYearandBand()
    {
        if (isset($_POST["btSearch1"])) {
            $band1 = $_POST["selectBand"];
            $band2 = $_POST["selectYear"];
            $tblname = 'tblproduct';
            $field1 = "band";
            $field2 = "year";
            $products = $this -> productModel -> getRecordsbyField1($tblname, $field1, $band1, $field2, $band2);
            $this -> view("master", ["Page" => "getProductsbyYearandBand", "Products" => $products]);
        }
    }

    function impInsertProduct()
    {
        $this -> view("master", [
            "Page" => "insertProduct"
        ]);
    }

    public function insertProduct()
    {
        if (isset($_POST["btInsert"])) {
            $id = $_POST["pid"];
            $pname = $_POST["pname"];
            $company = $_POST["Company"];
            $year = $_POST["selectYear"];
            $band = $_POST["selectBand"];
            if(isset($_FILES['ImageFile']) && $_FILES['ImageFile']['error'] === UPLOAD_ERR_OK) {
                $pimange = 'data:image/png;base64,'
                .base64_decode(file_get_contents($_FILES['ImageFile']['tmp_name']));
            }
        }

        $result = $this -> productModel -> insertProduct($id, $pname, $company, $year, $band, $pimange);

        $this -> view(
            "master",
            [
                "Page" => "insertProduct",
                "result" => $result
            ]
            );
    }
}
?>