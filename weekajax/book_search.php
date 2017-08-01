<?php
	//	html格式
	// header("Content-Type:text/html;charset=utf-8");
	// json格式
	header("Content-Type:application/json;charset=utf-8");

	@$kw=$_REQUEST['kw'] or die("没有搜索");

	$conn=mysqli_connect('127.0.0.1','root','','dangdang',3306);

	$sql="set names utf8";

	mysqli_query($conn,$sql);

	$sql="SELECT * FROM dd_book where bname like '%$kw%'";

	$result = mysqli_query($conn,$sql);

	$row=mysqli_fetch_all($result,MYSQLI_ASSOC);
//版本一
	// var_dump($row);
	// $html=""; 

	// foreach ($row as $key => $value) {

	// 		$bname=$value['bname'];

	// 		$html.="<li>$bname</li>";

	// 	}

	// echo $html;
//版本二
	//把关联数组转换成json格式
	echo json_encode($row);

?>