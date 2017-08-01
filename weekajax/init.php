<?php 
	/*
	项目初始化页面	
	本页面包含很多其他PHP页面必需的公共的代码
	必须被包含到其他页面中！！！
	*/
	#连接到数据库服务器
	$conn=mysqli_connect('127.0.0.1','root','','dangdang',3306);
	#设置后续的SQL语句所用字符串
	$sql="set names utf8";
	mysqli_query($conn,$sql);
 ?>