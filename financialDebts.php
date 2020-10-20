<?php
 session_start();
 if(isset($_SESSION['id'])){
  $title = 'Financial Debts';
require_once './assest/header.php';
require_once './assest/navbar.php';
require_once './php/query.php';
if(!isset($_GET['page'])){
	$page = 1 ; 
}else{
	$page = $_GET['page'];
}
$restlat_par_page = 15;
$strat_number_page = ($page - 1) * $restlat_par_page;
$fetch = new action();
$resultat = $fetch->select('SELECT * FROM debt ORDER BY `debt` . `update_at` DESC LIMIT 105');
$res = $fetch->select('SELECT * FROM debt ORDER BY `debt` . `update_at` DESC LIMIT '.$strat_number_page.','.$restlat_par_page);
?>
<div class="margin-left">
	<div class="expenses">
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-3">
					<a href="financialDebtsAdd.php"><button class="btn btn-success"><i class="fas fa-plus"></i> Ajouter Advances </button></a>
				</div>
			</div>
			<table class="table table-striped table-dark">
				<thead>
					<tr>
					<th scope="col">nom</th>
					<th scope="col">date</th>
					<th scope="col">Debt</th>
					<th scope="col">Debt avance </th>
                    <th scope="col">Debt avance Date</th>
					<th scope="col">debt Reset</th>
					<th scope="col">Pay</th>
					<th scope="col">action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						for ($i =0 ; $i <count($res) ; $i++){
						?>
					<tr>
						<td scope="row"><?php echo $res[$i]['fisrt_name'] . ' '. $res[$i]['last_name']  ?></td>
						<td><?php echo $res[$i]['date'] ?></td>
						<td><?php echo $res[$i]['Debt_value'] ?></td>
						<td><?php echo $res[$i]['Debt_avance'] ?></td>
						<td><?php echo $res[$i]['Debt_avance_date'] ?></td>
                        <td><?php echo $res[$i]['debt_reset'] ?></td>
						<td><?php if( $res[$i]['pay'] == 0 ){echo 'pyement no complete'; }else{echo 'pyement '; }?></td>
						
						<td>
							<div class="row justify-content-between">
								<div class="col-6">
									<a href="editDebit.php?id=<?php echo $res[$i]['id'] ?>"><button class="btn btn-primary"><i class="fas fa-edit"></i></button></a>
								</div>
								<div class="col-6">
									<button class="btn btn-danger" data-id="<?php echo $res[$i]['id'] ?>"><i class="fas fa-trash"></i></button>
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
<div class="pagination margin-left">
	<div class="container">
		<nav aria-label="Page navigation example">
			<ul class="pagination">
				<li class="page-item">
					<a class="page-link" href="#" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
					</a>
				</li>
				<?php
				for($page = 1; $page <= ceil(count($resultat) / 6) ; $page++){
					?>
				<li class="page-item"><a class="page-link" href="<?php echo 'employ.php?page='.$page ?>"><?php echo $page ?></a></li>
				<?php
				}
				?>
				<li class="page-item">
					<a class="page-link" href="" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
					</a>
				</li>
			</ul>
		</nav>
	</div>
</div>
<script src="./js/delete/DeleteDebts.js"></script>

<?php
require_once './assest/footer.php';
 }else{
	header('location:404.php');
 }
?>