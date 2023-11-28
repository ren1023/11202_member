<?php

// include_once "../include/connect.php";
include_once "../include/db.php";
// 使用 trim 函數刪除用戶輸入數據的開頭和結尾的空格（以確保數據的一致性）
// 使用 htmlspecialchars 函數對用戶輸入數據進行 HTML 轉義，以防止跨站腳本攻擊（XSS 攻擊）
$acc=htmlspecialchars(trim($_POST['acc']));





// $sql = "update `users` set 
//                         `acc`='{$_POST['acc']}',
//                         `pw`='{$_POST['pw']}',
//                         `name`='{$_POST['name']}',
//                         `email`='{$_POST['email']}',
//                         `address`='{$_POST['address']}' 
//         where `id`='{$_POST['id']}'";
                    
// $result=update('users',"{$_POST['id']}",['acc'=>"{$_POST['acc']}",
//                         'pw'=>"{$_POST['pw']}",
//                         'name'=>"{$_POST['name']}",
//                         'email'=>"{$_POST['email']}",
//                         'address'=>"{$_POST['address']}"
// ]);

$res=$User->save($_POST);

        
// 將更新的資料，到資料表
// $sql="update`dept`set`code`= '901',`name`=' 演藝科 ' where`id`='9';";

// $result=$pdo-> exec($sql);
// echo "$result";
// exit();


if($res>0){
    $_SESSION ['msg']="更新成功";
}else{
    $_SESSION ['msg']="資料無異動";
};

header("location:../member.php");

// if($result>0){
//     header("Location:./index.php");
//     echo "更新成功";


// }else{
//     echo "請確認資料後，再重新送出";
//     header("Location:update.php");
// }
?>