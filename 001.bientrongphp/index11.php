<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Các phương thức xử lý chuỗi ttrong php</h1>

<?php

$str = "chào hà nội";
 // hàm dùng dể đếm số ký tự

echo "<br> hàm strlen(biến) dùng để đế, số ký tự : " . strlen($str);
echo "<br> hàm str_word_count (biến) dùng để đếm số từ trong chuỗi : " . str_word_count($str);
echo "<br> Hàm strrev(biến) dùng để đảo ngược chuỗi : " . strrev($str);

echo "<br> Hàm strpos() : " . strpos( "chao ha noi", needle: "ha noi");
echo "<br>";
$x = strpos("chao ha noi", "da nang");
var_dump($x);
?>
</body>
</html>