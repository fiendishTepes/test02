<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '123456789');
define('DB', 'db_test1');
define('TBL', 'tbl_register2');

class test {

    public function testSql() {
        $connect = new mysqli(HOST, USER, PASS, DB);
        $start_page = 0;
        $limit_page = 20;
        $rs = $connect->query("SELECT * FROM tbl_register2 ORDER BY regId ASC LIMIT $start_page,$limit_page");
        return $rs;
    }

}
$test = new test();

$rs2 = $test->testSql();
while ($arr = $rs2->fetch_object()) {
    echo $m++;
}
?>