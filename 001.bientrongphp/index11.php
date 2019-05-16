<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Các phương thức xử lý chuỗi ttrong php</h1>

<pre>
        strpos("chuỗi", "chuỗi con");
        tìm chuỗi con trong chuỗi tham số thứ nhất
        nếu tìm được nó trả về vị trí xuất hiện đầu tiên của chuỗi con trong chuỗi
        nếu không tìm được nó trả về false
        str_replace("chuỗi search", "chuỗi thay thế", "chuỗi chủ đề") dùng thay thế văn bản
        hàm này tìm chuỗi search và thay thế bằng chuỗi thay thế trong chuỗi chủ đề
    </pre>
<?php

$str = "chao ha noi";
 // hàm dùng dể đếm số ký tự

echo "<br> hàm strlen(biến) dùng để đế, số ký tự : " . strlen($str);
echo "<br> hàm str_word_count (biến) dùng để đếm số từ trong chuỗi : " . str_word_count($str);
echo "<br> Hàm strrev(biến) dùng để đảo ngược chuỗi : " . strrev($str);

echo "<br> Hàm strpos() : " . strpos( "chao ha noi", "ha noi");
echo "<br>";
$x = strpos("chao ha noi", "da nang");
var_dump($x);
echo "<br>";
echo str_replace("ha noi", "ho chi minh", "chao thanh pho ha noi");
?>
</body>
</html>