<?php include "inc/theWave.php"; ?>
<?php
    $error = "";
    if (isset($_POST['email']) && isset($_POST['password'])) {

        $email = $_POST['email'];
        $pass = $_POST['password'];
        $loginInfo = $db->getTheUserPasswordForLogin($email);
        if ($loginInfo->num_rows === 0) { 
            $error = "gebruiker niet gevonden";
        }
        while ($result = $loginInfo->fetch_array(MYSQLI_ASSOC)){
            // this is a check if the password is correct
            if (password_verify($pass, $result['password'])) {
                // this is a checkbox check for the remember me check 
                if (!empty($_POST["remember"])) {
                    setcookie("member_login", $email);
                } else {
                    setcookie("member_login", '');
                }
                // store values in session
                $_SESSION['user_id'] = $result['user_id'];
                $_SESSION['email'] = $result['email'];
                $_SESSION['name'] = $result['name'];
                $_SESSION['auth'] = $result['auth'];
                
                // go to the page of the users role
                if ($result['auth'] == "user") {
                    $_SESSION['auth'] = 'user';
                    // server fix for the relocation problem
                    echo "<script>window.location.href='dashboard';</script>";
                    exit;
                } else if ($result['auth'] == "admin") {
                    $_SESSION['auth'] = 'admin';
                    // server fix for the relocation problem
                    echo "<script>window.location.href='dashboard';</script>";
                    exit;
                } else{
					$_SESSION['user_id'] = '';
					$_SESSION['email'] = '';
					$_SESSION['name'] = '';
					$_SESSION['auth'] = '';
                    die("er is iets fout gegaan");
                }
            } else {
                $error = "het wachtwoord werkt niet";
            }
        }
    }
?>

<div class="loginPagina background">
    <div class="loginbox">
        <a href="home">
	        <img src="images/logo/bigLogo.png" alt="Eclipse Logo">
        </a>
        <form method="POST">
            <input value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>" type="text" name="email" placeholder="email" required>
            <input type="password" name="password" placeholder="password" required>
            <div class="error"><?php echo $error; ?></div>
            <label class="check">
                <input type="checkbox" name="remember" id="remember"
                <?php if(isset($_COOKIE["member_login"])) { ?> checked 
                <?php } ?> />Remember email
            </label><br>
            <button class="inloggen" type="submit">Login</button><br>
        </form> 
    </div>
</div>