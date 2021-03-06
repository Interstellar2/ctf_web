php学习笔记

#什么是 PHP？
PHP 是 "PHP Hypertext Preprocessor" 的首字母缩略词
PHP 是一种被广泛使用的开源脚本语言
PHP 脚本在服务器上执行
PHP 没有成本，可供免费下载和使用
PHP 是一门令人惊叹的流行语言！
它强大到足以成为在网络上最大的博客系统的核心（WordPress）！
它深邃到足以运行最大的社交网络（facebook）！
而它的易用程度足以成为初学者的首选服务器端语言！

#什么是 PHP 文件？
PHP 文件能够包含文本、HTML、CSS 以及 PHP 代码
PHP 代码在服务器上执行，而结果以纯文本返回浏览器
PHP 文件的后缀是 ".php"
PHP 能够做什么？
PHP 能够生成动态页面内容
PHP 能够创建、打开、读取、写入、删除以及关闭服务器上的文件
PHP 能够接收表单数据
PHP 能够发送并取回 cookies
PHP 能够添加、删除、修改数据库中的数据
PHP 能够限制用户访问网站中的某些页面
PHP 能够对数据进行加密
通过 PHP，您可以不受限于只输出 HTML。您还能够输出图像、PDF 文件、甚至 Flash 影片。您也可以输出任何文本，比如 XHTML 和 XML。

#为什么使用 PHP？
PHP 运行于各种平台（Windows, Linux, Unix, Mac OS X 等等）
PHP 兼容几乎所有服务器（Apache, IIS 等等）
PHP 支持多种数据库
PHP 是免费的。
PHP 易于学习，并可高效地运行在服务器端

#基础 PHP 语法
PHP 脚本可放置于文档中的任何位置。
PHP 脚本以 <?php 开头，以 ?> 结尾：
<?php
// 此处是 PHP 代码
?>
PHP 文件的默认文件扩展名是 ".php"。
PHP 文件通常包含 HTML 标签以及一些 PHP 脚本代码。
下面的例子是一个简单的 PHP 文件，其中包含了使用内建 PHP 函数 "echo" 在网页上输出文本 "Hello World!" 的一段 PHP 脚本：
实例
<!DOCTYPE html>
<html>
<body>

<h1>我的第一张 PHP 页面</h1>

<?php
echo "Hello World!";
?>

</body>
</html>

注释：PHP 语句以分号结尾（;）。PHP 代码块的关闭标签也会自动表明分号（因此在 PHP 代码块的最后一行不必使用分号）。
#PHP 中的注释
PHP 代码中的注释不会被作为程序来读取和执行。它唯一的作用是供代码编辑者阅读。
注释用于：
使其他人理解您正在做的工作 - 注释可以让其他程序员了解您在每个步骤进行的工作（如果您供职于团队）
提醒自己做过什么 - 大多数程序员都曾经历过一两年后对项目进行返工，然后不得不重新考虑他们做过的事情。注释可以记录您在写代码时的思路。
PHP 支持三种注释：
实例
<!DOCTYPE html>
<html>
<body>

<?php
// 这是单行注释

# 这也是单行注释

/*
这是多行注释块
它横跨了
多行
*/
?>

</body>
</html>

#PHP 大小写敏感
在 PHP 中，所有用户定义的函数、类和关键词（例如 if、else、echo 等等）都对大小写不敏感。
在下面的例子中，所有这三条 echo 语句都是合法的（等价）：
实例
<!DOCTYPE html>
<html>
<body>

<?php
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";
?>

</body>
</html>

#不过在 PHP 中，所有变量都对大小写敏感。
在下面的例子中，只有第一条语句会显示 $color 变量的值（这是因为 $color、$COLOR 以及 $coLOR 被视作三个不同的变量）：
实例
<!DOCTYPE html>
<html>
<body>

<?php
$color="red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
?>

</body>
</html>

#变量是存储信息的容器：
实例
<?php
$x=5;
$y=6;
$z=$x+$y;
echo $z;
?>

#类似代数
x=5
y=6
z=x+y
在代数中我们使用字母（比如 x）来保存值（比如 5）。
从上面的表达式 z=x+y，我们能够计算出 z 的值是 11。
在 PHP 中，这三个字母被称为变量。
注释：请把变量视为存储数据的容器。

