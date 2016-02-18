<?php
require_once(dirname(__FILE__).'/../includes/core.inc.php');

class SQL{
    private static $instance = null;

    private $link = false;
    private $db = null;
    private $result = false;

    public $sqltype;
    public $sqlhost;
    public $sqluser;
    public $sqlpass;
    public $sqlbase;
    public $prefix;

    private $total_queries = 0;

    public function __construct($db_config){
        if(array_key_exists('type',$db_config))
            $this->sqltype = $db_config['type'];
        if(array_key_exists('host',$db_config))
            $this->sqlhost = $db_config['host'];
        if(array_key_exists('user',$db_config))
            $this->sqluser = $db_config['user'];
        if(array_key_exists('password',$db_config))
            $this->sqlpass = $db_config['password'];
        if(array_key_exists('database',$db_config))
            $this->sqlbase = $db_config['database'];
        if(array_key_exists('prefix',$db_config))
            $this->prefix = $db_config['prefix'];
    }

    public static function getInstance(){
        if(is_null(self::$instance)){
            self::newInstance($db_config_0);
        }
        return self::$instance;
    }
}