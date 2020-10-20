<?php
 session_start();
 if(isset($_SESSION['id'])){
  $title =  'Add Employ';
require_once './assest/header.php';
require_once './assest/navbar.php';
require_once './php/query.php';
$fetch = new action();
$res = $fetch->select('SELECT  first_name_employ ,last_name_employ FROM  emplay_user  ORDER BY `emplay_user`.`create_at` DESC ');
?>

<div class="margin-left">
	<div class="container">
		<div class="form-div">
			<a href="employ.php" class="border border-dark rounded"><i class="fas fa-arrow-left"></i></a>
			<form>
				<label class="form-label" for='user-Employ'>Employ</label>
				<select class="form-control" id="user-Employ">
					<?php
    for($i = 0; $i < count($res) ; $i++ ){
       echo '<option value="'. $res[$i]['first_name_employ'] .' '. $res[$i]['last_name_employ'].'">'.$res[$i]['first_name_employ'] .' '.  $res[$i]['last_name_employ'].'</option>';
    }
    ?>

				</select>
				<div class="form-group">
					<label for="lsalyer">Salyer</label>
					<input type="number" class="form-control" id="lsalyer">
				</div>
				<div class="form-row">
					<div class="col-md-6 mb-3">
						<label for="avance_id">avance</label>
						<input type="text" class="form-control" id="avance_id">
					</div>
					<div class="col-md-6 mb-3">
						<label for="lname">date</label>
						<input type="date" class="form-control" id="lname">
					</div>
				</div>
				<input class="btn btn-primary" type="submit" value="Save">
			</form>
		</div>
		<hr />
	</div>
</div>
<div class="margin-left">
	<div class="container">
		<form>
			<div class="form-group">
				<label for="employ_fname">Employ Fisrt Name</label>
				<input type="text" name="firt_name" id="employ_fname" class="form-control">
				<label for="employ_lame">Employ Last Name</label>
				<input type="text" name="last_name" id="employ_lname" class="form-control">
			</div>
			<input type="submit" class="btn btn-primary" id="addBtn" value="add new employ">
		</form>
		<div class="row justify-content-end">
			<a href="allEmploy.php"><button class="btn btn-link">View Employ</button></a>
		</div>
	</div>
</div>

<script src="./js/ajax/ajaxEmploy.js"></script>
<?php
require_once './assest/footer.php';
 }else{
	header('location:404.php');
 }
?>