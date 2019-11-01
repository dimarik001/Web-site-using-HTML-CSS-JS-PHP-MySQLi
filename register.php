<?php
session_start();
	$username = $_POST['uname'];
	$email = $_POST['email'];
	$password = $_POST['psw'];
	
	//Now I'll check variable to be not empty
	if(!empty($username) || !empty($email) || !empty($psw)){
		$host = "localhost";
		$dbUname = "root";
		//$dbEmail = "root";
		$dbPsw = "";
		$dbname = "dbmoto";
		
		//Create connection
		$conn = new mysqli($host, $dbUname, $dbPsw, $dbname);
		
		if(mysqli_connect_error()){
			die('Connect Error(' . mysqli_connect_errno().')'. mysqli_connect_error());
		} 
		else{

			$SELECT = "SELECT email From users Where email = ? Limit 1";
			$INSERT = "Insert Into users(`username`, `email`, `password`) values(?, ?, ?)";
			
			
			//Prepare STATEMENT
			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param("s", $email);
			$stmt->execute();
			$stmt->bind_result($email);
			$stmt->store_result();
			$rnum = $stmt->num_rows;
			
			if($rnum==0){
				$stmt->close();
				
		if ($stmt = $conn->prepare($INSERT)) {
				$stmt->bind_param("sss",$username, $email, $password);
				$stmt->execute();
				echo "New record inserted successfully";
				header('location:login.php');
			}
			else {
				printf("Errormessage: %s\n", $conn->error);
			}

			}
			else{
				echo "Someone already register using this email";
			}
			$stmt->close();
			$conn->close();
		}
	}
	else{
		echo 'All field are required';
		die();
	}
?>