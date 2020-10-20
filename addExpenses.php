<?php
 session_start();
 if(isset($_SESSION['id'])){
  $title = 'Add Expenses';
require_once './assest/header.php';
require_once './assest/navbar.php';
?>
<div class="margin-left">
	<div class="container">
        <a href="dépensesRes.php" class="border border-dark rounded"><i class="fas fa-arrow-left"></i></a>
		<form>
			<div class="form-row">
				<div class="col-md-6 mb-3">
					<label for="date_id">Date</label>
					<input type="date" class="form-control" id="date_id" required='on'>
					
				</div>
				<div class="col-md-6 mb-3">
					<label for="ftr_id">Fournitures de restaurant</label>
					<input type="text" class="form-control" id="ftr_id" required="on">
				</div>
			</div>
				<div class="form-group">
					<label for="price_id">Price(Total)</label>
					<input type="number" step="0.01" class="form-control" id="price_id" required="on">
					
				</div>
			<input class="btn btn-primary" type="submit" value="Add">	
		</form>
	</div>
</div>
<script src="./js/ajax/ajaxExpensesAdd.js"></script>
<?php
require_once './assest/footer.php';
 }else{
	header('location:404.php');
 }
?>