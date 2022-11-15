<?php 


class User extends DB
{
	
	function __construct(DB $conn)
	{
		$this->conn = $conn->conn;
	}
	public	function all_data(){
		$sql = "SELECT * FROM todos";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function login_user($username, $password) {
		$sql = "SELECT * FROM `users` WHERE `username`= :username AND `password` = :password";
		$stmt = $this->conn->prepare($sql);
		$stmt->bindValue('username', $username);  
		$stmt->bindValue('password', $password);
		$stmt->execute();
		return $stmt;
	} 

	public function register($request)
	{
		$sql = "INSERT INTO `users`(`fullname`, `username`, `email`, `password`) VALUES (:fullname, :username, :email, :password)";
		$stmt = $this->conn->prepare($sql);
		$stmt->bindValue('fullname',$request['fullname']); 
		$stmt->bindValue('email',$request['email']); 
		$stmt->bindValue('username',$request['username']);
		$stmt->bindValue('password',$request['password']); 
		$stmt->execute();

		return $stmt;
	}

}

?>