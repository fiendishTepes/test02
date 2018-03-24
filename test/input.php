<?php 
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '123456789');
    define('DB', 'db_test1');
    define('TBL', 'tbl_register2');
    
    
    class test
    {
        public function testSql()
        {
            $con = new mysqli(HOST,USER,PASS,DB);
            $rs = $con->query('SELECT * FROM '.TBL)->fetch_array();
            return $rs;
        }
    }
    $connect = new mysqli(HOST,USER,PASS,DB);
    $rs = $connect -> query("SELECT * FROM tbl_register2");
					$total = $rs -> num_rows;
					$page = $connect -> query("SELECT * FROM tbl_register2 ORDER BY regId
												ASC LIMIT $start_page,$limit_page");
?>