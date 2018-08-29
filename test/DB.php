<?php
/**
 * Created by PhpStorm.
 * User: Zver
 * Date: 05.06.2018
 * Time: 17:53
 */

    class DB
    {

    protected $conection;

        public function __construct($host='localhost', $user='yurii', $password='Yurii_task8',$database='yurii_bondarchuk')
        {
                $this->conection = new mysqli($host, $user, $password,$database);

            if ( mysqli_connect_error()) {
                throw new Exception('Connected failed');

            }

        }
        public function query ($sql,$name=null) {

            if(!$this->conection){
                return false;
            }
            $sql = $sql." $name";
            $result = $this->conection->query($sql,$name=null);
            if(mysqli_error($this->conection)){
                throw new Exception(mysqli_error($this->conection));
            }
            if(is_bool($result)){

                return $result;
            }
            $data = array();
            while($row = mysqli_fetch_assoc($result)){
                $data[] = $row;

            }

            return $data;
        }
        public function escape ($str){
            return mysqli_escape_string($this->conection, $str);
        }

    }

