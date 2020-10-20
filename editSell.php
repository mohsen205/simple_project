<?php
 session_start();
 if(isset($_SESSION['id'])){
  $title =  'Edit Sell Product ';
require_once './assest/header.php';
require_once './assest/navbar.php';
require_once 'php/query.php';
$id = $_GET['id'];
$fetch = new action();
$res = $fetch->selectWithId('SELECT * FROM `product_sell` WHERE id = ?',$id);
?>
<div class="margin-left">
	<div class="container">
		<a href="productionSell.php" class="border border-dark rounded"><i class="fas fa-arrow-left"></i></a>
		<form action="" method="">
			<div class="form-row">
				<div class="form-group">
					<label for="date_id">Date</label>					<input type="date" class="form-control" name="date" id="date_id" value="<?php echo $res[0]['Date']; ?>" required="on">
				</div>

			</div>
			<div class="form-row">
				<div class="col-md-6 mb-3">
					<label for="Nomber_id">N° de kg</label>
					<input type="number" class="form-control" step="0.01" name="Nomber" value="<?php echo $res[0]['N_de_kg']; ?>"id="Nomber_id" required="on">
				</div>
				<div class="col-md-6 mb-3">
					<label for="prix_id">Prix(1KG)</label>
					<input type="number" class="form-control" step="0.01" name="prix" id="prix_id" value="<?php echo $res[0]['Prix']; ?>" required="on">
				</div>
			</div>
			<hr />
			<div class="form-row">
				<div class="col-md-6 mb-3">
					<label for="autre_id">autre</label>
					<input type="text" class="form-control" name="autre" id="autre_id" value="<?php echo $res[0]['anthor_think']; ?>" >
				</div>
				<div class="col-md-6 mb-3">
					<label for="prix_autre_id">Prix Autre</label>
					<input type="number" class="form-control" step="0.01" name="poid" id="prix_autre_id" value="<?php echo $res[0]['anthor_price']; ?>">
				</div>
			</div>
			<input type="submit" class="btn btn-primary" data-id="<?php echo $id ?>"name="save" value="add">
		</form>
	</div>
</div>
<script src="./js/ajax/ajaxSellEdit.js"></script>
<?php
require_once './assest/footer.php';
 }else{
	header('location.php');
 }
?>