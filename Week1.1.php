<!DOCTYPE html>
<html>
    <body>
    <?php
    //$x = "Hello World!";
    //$y = 'I love Halong Bay!';
    //var_dump($x);
    //echo "<br>";
    //var_dump($y)
    //$x = "Hello World!";
    //$x = null;
    //var_dump($x);
    //echo strlen("Hello World!") // Hàm trả về độ dài sâu
    //echo str_word_count("Hello World!") // Hàm đếm số từ
    //echo strpos("Hello World!", "w") // Hàm 
    //echo strtoupper("Hello World!") // Hàm Viết hoa
    //echo strtolower("Hello World!") // Hàm viết thường
    //echo strrev("Hello World!") // Hàm đảo ngược
    //echo str_replace("Hello World!", "tt", "Hello") // Hàm thay thế
    //$t = "Nguyen Minh An";
    //echo strtoupper(str_replace("Minh", "Thanh", $t));
    //$x = "Hello World!";
    //$y = explode(" ", $x); //Hàm chuyển sâu thành mảng
    //print_r($y)
    //$Ten = "Nguyen,An,Ninh";
    //$y = explode(",", $Ten );
    //echo $y[0] , "<br>";
    //echo $y[1] , "<br>";
    //echo $y[2] , "<br>";
    //$ten = "Nguyen Thanh An";
    //$lop = "KHMTK4";
    //echo "Xinh chao " , '\'', $ten , '\'' , " hoc lop " , "\"" , $lop, "\"!"; 
    //PHP_INT_MAX Hàm số lớn nhất
    //PHP_INT_MIN Hàm số nhỏ nhất
    //PHP_INT_SIZE
    //is_int()
    //is_integer()
    //is_long()
    //$x = 5985;
    //var_dump(is_int($x));
    //echo "<br>";
    //$x = 59.85;
    //var_dump(is_int($x));
    //PHP_FLOAT_MAX
    //PHP_FLOAT_MIN
    //PHP_FLOAT_DIG
    //PHP_FLOAT_EPSILON
    //is_finite()
    //is_infinite()
    //is_nan()
    //$x = 1.9e411;
    //var_dump($x)
    //$x = acos(8);
    //var_dump($x);
    //define(name, value, case-insensitive) định nghĩa 1 hằng số trong php
    //định nghĩa 1 hằng số xin chào đại học hạ long
    //define("t", "xin chào đại học hạ long");
    //echo t;
    // and or xor && || !
    // . nối 2 biến, .= gán tiếp vào
    //$ho = "Nguyen Anh";
    //$ten = " Minh ";
    //echo $ho . $ten;
    //$t = date("H");
    //echo "<p> The hour (of the server) is " . $t;
    //echo ", and will give the following message: </p>";
    //if ($t < "10") {
        //echo "Have a good morning!";
    //} elseif ($t < "20"){
        //echo "Have a good day!";
    //} else {
        //echo "Have a good night";
    //}
    //$ten = " Nguyen Mai Van";
    //$gt = " Nu ";
    //$tuoi = "20";
    //echo "<p> Tôi tên là " . $ten , "giới tính " . $gt , " và tôi " . $tuoi , " tuổi </p>";
    //if ($tuoi < 18){
    //    echo "Chào em " . $ten , "!";
    //} else {
    //    if ($tuoi >= 18){
    //        if ($gt = "Nu"){
    //        echo "Chào chị " . $ten , "!";
    //        }
    //    } elseif ($tuoi >= 18){
    //        if ($gt = "Nam"){
    //            echo "Chào anh " . $ten , "!"; 
    //        } elseif ($tuoi >= 40){
    //            echo "Chào bác " . $ten , "!"; 
    //        }
    //    } if ($tuoi >= 60){
    //        if ($gt = "Nu"){
    //            echo "Chào bà " . $ten , "!"; 
    //        }
    //    } elseif ($tuoi >= 60){
    //        if ($gt = "Nam"){
    //            echo "Chào ông " . $ten , "!"; 
    //        }
    //    }
    //
    //đưa vào họ tên, giới tính, tuổi, đưa ra lời xin chào biết rằng nếu tuổi < 18 thì chào em, Nếu tuổi lớn hơn hoặc = 18 , < 40, Nam thì ghi anh nữ ghi chị,NẾu tuổi >= 40, <60 thì ghi là Bác, nếu tuổi >= 60 là Nam là ông ngược lại thì là Bà
    //Nhập vào tháng đưa ra số ngày trong tháng đó
    //$thang = 2;
    //switch($thang){
    //    case 1:
    //    case 3:
    //   case 5:
    //    case 7:
    //    case 8:
    //    case 10:
    //    case 12:
    //        echo "Tháng $thang có 31 ngày";
    //        break;
    //    case 4:
    //    case 6:
    //    case 9:
    //    case 11:
    //        echo "Tháng $thang có 30 ngày";
    //        break;
    //    case 2:
    //        echo "Tháng $thang có 28 hoặc 29 ngày";
    //        break;
    //    default:
    //        echo "số tháng không hợp lệ";
    //        break;
    //}
    //while(){} câu lệnh vòng lặp
    //while(): endwhile;
    //do{}while(); câu lệnh điều kiện
    //for (expression1,expression2,expression3) {}
    //foreach ($array as $value){}
    //foreach ($array as $key => $element){}
    //tạo 1 mảng gồm tên của 10 sinh viên và dùng foreach để in ra tên của 10 sinh viên đó
    //$sv = "A,B,C,D,E,F,G,H,I,J";
    //$sv_arr = explode(",", $sv);
    //foreach($sv_arr as $ten){
    //    echo $ten."<br>";
    //}
    //tạo 1 mảng chứa thông tin ID , tên, tuổi, điểm và in ra thông tin
    //$listsv = array(
    //    "Id" => "A02",
    //        "Ten" => "B",
    //        "Tuoi" => 2,
    //        "Diem" => 2
    //);
    //foreach($listsv as $key => $listsv){
    //    echo $key . " : " . $listsv;
    //    echo "<br>";
    //}
    ?>
    </body>
</html>