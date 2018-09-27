<?php
/**
 *
 * Created by PhpStorm.
 * User: Zver
 * Date: 27.09.2018
 * Time: 10:58
 */


class DB
{
    public static $connect;


    /**
     * @return mysqli
     */
    public static function getConnect()
    {
        self::$connect = new mysqli('localhost', 'root', '', '');

        if (self::$connect->connect_error) {
            die('Ошибка подключения (' . self::$connect->connect_errno . ') '
                . self::$connect->connect_error);
        } else  return self::$connect;

    }

    public static function createDB()
    {
        $create_db = "CREATE DATABASE test_bum CHARACTER SET utf8 COLLATE utf8_general_ci";

        self::$connect->query($create_db);
        self::$connect->select_db('test_bum');
        self::createTable();
    }

    public static function createTable()
    {
        $create_table = "CREATE TABLE user ( id INT AUTO_INCREMENT, name VARCHAR(30),
                         lastname VARCHAR(255),email VARCHAR(255), comment VARCHAR(255), PRIMARY KEY (id))";
        self::$connect->query($create_table);
    }


    public static function issetDB()
    {
        if (self::$connect->select_db('test_bum')) {
            return ;
        } else self::createDB();
    }
    public static function closeConnect()
    {
        self::$connect->close();
    }

}



