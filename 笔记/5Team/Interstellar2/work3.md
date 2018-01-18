html学习笔记：(http://www.w3school.com.cn/h.asp）
#HTML 标题（Heading）是通过 <h1> - <h6> 等标签进行定义的。
实例
<h1>This is a heading</h1>
<h2>This is a heading</h2>
<h3>This is a heading</h3>

#HTML 段落是通过 <p> 标签进行定义的。
实例
<p>This is a paragraph.</p>
<p>This is another paragraph.</p>

#HTML 链接是通过 <a> 标签进行定义的。
实例
<a href="http://www.w3school.com.cn">This is a link</a>

注释：在 href 属性中指定链接的地址。

#HTML 图像是通过 <img> 标签进行定义的。
实例
<img src="w3school.jpg" width="104" height="142" />

注释：图像的名称和尺寸是以属性的形式提供的。

#HTML 元素语法
HTML 元素以开始标签起始
HTML 元素以结束标签终止
元素的内容是开始标签与结束标签之间的内容
某些 HTML 元素具有空内容（empty content）
空元素在开始标签中进行关闭（以开始标签的结束而结束）
大多数 HTML 元素可拥有属性

#HTML 链接由 <a> 标签定义。链接的地址在 href 属性中指定：
<a href="http://www.w3school.com.cn">This is a link</a>

#HTML 水平线
<hr /> 标签在 HTML 页面中创建水平线。
hr 元素可用于分隔内容。

#HTML 注释
可以将注释插入 HTML 代码中，这样可以提高其可读性，使代码更易被人理解。浏览器会忽略注释，也不会显示它们。
注释是这样写的：
实例
<!-- This is a comment -->

#HTML 提示 - 如何查看源代码
您一定曾经在看到某个网页时惊叹道 “WOW! 这是如何实现的？”
如果您想找到其中的奥秘，只需要单击右键，然后选择“查看源文件”（IE）或“查看页面源代码”（Firefox），其他浏览器的做法也是类似的。这么做会打开一个包含页面 HTML 代码的窗口。

JavaScript学习笔记（http://www.w3school.com.cn/b.asp）
#JavaScript：写入 HTML 输出
实例
document.write("<h1>This is a heading</h1>");
document.write("<p>This is a paragraph</p>");

提示：您只能在 HTML 输出中使用 document.write。如果您在文档加载后使用该方法，会覆盖整个文档。
#JavaScript：对事件作出反应
实例
<button type="button" onclick="alert('Welcome!')">点击这里</button>

#alert() 函数在 JavaScript 中并不常用，但它对于代码测试非常方便。
onclick 事件只是您即将在本教程中学到的众多事件之一。
JavaScript：改变 HTML 内容
#使用 JavaScript 来处理 HTML 内容是非常强大的功能。
实例
x=document.getElementById("demo")  //查找元素
x.innerHTML="Hello JavaScript";    //改变内容

您会经常看到 document.getElementByID("some id")。这个方法是 HTML DOM 中定义的。
DOM（文档对象模型）是用以访问 HTML 元素的正式 W3C 标准。
您将在本教程的多个章节中学到有关 HTML DOM 的知识。
JavaScript：改变 HTML 图像
本例会动态地改变 HTML <image> 的来源 (src)：
The Light bulb
点击灯泡就可以打开或关闭这盏灯

#JavaScript 能够改变任意 HTML 元素的大多数属性，而不仅仅是图片。
JavaScript：改变 HTML 样式
改变 HTML 元素的样式，属于改变 HTML 属性的变种。
实例
x=document.getElementById("demo")  //找到元素
x.style.color="#ff0000";           //改变样式

JavaScript：验证输入
JavaScript 常用于验证用户的输入。
实例
if isNaN(x) {alert("Not Numeric")};

#提示：JavaScript 与 Java 是两种完全不同的语言，无论在概念还是设计上。
Java（由 Sun 发明）是更复杂的编程语言。
ECMA-262 是 JavaScript 标准的官方名称。
JavaScript 由 Brendan Eich 发明。它于 1995 年出现在 Netscape 中（该浏览器已停止更新），并于 1997 年被 ECMA（一个标准协会）采纳。

#<script> 标签
如需在 HTML 页面中插入 JavaScript，请使用 <script> 标签。
<script> 和 </script> 会告诉 JavaScript 在何处开始和结束。
<script> 和 </script> 之间的代码行包含了 JavaScript：
<script>
alert("My First JavaScript");
</script>
您无需理解上面的代码。只需明白，浏览器会解释并执行位于 <script> 和 </script> 之间的 JavaScript。
那些老旧的实例可能会在 <script> 标签中使用 type="text/javascript"。现在已经不必这样做了。JavaScript 是所有现代浏览器以及 HTML5 中的默认脚本语言。

#<head> 中的 JavaScript 函数
在本例中，我们把一个 JavaScript 函数放置到 HTML 页面的 <head> 部分。
该函数会在点击按钮时被调用：
实例
<!DOCTYPE html>
<html>

<head>
<script>
function myFunction()
{
document.getElementById("demo").innerHTML="My First JavaScript Function";
}
</script>
</head>

<body>

<h1>My Web Page</h1>

<p id="demo">A Paragraph</p>

<button type="button" onclick="myFunction()">Try it</button>

</body>
</html>

#<body> 中的 JavaScript 函数
在本例中，我们把一个 JavaScript 函数放置到 HTML 页面的 <body> 部分。
该函数会在点击按钮时被调用：
实例
<!DOCTYPE html>
<html>
<body>

<h1>My Web Page</h1>

<p id="demo">A Paragraph</p>

<button type="button" onclick="myFunction()">Try it</button>

<script>
function myFunction()
{
document.getElementById("demo").innerHTML="My First JavaScript Function";
}
</script>

</body>
</html>

提示：我们把 JavaScript 放到了页面代码的底部，这样就可以确保在 <p> 元素创建之后再执行脚本。
外部的 JavaScript
也可以把脚本保存到外部文件中。外部文件通常包含被多个网页使用的代码。
外部 JavaScript 文件的文件扩展名是 .js。
如需使用外部文件，请在 <script> 标签的 "src" 属性中设置该 .js 文件：
实例
<!DOCTYPE html>
<html>
<body>
<script src="myScript.js"></script>
</body>
</html>

#在 <head> 或 <body> 中引用脚本文件都是可以的。实际运行效果与您在 <script> 标签中编写脚本完全一致。
提示：外部脚本不能包含 <script> 标签。

MySQL学习笔记

MySQL学习笔记

1. MySQL服务的启动、停止与卸载

在 Windows 命令提示符下运行:
启动: net start MySQL
停止: net stop MySQL
卸载: sc delete MySQL
＃使用这些命令要看你的服务里存在不存在相应的服务，`services.msc`
2. 登陆

#mysql -h 主机名 -u 用户名 -p
mysql -h 1.1.1.1 -u user -ppassword
3. 修改root用户密码

方法1： 用SET PASSWORD命令

首先登录MySQL。 
格式：mysql> set password for 用户名@localhost = password('新密码'); 
例子：mysql> set password for root@localhost = password('123'); 
方法2：用mysqladmin

格式：mysqladmin -u用户名 -p旧密码 password 新密码 
例子：mysqladmin -uroot -p123456 password 123
或者
使用 mysqladmin 方式:
打开命令提示符界面, 执行命令: mysqladmin -u root -p password 新密码
执行后提示输入旧密码完成密码修改,当旧密码为空时直接按回车键确认即可。
方法3：用UPDATE直接编辑user表

首先登录MySQL。 
mysql> use mysql; 
mysql> update user set password=password('123') where user='root' and host='localhost'; 
mysql> flush privileges; 
方法4：在忘记root密码的时候，可以这样

以windows为例： 
1. 关闭正在运行的MySQL服务。 
2. 打开DOS窗口，转到mysql\bin目录。 
3. 输入mysqld --skip-grant-tables 回车。--skip-grant-tables 的意思是启动MySQL服务的时候跳过权限表认证。 
4. 再开一个DOS窗口（因为刚才那个DOS窗口已经不能动了），转到mysql\bin目录。 
5. 输入mysql回车，如果成功，将出现MySQL提示符 >。 
6. 连接权限数据库： use mysql; 。 
6. 改密码：update user set password=password("123") where user="root";（别忘了最后加分号） 。 
7. 刷新权限（必须步骤）：flush privileges;　。 
8. 退出 quit。 
9. 注销系统，再进入，使用用户名root和刚才设置的新密码123登录。
4. 创建数据库

#create database 数据库名 [其他选项];
create database samp_db character set gbk;
提示: 可以使用 show databases; 命令查看已经创建了哪些数据库。
5. 执行sql语句

1. 直接输入sql执行

MySQL> select now();
+---------------------+
| now()               |
+---------------------+
| 2013-09-18 13:55:45 |
+---------------------+
1 row in set (0.00 sec)
2. 执行编写好的sql脚本

# 此方法一般用来导入数据库
mysql> source H:/1.sql
+---------------------+
| now()               |
+---------------------+
| 2013-09-18 13:54:04 |
+---------------------+
1 row in set (0.00 sec)

mysql -u用户名 -p密码 数据库名 < 数据库名.sql
#mysql -uabc_f -p abc < abc.sql

导出数据库：mysqldump -u 用户名 -p 数据库名 > 导出的文件名 
mysqldump -u root -p news > news.sql
3. select ...into outfile 方式执行sql

例1:
mysql> select now()  into outfile 'h:/data/2.sql';
Query OK, 1 row affected (0.00 sec)
例2:
MariaDB [dvwa]>  select now()  into outfile 'C:/xampp/htdocs/1.sql';
Query OK, 1 row affected (0.02 sec)
MariaDB [dvwa]> load_file('C:/xampp/htdocs/1.sql');
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'load_file('C:/xampp/htdocs/1.sql')' at line 1
MariaDB [dvwa]> select load_file('C:/xampp/htdocs/1.sql');^A
+------------------------------------+
| load_file('C:/xampp/htdocs/1.sql') |
+------------------------------------+
| 2017-05-25 00:06:06
               |
+------------------------------------+
4. 使用mysql命令执行

mysql -D mysql -u root -p -e

例1
H:\>mysql -uadmin -p -e "select now()"
Enter passworH: ****
+---------------------+
| now()               |
+---------------------+
| 2013-09-18 13:57:09 |
+---------------------+
例2
mysql -D mysql -u root -p -e "select 1234"
Enter password:
+------+
| 1234 |
+------+
| 1234 |
+------+
mysql -D samp_db -u root -p <

#在控制台下, MySQL客户端也可以对语句进行单句的执行而不用保存为.sql文件。
#createtable.sql 的文件中,通过命令提示符下的文件重定向执行执行该脚本。
mysql -D samp_db -u root -p < createtable.sql
6. 创建表

#create table 表名称(列声明);
	create table students
	（
		id int unsigned not null auto_increment primary key,
		name char(8) not null,
		sex char(4) not null,
		age tinyint unsigned not null,
		tel char(13) null default "-"
	);
