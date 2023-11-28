<?php
include_once "../include/connect.php";
// 使用 trim 函數刪除用戶輸入數據的開頭和結尾的空格（以確保數據的一致性）
// 使用 htmlspecialchars 函數對用戶輸入數據進行 HTML 轉義，以防止跨站腳本攻擊（XSS 攻擊）
$acc=htmlspecialchars(trim($_POST['acc']));



// $sql = "insert into `users`(`acc`,`pw`,`name`,`email`,`address`)
//                      values('{$acc}','{$_POST['pw']}','{$_POST['name']}','{$_POST['email']}','{$_POST['address']}')";
// $pdo-> exec($sql);

insert("users",['acc'=> "{$acc}",
'pw'=>"{$_POST['pw']}",
'name'=> "{$_POST['name']}",
'email' => "{$_POST['email']}",
'address' => "{$_POST['address']}"]);


header("Location:../index.php");

?>