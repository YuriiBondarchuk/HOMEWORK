<?php


require_once 'class/Session.php';






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
//    var_dump($_SESSION);die;
if (isset($_SESSION['login'])){
    render('/admin');
}
else {
    redirect('login');
}




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

    $dbh = mysqli_connect('localhost','yuriibondarchuk', 'Yurii18','yuriibondarchuk');

    mysqli_query($dbh, $sql_del);

    mysqli_close($dbh);

    $sql = "SELECT * FROM $name";

    render('/Admin_tables',['sql'=>$sql]);

}
function actionAdmin_tables_save() {
//    var_dump($_POST,$_GET);die;

    $title = $_POST['title'];
    $content = $_POST['content'];
    $name = $_GET['name'];
    if(isset($_GET['new_page']))
    {
        $sql_insert = "INSERT INTO $name SET title='{$title}', content='{$content}'";
<<<<<<< HEAD

    }
else {


=======

    }
else {


>>>>>>> c4a83c31e1e37d777e40b64f5afdc0b39e5e756e
    $id = $_GET['id'];
    $sql_update = "UPDATE $name SET title = '{$title}', content = '{$content}' WHERE id = $id";
}


//    var_dump($sql_update);die;

    $dbh = mysqli_connect('localhost','yuriibondarchuk', 'Yurii18','yuriibondarchuk');

    mysqli_query($dbh, (isset($_GET['new_page'])) ? $sql_insert : $sql_update);

    mysqli_close($dbh);

    $sql = "SELECT * FROM $name";
    render('/Admin_tables',['sql'=>$sql]);
}
function actionAdmin_new_page () {
    $new_insert = $_GET['name'];
    render('/Admin_new_page',['new_insert'=>$new_insert]);
<<<<<<< HEAD
=======
}

function  actionLogin(){

    render('/admin_login');
}

function  actionAdminauthor(){

    if (isset($_POST['login'])&&isset($_POST['password'])&&$_POST['password']!=''&&$_POST['login']=='admin'){
        $user = $_POST['login'];
        $hash_conf = require_once __DIR__."/config_hash.php";
        $password = md5($hash_conf['hash'].$_POST['password']);

        $sql_user= "SELECT login,password FROM users WHERE login = '{$user}'";

        $dbh = mysqli_connect('localhost','yuriibondarchuk', 'Yurii18','yuriibondarchuk');

        $data =  mysqli_query($dbh, $sql_user);
        $result = mysqli_fetch_all($data);
//        var_dump($result);die;


        if (!empty($result)){

            $user_db = $result[0][0];
            $password_db = $result[0][1];

            if ($user == $user_db && $password == $password_db){
                $auth = new Session();
                $auth->set('login',$user);
                $auth->set('role',$user);

                redirect('admin');
            }
            else {

                $nologin = 'you are not authorized';
                render('/admin_login',['nologin'=>$nologin]);
            }

        }








        mysqli_close($dbh);
    }
    else {
        $nologin = 'you are not authorized';
        render('/admin_login',['nologin'=>$nologin]);
    }


}


function actionAdmin_exit () {

    $del_user=new Session();
    $del_user->delete('login');

    $del_user->delete('role');

    redirect('admin');
>>>>>>> c4a83c31e1e37d777e40b64f5afdc0b39e5e756e
}