提示:

使用 show tables; 命令可查看已创建了表的名称;
使用 describe 表名; 或desc 表名 命令可查看已创建的表的详细信息。
7. 插入数据

#insert [into] 表名 [(列名1, 列名2, 列名3, ...)] values (值1, 值2, 值3, ...);
insert into students values(NULL, "王刚", "男", 20, "13811371377");
insert into students (name, sex, age) values("孙丽华", "女", 21);

＃1
insert into users SET username='ewrfg2', password='wer443';  
8. 查询数据

#select 列名称 from 表名称 [查询条件];
select name, age from students;
select * from students;
where子句

##select 列名称 from 表名称 where 条件;
##where 子句不仅仅支持 "where 列名 = 值" 这种名等于值的查询形式, 对一般的比较运算的运算符都是支持的, 例如 =、>、<、>=、<、!= 以及一些扩展运算符 is [not] null、in、like 等等。 还可以对查询条件使用 or 和 and 进行组合查询, 以后还会学到更加高级的条件查询方式, 这里不再多做介绍。
select * from students where sex="女";
###查询年龄在21岁以上的所有人信息: 
select * from students where age > 21;
###查询名字中带有 "王" 字的所有人信息: 
select * from students where name like "%王%";
###查询id小于5且年龄大于20的所有人信息: 
select * from students where id<5 and age>20;
9. 更新数据

