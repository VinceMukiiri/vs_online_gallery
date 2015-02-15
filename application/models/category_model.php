<?php

class Category_Model extends MY_Model {

    const DB_TABLE = 'categories';
    const DB_TABLE_PK = 'category_id';

    /**
     * Favorite unique identifier
     * @var int
     */
    public $category_id;


    /**
     * ID of the comment the comment was posted on
     * @var int
     */
    public $category_name;
    
    function __construct() {
        parent::__construct();
    }



}
