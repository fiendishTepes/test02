<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '123456789');
define('DB', 'db_test1');
define('TBL', 'tbl_register2');

class fiendish extends mysqli {

    protected  $db ;
    protected  $myQuery ;

    public function __construct() {
        $this->db = $connect = new mysqli(HOST, USER, PASS, DB);
        
    }
    public function fquery($sql)
    {
    	  return $this->myQuery = $this->db->query($sql);
          
    }

    public function fnumrows()
    {
       // $this->myQuery->fetch_array();
       echo $this->myQuery->num_rows;
       //var_dump($this->myQuery);
    }

    public function farray()
    {
       return $this->myQuery->fetch_object();
       //var_dump($this->myQuery);
    }

}
	
    $n = new fiendish();

    $rs =$n -> fquery("SELECT * FROM tbl_register2");
    $n->fnumrows();
    echo '<br>';
    while($arr = $n->farray())
    {
        echo $arr->regFirstName;
        echo '<br>';
    }

    
    

    

    

?>