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
        $this->view('member/memberList');
        $rs = $this->model('memberList');
        $arr = $rs->memberShows();
        
        
        
    }
    
    public function memberLogs()
    {
        echo 'LOGS';
    }
    
}