#PHP 变量
正如代数，PHP 变量可用于保存值（x=5）和表达式（z=x+y）。
变量的名称可以很短（比如 x 和 y），也可以取更具描述性的名称（比如 carname、total_volume）。

#PHP 变量规则：
变量以 $ 符号开头，其后是变量的名称
变量名称必须以字母或下划线开头
变量名称不能以数字开头
变量名称只能包含字母数字字符和下划线（A-z、0-9 以及 _）
变量名称对大小写敏感（$y 与 $Y 是两个不同的变量）
注释：PHP 变量名称对大小写敏感！

#创建 PHP 变量
PHP 没有创建变量的命令。
变量会在首次为其赋值时被创建：
实例
<?php
$txt="Hello world!";
$x=5;
$y=10.5;
?>

以上语句执行后，变量 txt 会保存值 Hello world!，变量 x 会保存值 5，变量 y 会保存值 10.5。
注释：如果您为变量赋的值是文本，请用引号包围该值。

#PHP 是一门类型松散的语言
在上面的例子中，请注意我们不必告知 PHP 变量的数据类型。
PHP 根据它的值，自动把变量转换为正确的数据类型。
在诸如 C 和 C++ 以及 Java 之类的语言中，程序员必须在使用变量之前声明它的名称和类型。

#PHP 变量作用域
在 PHP 中，可以在脚本的任意位置对变量进行声明。
变量的作用域指的是变量能够被引用/使用的那部分脚本。
PHP 有三种不同的变量作用域：
local（局部）
global（全局）
static（静态）
Local 和 Global 作用域
函数之外声明的变量拥有 Global 作用域，只能在函数以外进行访问。
函数内部声明的变量拥有 LOCAL 作用域，只能在函数内部进行访问。
下面的例子测试了带有局部和全局作用域的变量：
实例
<?php
$x=5; // 全局作用域

function myTest() {
  $y=10; // 局部作用域
  echo "<p>测试函数内部的变量：</p>";
  echo "变量 x 是：$x";
  echo "<br>";
  echo "变量 y 是：$y";
} 

myTest();

echo "<p>测试函数之外的变量：</p>";
echo "变量 x 是：$x";
echo "<br>";
echo "变量 y 是：$y";
?>

在上例中，有两个变量 $x 和 $y，以及一个函数 myTest()。$x 是全局变量，因为它是在函数之外声明的，而 $y 是局部变量，因为它是在函数内声明的。
如果我们在 myTest() 函数内部输出两个变量的值，$y 会输出在本地声明的值，但是无法 $x 的值，因为它在函数之外创建。
然后，如果在 myTest() 函数之外输出两个变量的值，那么会输出 $x 的值，但是不会输出 $y 的值，因为它是局部变量，并且在 myTest() 内部创建。
注释：您可以在不同的函数中创建名称相同的局部变量，因为局部变量只能被在其中创建它的函数识别。

#PHP global 关键词
global 关键词用于访问函数内的全局变量。
要做到这一点，请在（函数内部）变量前面使用 global 关键词：
实例
<?php
$x=5;
$y=10;

function myTest() {
  global $x,$y;
  $y=$x+$y;
}

myTest();
echo $y; // 输出 15
?>

PHP 同时在名为 $GLOBALS[index] 的数组中存储了所有的全局变量。下标存有变量名。这个数组在函数内也可以访问，并能够用于直接更新全局变量。
上面的例子可以这样重写：
实例
<?php
$x=5;
$y=10;

function myTest() {
  $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
} 

myTest();
echo $y; // 输出 15
?>

#PHP static 关键词
通常，当函数完成/执行后，会删除所有变量。不过，有时我需要不删除某个局部变量。实现这一点需要更进一步的工作。
要完成这一点，请在您首次声明变量时使用 static 关键词：
实例
<?php

function myTest() {
  static $x=0;
  echo $x;
  $x++;
}

myTest();
myTest();
myTest();

?>

然后，每当函数被调用时，这个变量所存储的信息都是函数最后一次被调用时所包含的信息。
注释：该变量仍然是函数的局部变量。

