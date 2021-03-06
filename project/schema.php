<?php 
	include $_SERVER['DOCUMENT_ROOT'].'/learn/project/config/init.php';
	$schema = new schema();
	$table = array(
			'users' => "
				CREATE TABLE IF NOT EXISTS users
					(
						id int not null AUTO_INCREMENT PRIMARY KEY,
						username varchar(50),
						email varchar(150) UNIQUE KEY,
						password varchar(200),
						session_token text,
						activate_token text,
						password_reset_token text,
						role enum('Admin','Staff') default 'Staff',
						status enum('Active','Passive') default 'Passive',
						added_by int,
						created_date datetime default current_timestamp,
						updated_date datetime on update current_timestamp
					)
			",
			'superuser' => "
				INSERT into users SET 
					username = 'Admin',
					email = 'admin@project.com',
					password = '".sha1('admin@project.comadmin123')."',
					role = 'Admin',
					status = 'Active'	
			",
			'products' => "
				CREATE TABLE IF NOT EXISTS products
					(
						id int not null AUTO_INCREMENT PRIMARY KEY,
						productname varchar(30),
						description text,
						stock int,
						rate int,
						status enum('Active','Passive') default 'Active',
						added_by int,
						created_date datetime default current_timestamp,
						updated_date datetime on update current_timestamp
					)
			"
		);

	foreach ($table as $key => $sql) {
		try{
			$success = $schema->create($sql);
			// echo $sql;
			if ($success) {
				echo "Query ".$key." Executed Successfully<br>";
			}else{
				echo "Problem While Executing Query :".$key."<br>";
			}
		}catch(PDOException $e){
			error_log(Date("M d, Y h:i:s a").' : (run Query) : '.$e->getMessage()."\r\n",3,ERROR_PATH.'error.log');
			return false;

		}
	}


 ?>