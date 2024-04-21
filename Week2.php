<!DOCTYPE html>
<html>
    <body>
    <script>declare(strict_types=1);</script>
        <?php
        /*function addNumbers(float $a, float $b) : float {
            return $a + $b;
        }
        echo addNumbers(1.2, 5.2);
        function familyName($fname){
            echo "$fname Refsnes.<br>";
        }

        familyName("Jarri");
        familyName("Hege");
        familyName("Stale");
        familyName("Kai Jim");
        familyName("Borge");
        truyền tham số bằng toán tử &
        function add_five(&$value){
            $value += 5;
        }
        
        $num = 2;
        add_five($num);
        echo $num;
        Sử dụng toán tử ... đằng trước tham số của hàm để cho phép truyền vào là 1 mảng (Tham số được coi như là 1 mảng)
        function sumMyNumbers(...$x){
            $n = 0;
            $len = count($x);
            for($i = 0; $i < $len; $i++){
                $n += $x[$i];
            }
            return $n;
        }

        $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
        echo $a;
        sử dụng strict để loại bỏ 1 số lỗi để bỏ đi một số lỗi không tương thích
        Các phương pháp tạo mảng
        $a = array("A, B, C");Sử dụng hàm array
        $b = ["D, E, F"];Sử dụng dấu ngoặc vuông
        $c = [
            "G",
            "H",
            "M",
        ]; mỗi dòng là 1 phần tử của mảng
        print_r($a);
        print_r($b);
        print_r($c);
        $d = [
            0 => "A",
            1 => "B",
            2 => "C",
        ];
        $e = [];
        $e[0] = ["A"];
        $e[1] = ["B"];
        $e[2] = ["C"];
        print_r($d);
        print_r($e);
        $f = [];
        $f[0] = ["apples"];
        $f[1] = ["bananas"];
        $f["fruit"] = ["cherries"];
        print_r($f);
        $a = array("A", "B", "C");
        $a[] = "D";
        $b = array("brand" => "ford","model" => "Mustang");
        $b["color"] = "red";
        print_r($a);
        print_r($b);
        $a = array("A", "B", "C");
        array_push($a, "D", "E", "F");
        $b = array("brand" => "ford","model" => "Mustang");
        $b += ["color" => "red", "year" => 1986];
        print_r($a);
        print_r($b);
        $cars = array("Volvo", "BWM", "Toyota");
        array_splice($cars, 1, 1);
        echo $cars[0],",",$cars[1];
        $cars = array("Volvo", "BWM", "Toyota");
        unset($cars[1]);
        echo $cars[0], "," ,$cars[2], "\n";
        echo $cars[0], "," ,$cars[1];
        $GLOBALS là một mảng chứa tất cả các biến toàn cục
        ,$_SERVER 
        ,$_REQUEST là một biến toàn cục mạnh, chứa dữ liệu của form và cookies dùng để submit ngoài ra còn là một mảng chứa dl từ biến $_GET,$_POST,$_COOKIE, $_REQUEST['<field name>'];
        ,$_POST
        ,$_GET
        ,$_FILES
        ,$_ENV
        ,$_COOKIE
        ,$_SESSION
        $x = 75;
        function myfunction(){
            global $x;
            echo $GLOBALS['x'];
            echo $x;
        }
        myfunction();
        echo $_SERVER['PHP_SELF'];
        echo "<br>";
        echo $_SERVER['SERVER_NAME'];
        echo "<br>";
        echo $_SERVER['HTTP_HOST'];
        echo "<br>";
        echo $_SERVER['HTTP_REFERER'];
        echo "<br>";
        echo $_SERVER['HTTP_USER_AGENT'];
        echo "<br>";
        echo $_SERVER['SCRIPT_NAME'];
        echo "<br>";
        Biểu thức chính quy trong PHP
        $exp = "/baoHanoi/i";
        preg_match() trả về 1 nếu tìm thấy pattern, trả về 0 là không tìm thấy; preg_match_all() trả về số lần xuất hiện của pattern trong xâu, nếu không thấy trả về 0;preg_replace() thay thế 1 pattern tìm thấy trong xâu bằng 1 xâu khác
        $str = "Visit Hanoi city";
        $pattern = "/Hanoi/i";
        echo preg_match($pattern, $str)
        $str = "The rain in SPAIN falls mainly on the plains.";
        $pattern = "/ain/i";
        echo preg_match_all($pattern, $str)
        $str = "Visit Microsoft!";
        $pattern = "/microsoft/i";
        echo preg_replace($pattern, "Hanoi", $str);
        $_GET để lấy các giá trị hiện thời thông qua các tham số của url 
        $_POST dùng để lấy bất kì tham số nào thông qua HTTP POST
        $_SERVER["PHP_SELF"] là một biến siêu toàn cục trả về tên tệp tin hiện đang thực thi
        trim() xóa các khoảng trắng không cần thiết
        stripslashes() xóa đi dấu ngoặc ngược
        htmlspecialchars() chuyển các kí tự đặc biệt thành thực thể trong html
        tên phải chứa kí tự và không có khoảng trắng
        email phải có @ và .
        comment có thể viết trên nhiều dòng
        phải là một url hợp lệ
        phải chọn một giới tính
        lập trình hướng đối tượng
        tạo lớp trong php
        phương pháp khởi tạo ngầm định $<Object name> =new <Class name>();
        từ khóa $this là từ khóa để tham chiếu đến đối tượng hiện thời và thường nằm ở trong lớp
        sử dụng instanceof để kiểm tra xem đối tượng có thuộc về 1 lớp hay kh
        hàm hủy và hàm tạo Construct và Destruct
        $_construct()
        Bài tập về nhà: Tạo lớp Product gồm ID, Name, Price, Ammout, Company, Year
        Thiết kế 1 form để nhập vào 1 danh sách các sản phẩm lưu vào 1 mảng và xuất danh sách ra màn hình*/
        ?>
    </body>
</html>