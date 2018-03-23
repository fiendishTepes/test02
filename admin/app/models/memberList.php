<?php
class memberList extends mysqli {
    public function memberShows($inp = [])
    {
        $con = new mysqli(HOST,USER,PASS,DB);
        $rs = $con->query("SELECT * FROM tbl_member");
        return $rs->fetch_object();
        
    }
}
