<?php
session_start();
if(isset($_SESSION['id'])){
 $title ='Change Password';
 $id = $_SESSION['id'];
 require_once './assest/header.php';
require_once './assest/navbar.php';
require_once './php/query.php';
$action =  new action();
$resulats = $action->selectWithCon('SELECT email FROM user WHERE id =  ? ', array($id));

?>
<div class="margin-left">
	<div class="container">
		<form class="form" autocomplete="on" >
			<div class="form-group">
				<label for="old_pass">Old Password</label>
				<input type="password" class="form-control" id="old_pass" placeholder="Old Password">
			</div>
			<div class="form-group">
				<label for="new_pass">New Password</label>
				<input type="password" class="form-control" id="new_pass" placeholder="New Password">
			</div>
   <div class="form-group">
				<label for="con_pass">Confirm Your Password</label>
				<input type="password" class="form-control" id="con_pass" placeholder="Confirm Your Password">
			</div>
   <input type="submit" data-number="<?php echo$_SESSION['id'];  ?>" class="btn btn-primary" value="Change Password">
		</form>
  <hr/>
	</div>
</div>
<div class="margin-left">
	<div class="container">
  <form>
   <div class="form-group" >
    <label for="name">Name</label>
    <input type="email" id="name" class="form-control" value="<?php echo $resulats[0]['email'] ?>">
   </div>
   <input type="submit" data-id="<?php echo$_SESSION['id'];  ?>" class="btn btn-primary" id="change" value="Change Name">
  </form>
 </div>
</div>
<script src="./js/ajax/changePassword.js"></script>
<?php
require_once './assest/footer.php';
 }else{
    header('location:404.php');
 }
?>