#update 表名称 set 列名称=新值 where 更新条件;
update students set tel=default where id=5;#将id为5的手机号改为默认的"-"
update students set age=age+1;#将所有人的年龄增加1
update students set name="张伟鹏", age=19 where tel="13288097888";#将手机号为 13288097888 的姓名改为 "张伟鹏", 年龄改为 19
10. 删除数据

#delete from 表名称 where 删除条件;
删除id为2的行: 
delete from students where id=2;
删除所有年龄小于21岁的数据: 
delete from students where age<20;
`删除表中的所有数据`: 
delete from students;
11. 创建后对表的修改

1. 添加列

##alter table 表名 add 列名 列数据类型 [after 插入位置];
###在表的最后追加列 address: 
alter table students add address char(60);
###在名为 age 的列后插入列 birthday: 
alter table students add birthday date after age;
2. 修改列

##alter table 表名 change 列名称 列新名称 新数据类型
###将表 tel 列改名为 telphone: 
alter table students change tel telphone char(13) default "-";
###将 name 列的数据类型改为 char(16): 
alter table students change name name char(16) not null;
3. 删除列

##alter table 表名 drop 列名称;
###删除 birthday 列: 
alter table students drop birthday;
4. 重命名表

##alter table 表名 rename 新表名;
###重命名 students 表为 workmates: 
alter table students rename workmates;
5. 删除整张表

##drop table 表名;
###删除 workmates 表: 
drop table workmates;
6. 删除整个数据库

##drop database 数据库名;
###删除 samp_db 数据库: 
drop database samp_db;
12. 启用mysql执行sql语句日志

以本机MySQL为例，先查看mysql日志启用情况，默认情况下mysql日志是关闭状态，可以通过如下语句

SHOW VARIABLES LIKE "general_log%"
，进行查看，这时我们看到的是OFF，还有日志所在的位置，使用此默认位置