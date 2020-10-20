<?php
$title  =  'SingUp';
require_once './assest/header.php';
?>
<div class="login">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<form>
					<div class="text-center">
						<i class="fas fa-user-plus fa-5x"></i>
					</div>
					<input type="mail" class="form-control" name="name" id="mail" placeholder="your@mail.com" autocomplete="on" required="on">
                    <input type="password" class="form-control" id="pass" name="password" placeholder="password" autocomplete="on" required="on">
                   <span> <i class="fas fa-eye"></i> </span> 
					<div class="text-center">
						<input type="submit" class="btn btn-primary " name="singup" value="Sing Up" >
					</div>
					<div class="small" >Already Have Account !<a href="index.php">Login</a></div>
				</form>
			</div>
		</div>
	</div>
</div>
<script src="./js/ajax/ajaxsingup.js"></script>
<script src="./js/file.js"></script>
<?php
require_once './assest/footer.php';
?>