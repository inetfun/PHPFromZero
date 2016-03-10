<html>
<!程序名称：7-10.php>
<!程序功能：一个对象开发实例。>

<head>
	<title>一个对象开发实例</title>
</head>
<body>
<?php
class Person
{
//下面是人的成员属性
var $name;   //人的名子
var $sex;   //人的性别
var $age;   //人的年龄
//下面是人的成员方法
function say() //这个人可以说话的方法
{
echo "这个人在唱歌";
echo"<br>";
}
function run() //这个人可以走路的方法
{
echo "这个人在跑步";
echo"<br>";
}
}
$p1=new Person(); //创建实例对象$p1
$p2=new Person(); //创建实例对象$p2
$p3=new Person(); //创建实例对象$p3
//下面三行是给$p1对象属性赋值
$p1->name="张大";
$p1->sex="男";
$p1->age=20;
//下面三行是访问$p1对象的属性
echo "p1对象的名子是：".$p1->name."<br>";
echo "p1对象的性别是：".$p1->sex."<br>";
echo "p1对象的年龄是：".$p1->age."<br>";
//下面两行访问$p1对象中的方法
$p1->say();
$p1->run();
//下面三行是给$p2对象属性赋值
$p2->name="李四";
$p2->sex="女";
$p2->age=30;
//下面三行是访问$p2对象的属性
echo "p2对象的名子是：".$p2->name."<br>";
echo "p2对象的性别是：".$p2->sex."<br>";
echo "p2对象的年龄是：".$p2->age."<br>";
//下面两行访问$p2对象中的方法
$p2->say();
$p2->run();
//下面三行是给$p3对象属性赋值
$p3->name="王小";
$p3->sex="男";
$p3->age=40;
//下面三行是访问$p3对象的属性
echo "p3对象的名子是：".$p3->name."<br>";
echo "p3对象的性别是：".$p3->sex."<br>";
echo "p3对象的年龄是：".$p3->age."<br>";
//下面两行访问$p3对象中的方法
$p3->say();
$p3->run();
?>
</body>
</html>