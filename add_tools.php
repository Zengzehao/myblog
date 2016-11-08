<?php
/**
 * Created by PhpStorm.
 * User: zengzehao
 * Date: 16-11-8
 * Time: 下午7:57
 */
include "conn.php";
$name = $_POST['tools_name'];
$src = $_POST['tools_src'];
//echo $name;
//echo $src;
$sql = "insert into tools (name,src) values ('$name','$src')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>