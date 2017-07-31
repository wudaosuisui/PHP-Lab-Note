-------------------------------------------------------------空值
赋值为NULL，尚未被赋值，被unset()（释放），这三种情况下变量被认为为NULL
<?php 
 error_reporting(0); //禁止显示PHP警告提示
 $var;
 var_dump($var);
 $var1 = null;
 var_dump($var1);
 $var2 = NULL;
 var_dump( $var2);
 $var3 = "节日快乐！";
 unset($var3);//释放var3
 var_dump($var3);
?>
结果：
NULL
NULL
NULL
NULL
-------------------------------------------------------------Heredoc结构形式 定义字符串
首先使用定界符表示字符串（<<<），接着在“<<<“之后提供一个标识符GOD，然后是字符串，最后以提供的这个标识符结束字符串。
在赋值符号后，输入定界符“<<<”,
接着是标识符，你可以用你的女神作为标识符“GOD”，也可以使用你喜欢的狗狗，“DOG”作为标识符，
但是，结尾处的标识符也必须是一样的。
此外，在结尾的一行，一定要另起一行，
并且此行除了“GOD”，并以“；”号结束之外，
不能有任何其他字符，前后都不能有，
包括空格，
否则会出现错误的哦。
<?php 
$string1 = <<<GOD
我有一只小毛驴，我从来也不骑。
有一天我心血来潮，骑着去赶集。
我手里拿着小皮鞭，我心里正得意。
不知怎么哗啦啦啦啦，我摔了一身泥.
GOD;

echo $string1;
?>
结果：
我有一只小毛驴，我从来也不骑。
有一天我心血来潮，骑着去赶集。
我手里拿着小皮鞭，我心里正得意。
不知怎么哗啦啦啦啦，我摔了一身泥.
-------------------------------------------------------------引号遇到美元符
当双引号中包含变量时，变量会与双引号中的内容连接在一起；

当单引号中包含变量时，变量会被当做字符串输出
<?php 
$love = "I love you!"; 
$string1 = "慕课网，$love";
$string2 = '慕课网，$love';
echo $string1;
echo "<br />";
echo $string2;
?>

结果：
慕课网，I love you!
慕课网，$love
-------------------------------------------------------------字符串中包含引号 
相互嵌套、转义字符“\”
<?php 
$str_string1 = '甲问："你在哪里学的PHP？"';
$str_string2 = "乙毫不犹豫地回答：'当然是慕课网咯！'";
$str_string3 = '甲问：\'能告诉我网址么？\'';
$str_string4 = "乙答道：\"www.imooc.com\"";
echo $str_string1;
echo "<br />";
echo $str_string2;
echo "<br />";
echo $str_string3;
echo "<br />";
echo $str_string4;
echo "<br />";
?>
结果
甲问："你在哪里学的PHP？"
乙毫不犹豫地回答：'当然是慕课网咯！'
甲问：'能告诉我网址么？'
乙答道："www.imooc.com"
-------------------------------------------------------------字符串的定义
<?php 
$str_string1 = '我是字符串';//单引号
$str_string2 = "我也是字符串哦";//双引号
echo $str_string1;
echo "<br />";
echo $str_string2;
?>
结果
我是字符串
我也是字符串哦
-------------------------------------------------------------浮点--科学计数法
<?php
$num_float1 = 1.234;//小数点
echo $num_float1;
echo "<br />";
$num_float2 = 1.2e3;//科学记数法，小写e
echo $num_float2;
echo "<br />";
$num_float3 = 7.0E-3;//科学记数法，大写E
echo $num_float3;
echo "<br />";
?>
结果：
1.234
1200
0.007
-------------------------------------------------------------int 进制转换
<?php
$data_int1 = 123; //十进制数
echo $data_int1;
echo "<br />";
$data_int2 = -123; //负数
echo $data_int2;
echo "<br />";
$data_int3 = 0123; //八进制数（等于十进制83）加前缀 0 
echo $data_int3;
echo "<br />";
$data_int4 = 0x123; //十六进制数（十进制291）加前缀 0x
echo $data_int4;
echo "<br />";
?>
结果
123
-123
83
291
-------------------------------------------------------------返回数据类型
<?php 
 $string = "就是就是";
 var_dump($string);
 echo "<br />";
 $string = 9494;
 var_dump($string);
  echo "<br />";
  $man = "男";
	$flag = $man == "男";
  var_dump($flag);
?>
结果：

string(12) "就是就是"

int(9494)

bool(true)
-------------------------------------------------------------查看所占内存空间
<?php 
echo $m1 = memory_get_usage(); 
echo "<br />";
$var_string = "123";
echo $m2 = memory_get_usage()-$m1; 
echo "<br />";
$n = 123;
echo $m3 = memory_get_usage()-$m1-$m2; 
echo "<br />";
$f = 123.00;
echo $m4 = memory_get_usage()-$m1-$m2-$m3; 
echo "<br />";
$var_array = array("123");
echo $m5 = memory_get_usage()-$m1-$m2-$m3-$m4; 
?>

结果：
217944
320
272
272
576

