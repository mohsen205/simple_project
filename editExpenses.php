<?php
 session_start();
 if(isset($_SESSION['id'])){
  $title  = 'Edit Expenses';
require_once './assest/header.php';
require_once './assest/navbar.php';
require_once 'php/query.php';
$id = $_GET['id'];
$fetch = new action();
$res = $fetch->selectWithId('SELECT * FROM `exepenses_res` WHERE id = ?',$id);
?>
<div class="margin-left">
	<div class="container">
        <a href="dépensesRes.php" class="border border-dark rounded"><i class="fas fa-arrow-left"></i></a>
		<form>
			<div class="form-row">
				<div class="col-md-6 mb-3">
					<label for="date_id">Date</label>
					<input type="date" class="form-control" id="date_id" value="<?php echo $res[0]['date']?>" required='on'>
					
				</div>
				<div class="col-md-6 mb-3">
					<label for="ftr_id">Fournitures de restaurant</label>
					<input type="text" class="form-control" id="ftr_id" value="<?php echo $res[0]['ftr_res']?>" required="on">
				</div>
			</div>
				<div class="form-group">
					<label for="price_id">Price(Total)</label>
					<input type="number" step="0.01" class="form-control" value="<?php echo $res[0]['value']?>" id="price_id" required="on">
					
				</div>
			<input class="btn btn-primary" type="submit" data-id='<?php echo $res[0]['id']?>' value="Add">	
		</form>
	</div>
</div>
<script src="./js/ajax/ajaxExpensesEdit.js"></script>
<?php
require_once './assest/footer.php';
}else{
    header('location:404.php');
}
?>