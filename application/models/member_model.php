<?php

class Member_Model extends MY_Model {

    const DB_TABLE = 'members';
    const DB_TABLE_PK = 'member_id';
    /**
     * Member unique identifier
     * @var string 
     */
    public $member_id;
    
    /**
     * Member surname
     * @var string 
     */
    public $surname;
    
    /**
     * Member first name
     * @var string 
     */
    public $first_name;
    
    /**
     * Member middle name
     * @var string 
     */
    public $middle_name;
    
    /**
     * Member date of birth
     * @var date
     */
    public $dob;
    
    /**
     * National identification number
     * @var string 
     */
    public $id_no;
    
    /**
     * Mobile No
     * @var string
     */
    public $mobile;
    
    /**
     * office Number *confirm the use of this record
     * @var int
     */
    public $office_no;
    
    /**
     * Email address
     * @var string
     */
    public $email;
    
    /**
     * Date of joining the sacco
     * @var string
     */
    public $date_of_joining;
    
    /**
     * Path to the member's profile photo
     * @var string
     */
    public $photo;
    
    /**
     * Encrypted password (md5 encryption)
     * @var string
     */
    public $hashed_password;
    
    function __construct() {
        parent::__construct();
        
    }
    
}

