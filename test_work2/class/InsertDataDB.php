<?php

/**
 *
 * Created by PhpStorm.
 * User: Zver
 * Date: 27.09.2018
 * Time: 10:58
 */

class InsertDataDB
{
    private $name, $lastname, $email, $comment;


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
    }

    public function saveImage()
    {
        move_uploaded_file($_FILES['file']['tmp_name'],
            './uploads' . "/" . $this->name . '_' . $this->lastname . '.' . explode('/', $_FILES['file']['type'])[1]);
    }

    public function sendMailMsg()
    {
        $file = $this->name . '_' . $this->lastname . '.' . explode('/', $_FILES['file']['type'])[1];


        if (!file_exists('./uploads/' . $file)) mail($this->email, "New user profile",
            "User name: $this->name \r\n User last name: $this->lastname \r\n User comment : $this->comment", 'From: example@email.com');

        else InsertDataDB::sendMailMsgPicture($file);

    }

    public function sendMailMsgPicture($data)
    {
        {
            $fp = fopen('./uploads/' . $data, "r");

            if (!$fp) {

                print "The $data file can not be read";

                exit();

            }

            $file = fread($fp, filesize('./uploads/' . $data));

            fclose($fp);

            $massage = "User name: $this->name \r\n User last name: $this->lastname \r\n User comment : $this->comment";

            $boundary = "--" . md5(uniqid(time()));
            $headers = "From: example@gmail.com\r\n";

            $headers .= "MIME-Version: 1.0\n";

            $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\n";

            $multipart = "--$boundary\n";

            $kod = 'windows-1251';

            $multipart .= "Content-Type: text/html; charset=$kod\n";

            $multipart .= "Content-Transfer-Encoding: Quot-Printed\n\n";

            $multipart .= "$massage\n\n";

            $message_part = "--$boundary\n";

            $message_part .= "Content-Type: application/octet-stream\n";

            $message_part .= "Content-Transfer-Encoding: base64\n";

            $message_part .= "Content-Disposition: attachment; filename = \"" . $data . "\"\n\n";

            $message_part .= chunk_split(base64_encode($file)) . "\n";

            $multipart .= $message_part . "--$boundary--\n";

            if (!mail($this->email, "New user profile", $multipart, $headers)) {

                echo "Sorry, no message sent";

                exit();

            } else {
                header('Refresh: 2; index.html');
                echo "<strong> <h3>Email sent<h3/> </strong>";


            }

        }

    }
}





