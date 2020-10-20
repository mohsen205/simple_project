<?php
 session_start();
 if(isset($_SESSION['id'])){
  $title = 'Edit';
require_once './assest/header.php';
require_once './assest/navbar.php';
require_once 'php/query.php';
$id = $_GET['id'];
$fetch = new action();
$res = $fetch->selectWithId('SELECT * FROM `product_buy` WHERE id = ?',$id);
?>
<div class="margin-left">
	<div class="container">
		<a href="productionBuy.php" class="border border-dark rounded"><i class="fas fa-arrow-left"></i></a>
		<form>
			<div class="form-row">
				<div class="col-md-6 mb-3">
					<label for="date_id">Date</label>
					<input type="date" class="form-control" name="date" id="date_id" value="<?php echo $res[0]['date'] ?>" required="on">
				</div>
				<div class="col-md-6 mb-3">
					<label for="Fournisseur_id">Nom et Prénom de Fournisseur</label>
					<input type="text" class="form-control" name="Fournisseur" id="Fournisseur_id" value="<?php echo $res[0]['Fournisseur']; ?>" required="on">
				</div>
			</div>
			<div class="form-row">
				<div class="col-md-6 mb-3">
					<label for="Nomber_id">Nombre du Moutant</label>
					<input type="number" class="form-control"  step="0.01" name="Nomber" id="Nomber_id"  value="<?php echo $res[0]['Nomber_de_Moutant']; ?>" required="on">
				</div>
				<div class="col-md-6 mb-3">
					<label for="prix_id">Prix(1KG)</label>
					<input type="number" class="form-control" step="0.01" name="prix" id="prix_id" value="<?php echo $res[0]['prix_de_kg']; ?>" required="on">
				</div>
			</div>
			<div class="form-group">
				<label for="poid_id">Poids</label>
				<input type="number" class="form-control" step="0.01" name="poid" id="poid_id" value="<?php echo $res[0]['poid_moutant']; ?>" required="on">
			</div>
			<input type="submit" class="btn btn-primary" id="<?php echo $id ?>"name="save" value="add">
		</form>
	</div>
</div>
<script src="./js/ajax/ajaxBuyEdit.js"></script>
<?php
require_once './assest/footer.php';
 }else{
	header('location:404.php');
 }
?>