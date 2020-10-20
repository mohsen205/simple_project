<?php
session_start();
$title = 'login ';
require_once './assest/header.php';
require_once './php/query.php';
if(isset($_POST['login'])){
    $mail = $_POST['email'];
    $password = $_POST['password'];
    $create = new action();
    $res = $create->selectWithCon('SELECT email , password FROM user WHERE email = ? ',array($mail));
    if($res == false){
        echo 'there is no email like this';
    }else{
		if(password_verify($password, $res[0]['password'])){
			$res = $create->selectWithCon('SELECT id , user_status FROM user WHERE email = ? ',array($mail));
            if($res[0]['user_status'] == 1){
                $_SESSION['id'] = $res[0]['id'];
                header('location:interface.php');
            }else{
                header('location:404.php');
            }
			
		}
	}
}

?>
<div class="login">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
					<div class="text-center">
						<i class="fas fa-user-circle fa-5x"></i>
					</div>
					<input type="text" class="form-control" name="email" placeholder="your@mail.com" autocomplete="on" required="on">
					<input type="password" class="form-control" id="pass" name="password" placeholder="Password" autocomplete="on" required="on">
					 <span> <i class="fas fa-eye-slash"></i> </span> 
					<div class="text-center">
						<input type="submit" name="login" class="btn btn-primary " value="login" >
					</div>
					<div class="small" >I Don't Have Account <a href="singup.php">Sing Up</a></div>
				</form>
			</div>
		</div>
	</div>
</div>
<script src="./js/file.js"></script>
<?php
require_once './assest/footer.php';
?>