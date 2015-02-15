<?php

class Favorite_Model extends MY_Model {

    const DB_TABLE = 'favorites';
    const DB_TABLE_PK = 'fav_id';

    /**
     * Favorite unique identifier
     * @var int
     */
    public $fav_id;


    /**
     * ID of the comment the comment was posted on
     * @var int
     */
    public $art_id;

    /**
     * The user who posted the comment
     * @var int
     */
    public $user_id;
    

    function __construct() {
        parent::__construct();
    }


    public function get_by_art($art_id, $limit = 0, $offset = 0) {
        if ($limit) {
            $query = $this->db->get_where($this::DB_TABLE, array('art_id' => $art_id), $limit, $offset);
        } else {
            $query = $this->db->get_where($this::DB_TABLE, array('art_id' => $art_id));
        }
        $ret_val = array();
        $class = get_class($this);
        foreach ($query->result() as $row) {
            $model = new $class;
            $model->populate($row);
            $ret_val[$row->date] = $model;
        }
        return $ret_val;
    }

}
