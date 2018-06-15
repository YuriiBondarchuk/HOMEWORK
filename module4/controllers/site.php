<?php
session_start();
//require_once 'sample/sample.php';
//require_once "class/DB.php";


function actionMain ()
{
//    $name1[]= 'hello';
    $db_table_name = [
        'business' => 'business',
        'sport' => 'sport',
        'cinema' => 'cinema',
        'style' => 'style',
        'fashion' => 'fashion'
    ];

    render ('/main',$db_table_name);
}

function actionList()
{

    $_SESSION['name'] = $_POST['name'];

   render('/list',['name'=>$_SESSION['name']]);
}

function actionPagination()
{
    $name = $_SESSION['name'];
    $count = $_SESSION['count'];
    $select_page = $_POST['select_page'];

    render('/list',['count'=>$count,'name'=>$name,'select_page'=>$select_page]);


}

function actionNews()
{
    $name = $_SESSION['name'];
    $id = $_GET['id'];


    render('/news',['name'=>$name,'id'=>(int)$id]);
}
function actionRename(){
   $i =  isset($_POST['text']) ? $_POST['text']:"No";
       render('/insert',['i'=>$i]);
}

function actionAdmin() {
//    $db_table_name = [
//        'business' => 'business',
//        'sport' => 'sport',
//        'cinema' => 'cinema',
//        'style' => 'style',
//        'fashion' => 'fashion'
//    ];

    render ('/admin');

}

function actionAdmin_tables() {
//    var_dump($_GET['name']);die;
    $name = $_GET['name'];
    $sql = "SELECT * FROM $name";
    render('/Admin_tables',['sql'=>$sql]);
}

function actionAdmin_tables_edit() {

    $name = $_GET['name'];
    $id = $_GET['id'];
    $sql = "SELECT title, content FROM $name WHERE id=$id";
    render('/Admin_tables_edit',['sql'=>$sql]);
}

function actionAdmin_tables_delete() {
    $name = $_GET['name'];
    $id = $_GET['id'];
    $sql_del= "DELETE  FROM $name WHERE id=$id";

    $dbh = mysqli_connect('localhost','YMB', 'YMB','news_site');

    mysqli_query($dbh, $sql_del);

    mysqli_close($dbh);

    $sql = "SELECT * FROM $name";

    render('/Admin_tables',['sql'=>$sql]);

}
function actionAdmin_tables_save() {
//    var_dump($_POST,$_GET);die;
    $name = $_GET['name'];
    $id = $_GET['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql_update = "UPDATE $name SET title = '{$title}', content = '{$content}' WHERE id = $id";
//    var_dump($sql_update);die;

    $dbh = mysqli_connect('localhost','YMB', 'YMB','news_site');

    mysqli_query($dbh, $sql_update);

    mysqli_close($dbh);

    $sql = "SELECT * FROM $name";
    render('/Admin_tables',['sql'=>$sql]);
}