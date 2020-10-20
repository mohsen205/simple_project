<?php
 session_start();
 if(isset($_SESSION['id'])){
  $title  =  'Edit Credit';
require_once './assest/header.php';
require_once './assest/navbar.php';
require_once 'php/query.php';
$id = $_GET['id'];
$fetch = new action();
$res = $fetch->selectWithId('SELECT * FROM `debt` WHERE id = ?',$id);
?>
<div class="margin-left">
	<div class="container">
        <a href="financialDebts.php" class="border border-dark rounded"><i class="fas fa-arrow-left"></i></a>
		<form>
			<div class="form-row">
				<div class="col-md-6 mb-3">
					<label for="fname">Nom</label>
					<input type="text" class="form-control" value="<?php echo $res[0]['fisrt_name']?>" id="fname" >
				</div>
				<div class="col-md-6 mb-3">
					<label for="lname">Prenom</label>
					<input type="text" class="form-control"  value="<?php echo $res[0]['last_name']?>" id="lname" >
				</div>
			</div>
            <div class="form-row">
				<div class="col-md-6 mb-3">
					<label for="fname">Date</label>
					<input type="date" class="form-control" value="<?php echo $res[0]['date']?>"  id="fname" >
				</div>
				<div class="col-md-6 mb-3">
					<label for="Debt">Debt</label>
					<input type="number"  step="0.01" value="<?php echo $res[0]['Debt_value']?>" class="form-control"  id="Debt" >
				</div>
			</div>

			<div class="form-row">
				<div class="col-md-6 mb-3">
					<label for="date_avance">Date Avance</label>
					<input type="date" class="form-control" value="<?php echo $res[0]['Debt_avance_date']?>"  id="date_avance" >
				</div>
				<div class="col-md-6 mb-3">
					<label for="Avance_mountant">Avance mountant</label>
					<input type="number"  step="0.01" class="form-control" value="<?php echo $res[0]['Debt_avance']?>"  id="Avance_mountant" >
				</div>
			</div>
			<input class="btn btn-primary" data-id="<?php echo $res[0]['id']?>"type="submit" value="Add">
		</form>
	</div>
</div>
<script src="./js/ajax/ajaxdebtEdit.js"></script>
<?php
require_once './assest/footer.php';
}else{
    header('location:404.php');
}
?>