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

    
}