<?php 
class login
{
	protected $user = '';
	protected $pass = '';
	protected $conf = '';

	public function __construct()
	{
		$con = new mysqli('localhost','root','123456789','db_oop');
		$this->conf = $con;
	}

	public function loginUser($data = [])
	{
		if(!empty($data))
		{
			$this->user = $data['user'];
			$this->pass = $data['pass'];
		}
	}

	public function loginQuery()
	{
		if(!empty($this->user) && !empty($this->pass))
		{
			$rs = $this->conf->query("SELECT * FROM tbl_member 
				WHERE 
				memUser = '{$this->user}' AND memPass = '{$this->pass}' ");

			if($rs->num_rows > 0)
			{
				echo 'Login Complete...';
				header("Location: http://www.google.com");
			}else
			{
				echo 'Login Failll...';
			}
		}
	}
}
?>