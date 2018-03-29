<?php 
class login
{
	protected $user = '';
	protected $pass = '';
	protected $conf = '';
	protected $times = '';

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
				$sql = "SELECT * FROM tbl_member 
				WHERE 
				memUser = '{$this->user}' AND memPass = '{$this->pass}' ";
				$arr = $rs->fetch_object();
				echo '<font color=green>Login Complete...</font>';
				$_SESSION['memUser'] = $arr->memUser ;
				$_SESSION['memClass'] = $arr->memClass;
				$_SESSION['login'] = 'on';
				$_SESSION['time'] = time();
			}else
			{
				echo '<font color=red>Login Fail...</font>';
			}
		}
	}

	public function timeOut()
	{
		if($_SESSION['time'] + 1*60 < time())
		{
			session_destroy();
			echo 'time out = '.$_SESSION['time'];
			header("Location: login.php");
		}else
		{
			echo 'else = '.$_SESSION['time'];
		}
	}
}
?>