<?php
/**
 * Created by PhpStorm.
 * User: Zengzehao
 * Date: 2016/9/28
 * Time: 9:37
 */
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link rel="icon" href="icon.png" >
    <title>我的汕大郁金香</title>
    <script>
        function show(){
            var date = new Date(); //日期对象
            var now = "当前时间是 ";
            now = now + date.getFullYear()+"年"; //读英文就行了
            now = now + (date.getMonth()+1)+"月"; //取月的时候取的是当前月-1如果想取当前月+1就可以了
            now = now + date.getDate()+"日";
            now = now + date.getHours()+"时";
            now = now + date.getMinutes()+"分";
            now = now + date.getSeconds()+"秒";
            document.getElementById("nowDiv").innerHTML = now; //div的html是now这个字符串
            setTimeout("show()",1000); //设置过1000毫秒就是1秒，调用show方法
        }
    </script>
</head>

<body onload="show()">

<h2><span align="center">我的汕大郁金香</span></h2>
<div id="nowDiv"></div>
<!--
<?php
date_default_timezone_set("Asia/Shanghai");
echo "当前时间是 " . date("Y-m-d h:i:s");
?>
-->
<p style="color:red;"><strong>汕头大学</strong></p>
<a href="http://www.stu.edu.cn/" target="_blank">汕头大学</a>
<a href="http://phoenix.stu.edu.cn/bt/default.aspx" target="_blank">金凤BT</a>
<a href="http://notes.stu.edu.cn/login/Login.jsp?logintype=1" target="_blank">协同办公系统</a>
<a href="https://my.stu.edu.cn/" target="_blank">MYSTU</a><br/><br/>
<a href="http://credit.stu.edu.cn/web/" target="_blank">学分制系统</a>
<a href="http://m.stu.edu.cn" target="_blank">新汕头大学邮箱</a>
<a href="http://a.stu.edu.cn/" target="_blank">校园网认证系统</a>
<a href="http://newsao.stu.edu.cn/" target="_blank">新学生事务系统</a><br/><br/>
<a href="https://netms.stu.edu.cn/" target="_blank">上网流量预定</a>
<a href="https://dorm.stu.edu.cn/IndexCheck.htm" target="_blank">学生宿舍管理</a>
<a href="http://www.lib.stu.edu.cn/" target="_blank">图书馆</a>
<a href="http://www.lib.stu.edu.cn/dbExplorer.aspx" target="_blank">图书馆数据库</a><br/><br/>
<a href="http://scholarship.stu.edu.cn/chinese/applyIntro2.aspx" target="_blank">奖学金申请</a>
<a href="http://io.stu.edu.cn/web/" target="_blank">脑力奥运</a>
<a href="https://booking.stu.edu.cn/" target="_blank">汕大预约中心</a>
<a href="http://phoenix.stu.edu.cn/Tv/default.aspx" target="_blank">汕大网络电视</a><br/><br/>
<a href="http://www.openstu.com/" target="_blank">汕大树洞</a>

<p style="color:red;"><strong>学习</strong></p>
<a href="http://acm.hdu.edu.cn/" target="_blank">杭电OJ</a>
<a href="http://www.csdn.net/" target="_blank">CSDN</a>
<a href="http://download.csdn.net/" target="_blank">CSDN下载</a>
<a href="https://github.com/" target="_blank">Github</a><br/><br/>
<a href="https://www.qcloud.com/" target="_blank">腾讯云</a>
<a href="http://docs.oracle.com/javase/8/docs/api/index.html" target="_blank">Java API文档</a>
<p style="color:red;"><strong>工具</strong></p>
<a href="https://www.baidu.com/" target="_blank">百度一下</a>
<a href="http://fanyi.baidu.com/" target="_blank">百度翻译</a>
</body>
</html>
