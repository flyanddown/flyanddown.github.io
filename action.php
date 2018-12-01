<?php
 
$link = mysqli_connect('localhost', 'root', '123', 'test');
mysqli_query($link, 'set names utf8');
$info=  array();
header("Content-type: text/html; charset=utf-8");
$id=$_GET['maxid'];
$data = mysqli_query($link, "select * from talk where id>$id");
while ($array = mysqli_fetch_assoc($data)) {
    $info[] = $array;
};
 
 echo json_encode($info);
