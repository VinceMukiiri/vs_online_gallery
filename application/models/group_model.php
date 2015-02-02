<?php

class Group_Model extends MY_Model {

    const DB_TABLE = 'groups';
    const DB_TABLE_PK = 'group_id';
    
    /**
     * Group unique identifier
     * @var string 
     */
    public $group_id;
    
    /**
     * The name of the group
     * @var string 
     */
    public $group_name;
    
    /**
     * Encrypted password used to access the group (md5 encryption)
     * @var string
     */
    public $hashed_password;
    
    function __construct() {
        parent::__construct();
        
    }
    
}

