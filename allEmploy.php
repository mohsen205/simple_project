<?php
 session_start();
 if(isset($_SESSION['id'])){
  $title = 'Employ';
require_once './assest/header.php';
require_once './assest/navbar.php';
require_once './php/query.php';
$fetch = new action();
$res = $fetch->select('SELECT * FROM emplay_user  ORDER BY `emplay_user`.`create_at` DESC ');
?>
<div class="margin-left">
    <div class="container">
        <a href="addEmploy.php" class="border border-dark rounded"><i class="fas fa-arrow-left"></i></a>
        <hr/>
            	<table class="table table-striped table-dark">
				<thead>
					<tr>
					<th scope="col">id</th>
					<th scope="col">first name </th>
					<th scope="col"> last name</th>
					<th scope="col">action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						for ($i =0 ; $i <count($res) ; $i++){
						?>
					<tr>
						<td scope="row"><?php echo $res[$i]['id']  ?></td>
						<td><?php echo $res[$i]['first_name_employ'] ?></td>
						<td><?php echo $res[$i]['last_name_employ'] ?></td>
						<td>
									<button class="btn btn-danger" data-id="<?php echo $res[$i]['id'] ?>"><i class="fas fa-trash"></i></button>
						</td>
					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
    </div>
</div>
<script src="./js/delete/Employ.js"></script>
<?php
require_once './assest/footer.php';
 }else{
	header('location:404.php');
 }
?>