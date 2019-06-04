<?php
/**
 * Created by PhpStorm.
 * User: Anson
 * Date: 04/06/2019
 * Time: 10:51
 */
define('SERVERNAME','localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DBNAME','btvn_crud');
$connection = mysqli_connect(SERVERNAME,USERNAME, PASSWORD,DBNAME);
if(!$connection){
    die("Kết nối CSDL lỗi: " . mysqli_connect_error());
}
//echo "Kết nối CSDL thành công";