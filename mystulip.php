<?php
/**
 * Created by PhpStorm.
 * User: Zengzehao
 * Date: 2016/9/28
 * Time: 9:37
 */
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

        function do_submit(){
          var frm = document.getElementById(form1);
          document.getElementById(search1).value='';
          return false;
        }
    </script>
	<link rel="stylesheet" tyle="text/css" href="mystulip.css">
</head>

<body onload="show()">
<div id="nowDiv"></div>
<h1>我的汕大郁金香</h1>

<!--
<?php
date_default_timezone_set("Asia/Shanghai");
echo "当前时间是 " . date("Y-m-d h:i:s");
?>
-->
</div>
<div id="baidu">
<form id="form1" target="_blank" method="get" action="http://www.baidu.com/s" onsubmit="return do_submit()">
  <a href="http://www.baidu.com">
  <img src="baidu.png"/>
  </a>
  <input type="text" size="38" id="search1" style="height:30px;width:400px" name="word"/>&nbsp;&nbsp;
  <input type="submit" value="百度一下" style="background-color:#1196EE;border-style:none;color:white;height:25px;width:70px;" />
</form>
</div>
<p class="subtitle"><strong>汕头大学</strong></p>
<table class="table table-striped table-bordered" id="stu">
  <tbody>
  <tr class=".acvtive">
    <td><a class="a1" href="http://www.stu.edu.cn/" target="_blank">汕头大学</a></td>
    <td><a class="a1" href="http://phoenix.stu.edu.cn/bt/default.aspx" target="_blank">金凤BT</a></td>
    <td><a class="a1" href="http://notes.stu.edu.cn" target="_blank">办公自动化</a></td>
    <td><a class="a1" href="https://my.stu.edu.cn/" target="_blank">MYSTU</a></td>
    <td><a class="a1" href="http://credit.stu.edu.cn/web/" target="_blank">学分制系统</a></td>
  </tr>
  <tr class="success">
    <td><a class="a1" href="http://a.stu.edu.cn/" target="_blank">校园网认证系统</a></td>
    <td><a class="a1" href="http://newsao.stu.edu.cn/" target="_blank">新学生事务系统</a></td>
    <td><a class="a1" href="https://netms.stu.edu.cn/" target="_blank">上网流量预定</a></td>
    <td><a class="a1" href="https://dorm.stu.edu.cn/IndexCheck.htm" target="_blank">学生宿舍管理</a></td>
    <td><a class="a1" href="http://www.lib.stu.edu.cn/" target="_blank">图书馆</a>
</td>
  </tr>
  <tr class="warning">
    <td><a class="a1" href="http://www.lib.stu.edu.cn/dbExplorer.aspx" target="_blank">图书馆数据库</a></td>
    <td><a class="a1" href="http://scholarship.stu.edu.cn/chinese/applyIntro2.aspx" target="_blank">奖学金申请</a></td>
    <td><a class="a1" href="http://io.stu.edu.cn/web/" target="_blank">脑力奥运</a></td>
    <td><a class="a1" href="https://booking.stu.edu.cn/" target="_blank">汕大预约中心</a></td>
    <td><a class="a1" href="http://phoenix.stu.edu.cn/Tv/default.aspx" target="_blank">汕大网络电视</a></td>
  </tr>
  <tr class="danger">
    <td><a class="a1" href="http://phoenix.stu.edu.cn/Tv/default.aspx" target="_blank">汕大网络电视</a></td>
    <td><a class="a1" href="http://www.openstu.com/" target="_blank">汕大树洞</a></td>
    <td><a class="a1" href="http://power.stu.edu.cn/" target="_blank">水电管理中心</a></td>
    <td><a class="a1" href="http://m.stu.edu.cn" target="_blank">新汕头大学邮箱</a></td>
    <td>Item4</td>
  </tr>
  </tbody>
</table>
<p class="subtitle" ><strong>学习</strong></p>
<table class="table table-striped table-bordered" id="learn">
  <tr class=".acvtive">
    <td><a href="http://acm.hdu.edu.cn/" target="_blank">杭电OJ</a></td>
    <td><a href="http://www.csdn.net/" target="_blank">CSDN</a></td>
    <td><a href="http://download.csdn.net/" target="_blank">CSDN下载</a></td>
    <td><a href="https://github.com/" target="_blank">Github</a></td>
    <td><a href="https://www.qcloud.com/" target="_blank">腾讯云</a><br/></td>
  </tr>
  <tr class="danger">
    <td><a href="http://docs.oracle.com/javase/8/docs/api/index.html" target="_blank">Java API文档</a></td>
    <td><a href="https://github.com/zhujun2730/Android-Learning-Resources" target="_blank">Android--Resources</a></td>
    <td><a href="http://www.codeceo.com/" target="_blank">码农网</a></td>
    <td><a href="http://www.ituring.com.cn/" target="_blank">图灵社区</a></td>
    <td><a href="http://wiki.jikexueyuan.com/" target="_blank">极客社区</a></td>
  </tr>
  <tr class="warning">
    <td><a href="http://www.runoob.com/" target="_blank">菜鸟教程</a></td>
    <td>Item3</td>
    <td>Item3</td>
    <td>Item3</td>
    <td>Item3</td>
  </tr>
