<?php
class member extends controller
{

    public function memberInterface()
    {
        $this->view('member/form');
    }
    
    public function register()
    {
        $this->memberInterface();
        $rs = $this->model('memberRegister');
        if(isset($_POST['n']))
        {
            $rs->register($_POST['n']);
        }
        
    }
    public function memberList()
    {
        $rs = $this->model('memberList');
        $result = $rs->memberShows();
        $this->view('member/memberList',$result);   
    }
    
    public function memberLogs()
    {
        echo 'LOGS';
    }

    public function test()
    {
        
    }
    
}
