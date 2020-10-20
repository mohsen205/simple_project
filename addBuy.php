<?php
 session_start();
 if(isset($_SESSION['id'])){
  $title = 'Add product ';
require_once './assest/header.php';
require_once './assest/navbar.php';
?>
<div class="margin-left">
	<div class="container">
		<a href="productionBuy.php" class="border border-dark rounded"><i class="fas fa-arrow-left"></i></a>
		<form required>
			<div class="form-row">
				<div class="col-md-6 mb-3">
					<label for="date_id">Date</label>
					<input type="date" class="form-control" name="date" id="date_id" required>
				</div>
				<div class="col-md-6 mb-3">
					<label for="Fournisseur_id">Nom et Prénom de Fournisseur</label>
					<input type="text" class="form-control" name="Fournisseur" id="Fournisseur_id" required>
				</div>
			</div>
			<div class="form-row">
				<div class="col-md-6 mb-3">
					<label for="Nomber_id">Nombre du Moutant</label>
					<input type="number" class="form-control"  step="0.01" name="Nomber" id="Nomber_id" required>
				</div>
				<div class="col-md-6 mb-3">
					<label for="prix_id">Prix(1KG)</label>
					<input type="number" class="form-control" step="0.01" name="prix" id="prix_id" required>
				</div>
			</div>
			<div class="form-group">
				<label for="poid_id">Poids</label>
				<input type="number" class="form-control" step="0.01" name="poid" id="poid_id" required>
			</div>
			<input type="submit" class="btn btn-primary" name="save" value="add">
		</form>
	</div>
</div>
<script src="./js/ajax/ajaxBuy.js"></script>
<?php
require_once './assest/footer.php';
 }else{
	header('location:404.php');
 }
?>