</table>
<p class="subtitle" ><strong>工具</strong></p>
<table class="table table-bordered" id="tools">
  <tr>
    <td><a href="https://www.baidu.com/" target="_blank">百度一下</a></td>
    <td><a href="http://fanyi.baidu.com/" target="_blank">百度翻译</a></td>
    <td><a href="http://mail.qq.com/cgi-bin/frame_html?sid=2rLI3tSSwPjYYFsD&r=922ac72b5e29f27e56ac784bd9d5f1bf" target="_blank">QQ邮箱</td>
    <td></td>
    <td></td>
  </tr>
</table>

<!--
<p class="subtitle"><strong>汕头大学</strong></p>
<div id="stu">
<a class="a1" href="http://www.stu.edu.cn/" target="_blank">汕头大学</a>
<a class="a1" href="http://phoenix.stu.edu.cn/bt/default.aspx" target="_blank">金凤BT</a>
<a class="a1" href="https://my.stu.edu.cn/" target="_blank">MYSTU</a>
<a class="a1" href="http://credit.stu.edu.cn/web/" target="_blank">学分制系统</a><br/><br/>
<a class="a1" href="http://m.stu.edu.cn" target="_blank">新汕头大学邮箱</a>
<a class="a1" href="http://a.stu.edu.cn/" target="_blank">校园网认证系统</a>
<a class="a1" href="http://newsao.stu.edu.cn/" target="_blank">新学生事务系统</a><br/><br/>
<a class="a1" href="https://netms.stu.edu.cn/" target="_blank">上网流量预定</a>
<a class="a1" href="https://dorm.stu.edu.cn/IndexCheck.htm" target="_blank">学生宿舍管理</a>
<a class="a1" href="http://www.lib.stu.edu.cn/" target="_blank">图书馆</a>
<a class="a1" href="http://www.lib.stu.edu.cn/dbExplorer.aspx" target="_blank">图书馆数据库</a>
<a class="a1" href="http://scholarship.stu.edu.cn/chinese/applyIntro2.aspx" target="_blank">奖学金申请</a><br/><br/>
<a class="a1" href="http://io.stu.edu.cn/web/" target="_blank">脑力奥运</a>
<a class="a1" href="https://booking.stu.edu.cn/" target="_blank">汕大预约中心</a>
<a class="a1" href="http://phoenix.stu.edu.cn/Tv/default.aspx" target="_blank">汕大网络电视</a>
<a class="a1" href="http://www.openstu.com/" target="_blank">汕大树洞</a>
<a class="a1" href="http://power.stu.edu.cn/" target="_blank">水电管理中心</a>
</div>

<p class="subtitle" ><strong>学习</strong></p>
<div id="learn">
<a href="http://acm.hdu.edu.cn/" target="_blank">杭电OJ</a>
<a href="http://www.csdn.net/" target="_blank">CSDN</a>
<a href="http://download.csdn.net/" target="_blank">CSDN下载</a>
<a href="https://github.com/" target="_blank">Github</a>
<a href="https://www.qcloud.com/" target="_blank">腾讯云</a><br/><br/>
<a href="http://docs.oracle.com/javase/8/docs/api/index.html" target="_blank">Java API文档</a>
<a href="http://www.runoob.com/" target="_blank">菜鸟教程</a>
<a href="https://github.com/zhujun2730/Android-Learning-Resources" target="_blank">Android-Learning-Resources</a>
<a href="http://www.codeceo.com/" target="_blank">码农网</a><br/><br/>
<a href="http://www.ituring.com.cn/" target="_blank">图灵社区</a>
<a href="http://wiki.jikexueyuan.com/" target="_blank">极客社区</a>
</div>

<p class="subtitle" ><strong>工具</strong></p>
<div id="tools">
<a href="https://www.baidu.com/" target="_blank">百度一下</a>
<a href="http://fanyi.baidu.com/" target="_blank">百度翻译</a>
</div>
-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
