<?php
class TCO_SQL
{
    const DB_HOST = 'localhost';
    public $db_name = 'online_shop';
    public $db_user = 'root';
    public $db_pass = '';
    public $db_con;

    public function __construct($name, $user, $pass)
    {
        $this->db_name = $name;
        $this->db_user = $user;
        $this->db_pass = $pass;
    }

    /**
     * @brief for connecting to database
     * @return string
     */
    public function connection()
    {
        $this->db_con = new mysqli(self::DB_HOST,
        $this->db_user, $this->db_pass, $this->db_name);
    }


}



