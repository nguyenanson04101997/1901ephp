<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<?php
include_once "config.php";
$ten = '';
$giatien='';
$tonkho = '';
$nhacungcap = '';
$ngaytao = '';
if(isset($_GET['id'])){
    $btvn_id = (int) $_GET['id'];
    $sqlSelect = "SELECT * FROM btvn WHERE id = ". $btvn_id;
    $result = mysqli_query($connection, $sqlSelect);
    $row = mysqli_fetch_assoc($result);
    // cú pháp rút gon của if else ( condition ? câu lênh chạy khi đc la true : câu lệnh chạy khi dc = false
    $name = isset($row['ten'])? $row['ten']:'';
    $price = isset($row['giatien'])? $row['giatien']:'';
    $inventory = isset($row['tonkho'])? $row['tonkho']:'';
    $supplier = isset($row['nhacungcap'])? $row['nhacungcap']:'';
    $date_created = isset($row['ngaytao'])? $row['ngaytao']:'';
}
?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Tạo nhân viên mới</h1>

            <div>
                <form name="edit" action="update.php" method="post">
                    <input type="hidden" name="id" value="<?php echo (int)$_GET['id'] ?>">
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $ten ?>">
                    </div>
                    <div class="form-group">
                        <label>Giá</label>
                        <input type="text" class="form-control" name="price" value="<?php echo $giatien ?>">
                    </div>
                    <div class="form-group">
                        <label>Tồn kho</label>
                        <input type="text" class="form-control" name="inventory" value="<?php echo $tonkho ?>">
                    </div>
                    <div class="form-group">
                        <label>Nhà cung cấp</label>
                        <input type="text" class="form-control" name="supplier" value="<?php echo $nhacungcap ?>">
                    </div>
                    <div class="form-group">
                        <label>Ngày tạo</label>
                        <input type="text" class="form-control" name="date_created" value="<?php echo $ngaytao ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>