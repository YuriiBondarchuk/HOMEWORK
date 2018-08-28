<?php
require_once './DB.php';
require_once './Session.php';

class  SettingRating extends DB
{
    private $rating;
    private $data;


    public function __construct()
    {
        $this->data = $_POST;
        parent::__construct();
    }

    /**
     * @param mixed $rating
     */
    public function setRating()
    {
        $sql = "UPDATE commodity SET rating = {$this->rating} WHERE name = '{$this->data['name_commodity']}'";

        return $sql;

    }

    public function findRating()
    {
        $new_rating = ((int)$this->data['current_rating'] + (int)$this->data['rating']) / 2;

        $this->rating = $new_rating;
    }

}

$rating = new SettingRating();
//var_dump($this->data);die;

$rating->findRating();

$rating->query($rating->setRating());


array_push($_SESSION['rating'],$_POST['name_commodity'] );

header('Location: ../ ');

