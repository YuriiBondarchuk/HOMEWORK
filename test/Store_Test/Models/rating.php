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
    public function addNewRating()
    {
        $sql = "INSERT INTO `rating_commodity`(`commodity_name`, `rating`) VALUES ('{$this->data['name_commodity']}','{$this->data['rating']}')";

        SettingRating::query($sql);


    }

    public function countNewAvarageRating()
    {
        $count = SettingRating::query("SELECT COUNT(*) FROM rating_commodity WHERE commodity_name = '{$this->data['name_commodity']}'")[0]['COUNT(*)'];
        $sum = SettingRating::query("SELECT SUM(rating) FROM rating_commodity WHERE commodity_name = '{$this->data['name_commodity']}'")[0]['SUM(rating)'];

        $this->rating = round (floatval($sum)/(int) $count,1);
    }

    public function upgradeRatingDB()
    {
        $sql = "UPDATE `commodity` SET `rating` = '{$this->rating}' WHERE `name` = '{$this->data['name_commodity']}'";
        SettingRating::query($sql);
    }


}

$rating = new SettingRating();


$rating->addNewRating();
$rating->countNewAvarageRating();
$rating->upgradeRatingDB();


array_push($_SESSION['rating'], $_POST['name_commodity']);

header('Location: ../ ');

