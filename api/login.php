<?php
// include_once "../include/connect.php";
include_once "../include/db.php";

$acc = $_POST['acc'];
$pw = $_POST['pw'];

// $sql="select count(*) from users where `acc`='$acc' && `pw`='$pw'";
// $db=new DB('users');
// $res=total('users',['acc'=>$acc,'pw'=>$pw]);
$res = $User->count('users', ['acc' => $acc, 'pw' => $pw]);
// $user=$pdo-> query($sql)->fetch();
// $user=$pdo->query($sql)->fetchColumn();


// echo $user=$pdo->query($sql)->fetchColumn();//for debug
// exit();//for degup

// if($user['acc']== $acc && $user['pw']==$pw){


if ($res) {
    $_SESSION['user'] = $acc;
    header("location:../index.php");
} else {
    header ('location:../login_form.php?error = 帳號密碼錯誤 ');
}
