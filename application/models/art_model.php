<?php

class Art_Model extends MY_Model {

    const DB_TABLE = 'art';
    const DB_TABLE_PK = 'art_id';

    /**
     * Art unique identifier
     * @var int
     */
    public $art_id;

    /**
     * The title of the art
     * @var string
     */
    public $title;

    /**
     * A short description about the art
     * @var string
     */
    public $description;

    /**
     * The name of the file in the site directory
     * @var string
     */
    public $file_name;

    /**
     * The file extention (e.g. word, pdf, excel)
     * @var string
     */
    public $file_type;

    /**
     * The group to which this srt belongs to
     * @var int
     */
    public $group_id;

    /**
     * Identification of the user who uploaded the art.
     * @var int
     */
    public $uploader_user_id;
    
    /**
     * Category of the art
     * @var int
     */
    public $category_id;

    /**
     * A timestamp of the date uploaded
     * @var int 
     */
    public $upload_date;

    /**
     * The number of times the countents has been viewed
     * @var int 
     */
    public $view_count;
    
    /**
     * The number of favorites the art has
     * @var int 
     */
    public $favorites;
    
    /**
     * The price of the art
     * @var int 
     */
    public $price;

    function __construct() {
        parent::__construct();
    }

    public function AddView() {
        $this->view_count = $this->view_count + 1;
        $data = array(
            'view_count' => $this->view_count,
        );

        $this->db->where($this::DB_TABLE_PK, $this->art_id);
        $this->db->update($this::DB_TABLE, $data);
    }
    
    public function AddFavorite() {
        $this->favorites = $this->favorites + 1;
        $data = array(
            'favorites' => $this->favorites,
        );

        $this->db->where($this::DB_TABLE_PK, $this->art_id);
        $this->db->update($this::DB_TABLE, $data);
    }

    public function get_by_timestamp($limit = 0, $offset = 0) {
        $this->db->order_by("upload_date", "desc");
        if ($limit) {
            $query = $this->db->get($this::DB_TABLE, $limit, $offset);
        } else {
            $query = $this->db->get($this::DB_TABLE);
        }
        $ret_val = array();
        $class = get_class($this);
        foreach ($query->result() as $row) {
            $model = new $class;
            $model->populate($row);
            $ret_val[$row->upload_date] = $model;
        }
        return $ret_val;
    }
    
    public function get_by_views($limit = 0, $offset = 0) {
        $this->db->order_by("view_count", "desc");
        if ($limit) {
            $query = $this->db->get($this::DB_TABLE, $limit, $offset);
        } else {
            $query = $this->db->get($this::DB_TABLE);
        }
        $ret_val = array();
        $class = get_class($this);
        foreach ($query->result() as $row) {
            $model = new $class;
            $model->populate($row);
            $ret_val[$row->art_id] = $model;
        }
        return $ret_val;
    }
    
    public function get_by_favorites($limit = 0, $offset = 0) {
        $this->db->order_by("favorites", "desc");
        if ($limit) {
            $query = $this->db->get($this::DB_TABLE, $limit, $offset);
        } else {
            $query = $this->db->get($this::DB_TABLE);
        }
        $ret_val = array();
        $class = get_class($this);
        foreach ($query->result() as $row) {
            $model = new $class;
            $model->populate($row);
            $ret_val[$row->art_id] = $model;
        }
        return $ret_val;
    }

}