#PHP echo 和 print 语句
echo 和 print 之间的差异：
echo - 能够输出一个以上的字符串
print - 只能输出一个字符串，并始终返回 1
提示：echo 比 print 稍快，因为它不返回任何值。
PHP echo 语句
echo 是一个语言结构，有无括号均可使用：echo 或 echo()。

#显示字符串
下面的例子展示如何用 echo 命令来显示不同的字符串（同时请注意字符串中能包含 HTML 标记）：
<?php
echo "<h2>PHP is fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This", " string", " was", " made", " with multiple parameters.";
?>

#显示变量
下面的例子展示如何用 echo 命令来显示字符串和变量：
<?php
$txt1="Learn PHP";
$txt2="W3School.com.cn";
$cars=array("Volvo","BMW","SAAB");

echo $txt1;
echo "<br>";
echo "Study PHP at $txt2";
echo "My car is a {$cars[0]}";
?>

#PHP print 语句
print 也是语言结构，有无括号均可使用：print 或 print()。

下面的例子展示如何用 print 命令来显示不同的字符串（同时请注意字符串中能包含 HTML 标记）：
<?php
print "<h2>PHP is fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";
?>


下面的例子展示如何用 print 命令来显示字符串和变量：
<?php
$txt1="Learn PHP";
$txt2="W3School.com.cn";
$cars=array("Volvo","BMW","SAAB");

print $txt1;
print "<br>";
print "Study PHP at $txt2";
print "My car is a {$cars[0]}";
?>

#PHP 字符串
字符串是字符序列，比如 "Hello world!"。
字符串可以是引号内的任何文本。您可以使用单引号或双引号：
实例
<?php 
$x = "Hello world!";
echo $x;
echo "<br>"; 
$x = 'Hello world!';
echo $x;
?>

#PHP 整数
整数是没有小数的数字。
整数规则：
整数必须有至少一个数字（0-9）
整数不能包含逗号或空格
整数不能有小数点
整数正负均可
可以用三种格式规定整数：十进制、十六进制（前缀是 0x）或八进制（前缀是 0）
在下面的例子中，我们将测试不同的数字。PHP var_dump() 会返回变量的数据类型和值：
实例
<?php 
$x = 5985;
var_dump($x);
echo "<br>"; 
$x = -345; // 负数
var_dump($x);
echo "<br>"; 
$x = 0x8C; // 十六进制数
var_dump($x);
echo "<br>";
$x = 047; // 八进制数
var_dump($x);
?>

#PHP 浮点数
浮点数是有小数点或指数形式的数字。
在下面的例子中，我们将测试不同的数字。PHP var_dump() 会返回变量的数据类型和值：
实例
<?php 
$x = 10.365;
var_dump($x);
echo "<br>"; 
$x = 2.4e3;
var_dump($x);
echo "<br>"; 
$x = 8E-5;
var_dump($x);
?>


#PHP 逻辑
逻辑是 true 或 false。
$x=true;
$y=false;
逻辑常用于条件测试。您将在本教程稍后的章节学到更多有关条件测试的知识。

#PHP 数组
数组在一个变量中存储多个值。
在下面的例子中，我们将测试不同的数组。PHP var_dump() 会返回变量的数据类型和值：
实例
<?php 
$cars=array("Volvo","BMW","SAAB");
var_dump($cars);
?>

#PHP 对象
对象是存储数据和有关如何处理数据的信息的数据类型。
在 PHP 中，必须明确地声明对象。
首先我们必须声明对象的类。对此，我们使用 class 关键词。类是包含属性和方法的结构。
然后我们在对象类中定义数据类型，然后在该类的实例中使用此数据类型：
实例
<?php
class Car
{
  var $color;
  function Car($color="green") {
    $this->color = $color;
  }
  function what_color() {
    return $this->color;
  }
}
?>

#PHP NULL 值
特殊的 NULL 值表示变量无值。NULL 是数据类型 NULL 唯一可能的值。
NULL 值标示变量是否为空。也用于区分空字符串与空值数据库。
可以通过把值设置为 NULL，将变量清空：
实例
<?php
$x="Hello world!";
$x=null;
var_dump($x);
?>

更多资料，参考http://www.w3school.com.cn/php/index.asp