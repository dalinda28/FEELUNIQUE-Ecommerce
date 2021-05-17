<?php
namespace App\Data;

use App\Entity\Category;

class SearchData{

    /**
     * @var int
     */
    public $page = 1;

    /**
     * @var string
     */
    public $q = '' ;

    /**
     * @var Category[]
     */
    public $categories = [];

}
?>