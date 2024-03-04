<?php
//kecilin semua hurup
echo strtolower("HELLO WORLD")."<br>"; 

//capital semua hurup
echo strtoupper("hello world")."<br>"; 

//capital hurup pertama
echo ucfirst("hello world")."<br>"; 

//capital hurup pertama pada setiap kata
echo ucwords("hello world")."<br>";

//menghitung jumlah hurup yang ada di seluruh kalimat 
echo strlen("hello world")."<br>"; 

//Menghapus spasi atau karakter lain dari kedua sisi string
$str = "Hello World!";
echo $str . "<br>";
echo trim($str,"ello")."<br>";

//Menghapus spasi atau karakter lain dari sisi kiri string
$str = "Hello World!";
echo $str . "<br>";
echo ltrim($str,"Hello")."<br>";

//Menghapus spasi atau karakter lain dari sisi kanan string
$str = "Hello World!";
echo $str . "<br>";
echo rtrim($str,"World!")."<br>";

//Menulis string yang diformat ke variabel
$number = 9;
$str = "Beijing";
$txt = sprintf("There are %u million bicycles in %s.",$number,$str);
echo $txt."<br>";

//Menghitung jumlah kata
echo str_word_count("Hello world!")."<br>";

//mengambil kalimat / kata yang lebih belakang dari kata yang diminta
echo strstr("Hello world","Hello")."<br>";

//sama kayak diatas tapi sensitif
echo stristr("Hello world!","WORLD")."<br>";

//mengganti kata
echo str_replace("world","Kamu","Hello world!")."<br>";

//mengulang kata atau kalimat
echo str_repeat("Hello World ",2)."<br>";

//menghapus jumlah hurup dari depan
echo substr("Hello world",3)."<br>";

//menghitung berapa jumlah hurup yang ada dalam kutip, berapa hurup awalnya
echo strpos("I love php, I love php too!","love")."<br>";

//menambahkan kata atau kalimat atau spasi diantara beberapa string
$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" & ",$arr)."<br>";

//
$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str))."<br>";

//
echo number_format("1000000")."<br>";
echo number_format("1000000",2)."<br>";
echo number_format("1000000",2,",",".")."<br>";

//
$str = "Hello";
echo md5($str)."<br>";

//
parse_str("name=Peter&age=43");
echo $name."<br>";
echo $age;

?>
