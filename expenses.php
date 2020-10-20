<?php
 session_start();
 if(isset($_SESSION['id'])){
  $title = 'Expenses';
require_once './assest/header.php';
require_once './assest/navbar.php';
require_once 'php/query.php';
$fetch = new action();
$res = $fetch->select('SELECT * FROM `expenses` ORDER BY `expenses`.`date` DESC ');
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$fetch = new action();
	$row = $fetch->selectWithId('SELECT * FROM `expenses` WHERE id = ?',$id);
	$date = $row[0]['date'];
	$moutant = $row[0]['Moutant'];
	$id = $row[0]['id']; 
}else{
	$date = '';
	$moutant = '';
	$id = '';
}
?>
<div class="margin-left">
	<div class="dépense-lotfi">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<form>
						<div class="form-row">
							<div class="form-group">
								<label for="date">Date</label>
								<input type="date" class="form-control" value="<?php echo $date ?>" id="date">
							</div>
							<div class="form-group">
								<label for="moutant">Montant</label>
								<input type="number" class="form-control" value="<?php echo $moutant ?>" id="moutant">
							</div>
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary" data-id="<?php echo $id?>" value="add">
						</div>
					</form>
				</div>
				<div class="col-md-8">
					<table class="table table-striped  table-bordered table-dark">
						<thead>
							<tr>
								<th scope="col">Date</th>
								<th scope="col">Montant</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
						for ($i =0 ; $i <count($res) ; $i++){
						?>
							<tr>
								<td><?php echo $res[$i]['date'] ?></td>
								<td><?php echo $res[$i]['Moutant'] ?></td>
								<td>
									<div class="row justify-content-between">
										<div class="col-6">
											<a href="expenses.php?id=<?php echo $res[$i]['id'] ?>"><button class="btn btn-primary"><i class="fas fa-edit"></i></button></a>
										</div>
										<div class="col-6">
											<button class="btn btn-danger" data-id="<?php echo $res[$i]['id']; ?>?>"><i class="fas fa-trash"></i></button>
										</div>
									</div>

								</td>
							</tr>
							<?php
						}
					    ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


<script src="./js/ajax/ajaxExpenses.js"></script>
<?php
require_once './assest/footer.php';
 }else{
	header('location:404.php');
 }
?>