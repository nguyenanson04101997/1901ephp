<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$age = 19;
    // biểu thức trong ngoặc (age > 18) == true => chạy code trong khối if
    // biểu thức trong ngoặc (age > 18) == false => chạy code trong khối else
    if ($age > 18) {
        echo "<br> đã đủ tuổi trưởng thành";
    } else {
        echo "<br> Đang tuổi vị thành niên";
    }
    $point = 6.8;
    if ($point >= 9) {
        echo "<br> xuất sắc";
    } else if($point >= 8) {
         echo "<br> giỏi";
    } else if ($point >= 7) {
         echo "<br> khá";
    } else if ($point >= 6.5) {
         echo "<br> TB khá";
    } else if($point >= 5) {
         echo "<br> TB";
    } else {
         echo "<br> yếu kém";
    }
?>
</body>
</html>