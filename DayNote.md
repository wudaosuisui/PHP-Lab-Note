## 0731Note
> 命名法
1. 下划线法 eg:$my_apple
1. 骆驼式命名法（驼峰命名法）eg:$myApple
> 语法
1. var_dump(变量名); 
* 会返回：变量类型（内存空间）变量内容 （变量内容不一定显示）
* eg:

 $string = "就是就是";
 var_dump($string);
 echo "<br />";
 $string = 9494;
 var_dump($string);
  echo "<br />";
  
  string(12) "就是就是"

int(9494)

2. 定义字符串的方式 单引号、双引号、Hcrcdoc结构形式

首先使用定界符表示字符串（<<<），接着在“<<<“之后提供一个标识符GOD，然后是字符串，最后以提供的这个标识符结束字符串。
eg:

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

3. error_reporting(0); //禁止显示PHP警告提示

4. $var3 = "节日快乐！";
 unset($var3);//释放var3
 
5.echo 变量 或者字符串  可以输出变量或者字符串



