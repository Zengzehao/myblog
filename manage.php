<?php
/**
 * Created by PhpStorm.
 * User: zengzehao
 * Date: 16-11-8
 * Time: 上午12:59
 */
include "conn.php";

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width,inital-scale=1,user-scaleable=0"/>
    <link rel="icon" href="icon.png" >
    <title>我的汕大郁金香</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" tyle="text/css" href="mystulip.css">
</head>
<body>
    <form method="post" action="add_learn.php">
    <label>名字：</label>
    <input type="text" name="learn_name">
    <label>链接：</label>
    <input type="text" name="learn_src">
    <input type="submit" value="增加学习链接">
    </form>
    <form method="post" action="add_stu.php">
        <label>名字：</label>
        <input type="text" name="stu_name">
        <label>链接：</label>
        <input type="text" name="su_src">
        <input type="submit" value="增加stu链接">
    </form>
    <form method="post" action="add_tools.php">
        <label>名字：</label>
        <input type="text" name="tools_name">
        <label>链接：</label>
        <input type="text" name="tools_src">
        <input type="submit" value="增加tools链接">
    </form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
