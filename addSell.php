<?php
 session_start();
 if(isset($_SESSION['id'])){
  $title = 'Add Sell product';
require_once './assest/header.php';
require_once './assest/navbar.php';
?>
<div class="margin-left">
	<div class="container">
		<a href="productionSell.php" class="border border-dark rounded"><i class="fas fa-arrow-left"></i></a>
		<form action="" method="">
			<div class="form-row">
				<div class="form-group">
					<label for="date_id">Date</label>
					<input type="date" class="form-control" name="date" id="date_id" required="on">
				</div>

			</div>
			<div class="form-row">
				<div class="col-md-6 mb-3">
					<label for="Nomber_id">N° de kg</label>
					<input type="number" class="form-control" step="0.01" name="Nomber" id="Nomber_id" required="on">
				</div>
				<div class="col-md-6 mb-3">
					<label for="prix_id">Prix(1KG)</label>
					<input type="number" class="form-control" step="0.01" name="prix" id="prix_id" required="on">
				</div>
			</div>
			<hr/>
			<div class="form-row">
				<div class="col-md-6 mb-3">
					<label for="autre_id">autre</label>
					<input type="text" class="form-control" name="autre" id="autre_id" >
				</div>
				<div class="col-md-6 mb-3">
					<label for="prix_autre_id">Prix Autre</label>
					<input type="number" class="form-control" step="0.01" name="poid" id="prix_autre_id">
				</div>
			</div>
			<input type="submit" class="btn btn-primary" name="save" value="add">
		</form>
	</div>
</div>
<script src="./js/ajax/ajaxSell.js"></script>
<?php
require_once './assest/footer.php';
 }else{
	header('location:404.php');
 }
?>