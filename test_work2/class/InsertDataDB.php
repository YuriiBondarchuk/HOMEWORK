<?php
/**
 * Created by PhpStorm.
 * User: Zver
 * Date: 27.09.2018
 * Time: 13:20
 */
require_once './DB.php';
var_dump($_FILES);

class InsertDataDB
{
    private $name, $lastname, $email, $comment, $file;


    public function setData()
    {
        $this->name = $_POST['name'];
        $this->lastname = $_POST['lastname'];
        $this->email = $_POST['email'];
        $this->comment = $_POST['comment'];

        $insertDB = "INSERT INTO `user`(`name`, `lastname`, `email`, `comment`)
                     VALUES ('{$this->name}', '{$this->lastname}', '{$this->email}', '{$this->comment}')";

        DB::getConnect();

        DB::issetDB();

        DB::$connect->query($insertDB);


var_dump(mail($this->email,'BOT',$this->lastname));
    }

//    public function saveImage()
//    {
//
//
//        move_uploaded_file($_FILES['file']['tmp_name'],
//            '../uploads' . "/" . $this->name . '_' . $this->lastname. '.' . explode('/',$_FILES['file']['type'])[1]);
//    }

}

$data = new InsertDataDB();
$data->setData();
//$data->saveImage();
