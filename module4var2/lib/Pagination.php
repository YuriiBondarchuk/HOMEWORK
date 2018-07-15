<?php
/**
 * Created by PhpStorm.
 * User: Zver
 * Date: 13.06.2018
 * Time: 15:41
 */

class Pagination
{
    public $buttons = array();

    public function __construct(Array $options = array('itemsCount' => 50, 'itemsPerPage' => 2, 'currentPage' => 1))
    {
        extract($options);

        /** @var int $currentPage */
        if (!$currentPage) {
            return;
        }

        /** @var int $pagesCount
         *  @var int $itemsCount
         *  @var int $itemsPerPage
         */

        $pagesCount = ceil($itemsCount / $itemsPerPage);

        if ($pagesCount == 1) {
            return;
        }

        /** @var int $currentPage */
        if ($currentPage > $pagesCount) {
            $currentPage = $pagesCount;
        }

        $this->buttons[] = new Button(1, $currentPage > 1,1);

        for ($i =2; $i < $pagesCount; $i++) {
            $active = $currentPage != $i;
            $this->buttons[] = new Button($i, $active);
        }

        $this->buttons[] = new Button($currentPage , $currentPage < $pagesCount, $pagesCount);


    }
}


