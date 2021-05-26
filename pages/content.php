<?php
	if (!empty($_SESSION['auth'])) {

		$checkUsersAllowance = $db->checkUsersAllowance($_SESSION['user_id'],$_SESSION['name'],$_SESSION['email']);
		while ($result = $checkUsersAllowance->fetch_array(MYSQLI_ASSOC)){
			$_SESSION['auth'] = $result['auth'];

			if($result['auth'] == 'user') {
				switch(strtolower($pagePath))
				{ //everything is in lowercase so the cases must also be in lowercase
					case 'dashboard':
						include 'auth/user/dashboard.php';
						return;
				}
			} elseif ($result['auth'] == 'admin') {
				switch(strtolower($pagePath))
				{ //everything is in lowercase so the cases must also be in lowercase
					case 'dashboard':
						include 'auth/admin/dashboard.php';
						return;
				}
			} else {
				include 'unauthorized.php';
			}
		}
	} 
	switch(strtolower($pagePath)) 
	{ //everything is in lowercase so the cases must also be in lowercase
		case 'eclipse-website':
		case 'home':
			include 'guest/home.php';
			break;
		case 'login':
			include 'auth/login.php';
			break;
		default:
			include '404.php'; // when the page isset found
	}
?>