<?php

// include_once "../include/connect.php";
include_once "../include/db.php";
// 使用 trim 函數刪除用戶輸入數據的開頭和結尾的空格（以確保數據的一致性）
// 使用 htmlspecialchars 函數對用戶輸入數據進行 HTML 轉義，以防止跨站腳本攻擊（XSS 攻擊）
$acc=htmlspecialchars(trim($_POST['acc']));
                    
// $result=update('users',"{$_POST['id']}",['acc'=>"{$_POST['acc']}",
//                         'pw'=>"{$_POST['pw']}",
//                         'name'=>"{$_POST['name']}",
//                         'email'=>"{$_POST['email']}",
//                         'address'=>"{$_POST['address']}"
// ]);

// 因為原來 $_POST 的欄位即為整個資料表所有的欄位，故縮寫為 $_POST。
$res=$User->save($_POST);


if($res>0){
    $_SESSION ['msg']="更新成功";
}else{
    $_SESSION ['msg']="資料無異動";
};

header("location:../member.php");


?>