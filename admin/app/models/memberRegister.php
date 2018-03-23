<?php
class memberRegister extends mysqli
{
    public function register($a = [])
    {
        $con = new mysqli(HOST,USER,PASS,DB);
        $sql = "INSERT INTO tbl_member(memberFName,memberLName,memberEmail,memberUser,memberPass) "
                . "VALUES('{$a['fName']}','{$a['lName']}','{$a['email']}','{$a['user']}','{$a['pass']}')";
        if($rs = $con->query($sql))
        {
            echo "<script> swal('ลงทะเบียนสำเร็จ','','success'); </script>";
        }else
        {
            $rs->error;
        }
        
    }
}

