<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>toán tử ! là taosn tử phủ định</h1>
<?php

//Mảng chỉ số
$student = array("a","b","c","d","e");
echo "<pre>";
print_r($mang);
echo "</pre>";
echo "<pre> Dạng foreach đầy đủ";
// DẠng foreach đầy đủ
if (is_array($student) && !empty($student)){
    foreach ($student) as $key => $value {

    }
}
echo "<br> Dạng foreach rút gọn";
//Dạng foreach rút gọn chỉ lặp và xuất ra cái value
if (is_array($student) && !empty($student)){
    foreach ($student) as $key => $value {
        echo "<br> Valie : " . $value;
    }
}
?>
</body>
</html>