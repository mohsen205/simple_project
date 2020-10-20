<?php
 session_start();
 if(isset($_SESSION['id'])){
  $title =  'Edit Employ';
require_once './assest/header.php';
require_once './assest/navbar.php';
require_once 'php/query.php';
$id = $_GET['id'];
$fetch = new action();
$res = $fetch->selectWithId('SELECT * FROM employ WHERE id = ?',$id);
?>
<div class="margin-left">
	<div class="container">
        <a href="employ.php" class="border border-dark rounded"><i class="fas fa-arrow-left"></i></a>
		<form>
			<div class="form-row">
				<div class="col-md-6 mb-3">
					<label for="fname">Nom</label>
					<input type="text" class="form-control" value="<?php echo $res[0]['fullname'];  ?>" id="fname" disabled="on">
				</div>
			</div>
			<div class="form-group">
				<label for="lsalyer">Salyer</label>
				<input type="number" class="form-control" value="<?php echo $res[0]['salyer'];  ?>" id="lsalyer">
			</div>
			<div class="form-row">
				<div class="col-md-6 mb-3">
					<label for="avance_id">avance</label>
					<input type="text" class="form-control" value="<?php echo $res[0]['avance'];  ?>" id="avance_id" >
				</div>
				<div class="col-md-6 mb-3">
					<label for="lname">date</label>
					<input type="date" class="form-control" value="<?php echo $res[0]['date'];  ?>" id="lname">
				</div>
			</div>
			<input class="btn btn-primary" data-id="<?php echo $res[0]['id'];  ?>"" type="submit" value="Add">
		</form>
	</div>
</div>
<script src="./js/ajax/ajaxEmployEdit.js"></script>
<?php
require_once './assest/footer.php';
}else{
    header('location:404.php');
}
?>