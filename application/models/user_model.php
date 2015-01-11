<?php

class User_Model extends MY_Model {

    const DB_TABLE = 'users';
    const DB_TABLE_PK = 'user_id';
    /**
     * User unique identifier
     * @var int 
     */
    public $user_id;
    
    /**
     * Username (used in login)
     * @var string 
     */
    public $username;
    
    /**
     * Encrypted admin password (md5 encryption)
     * @var string
     */
    public $hashed_password;
    
    /**
     * User email (for use when user forgets password and needs reset)
     * @var string
     */
    public $email;
    
    /**
     * User first name
     * @var string 
     */
    public $first_name;
    
    /**
     * User second name
     * @var strng 
     */
    public $second_name;
    
    /**
     * Path to user profile picture 
     * @var string
     */
    public $profile_picture;
    
    function __construct() {
        parent::__construct();
        
    }
    
}

