<?php

include_once "db.php";

$table=$_GET['table'];
$db=${ucfirst($table)};

if(!empty($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"../pic/".$_FILES['img']['name']);
    $_POST['img']=$_FILES['img']['name'];
}



switch($_GET['table']){
    case 'title':
        $_POST['sh']=($db->count(['sh'=>1])==0)?1:0;
        break;
    default:
        $_POST['sh']=1;
    break;
}



$db->save($_POST);

to("../back.php?do=<?=$table;?>");