<?php
class memberList extends mysqli {
    public function memberShows($inp = [])
    {
        $con = new mysqli(HOST,USER,PASS,DB);
        return $con->query("SELECT * FROM tbl_member");
        
    }
}
