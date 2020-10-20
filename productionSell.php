<?php
 session_start();
 if(isset($_SESSION['id'])){
  $title = 'Product Sell';
require_once './assest/header.php';
require_once './assest/navbar.php';
require_once 'php/query.php';
if(!isset($_GET['page'])){
	$page = 1 ; 
}else{
	$page = $_GET['page'];
}
$restlat_par_page = 15;
$strat_number_page = ($page - 1) * $restlat_par_page;
$fetch = new action();
$resultat = $fetch->select('SELECT * FROM product_sell ORDER BY `product_sell`.`Date` DESC LIMIT 105');
$res = $fetch->select('SELECT * FROM product_sell ORDER BY `product_sell`.`Date` DESC LIMIT '.$strat_number_page.','.$restlat_par_page);
?>

<div class="margin-left">
	<div class="produit-buy">
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-2">
					<a href="addSell.php"><button class="btn btn-success"><i class="fas fa-plus"></i> Ajouter</button></a>
				</div>
			</div>
			<hr>
			<table class="table table-striped table-dark">
				<thead>
					<tr>
						<th scope="col">Id</th>
						<th scope="col">Date</th>
						<th scope="col">N° de kg</th>
						<th scope="col">Prix(de 1 kg)</th> 
						<th scope="col">Autre</th>
      <th scope="col">Total</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					for ($i =0 ; $i <count($res) ; $i++){
					?>
					<tr>
						<th scope="row"><?php echo $res[$i]['id']; ?></th>
						<td><?php echo $res[$i]['Date']; ?></td>
						<td><?php echo $res[$i]['N_de_kg']; ?></td>
						<td><?php echo $res[$i]['Prix']; ?></td>
						<td>
							<span><?php echo $res[$i]['anthor_think']; ?></span> : <span><?php echo $res[$i]['anthor_price']; ?></span>
						</td>
						<td><?php echo $res[$i]['Total']; ?></td>
						<td>
							<div class="row justify-content-between">
								<div class="col-6">
									<a href="editSell.php?id=<?php echo $res[$i]['id'];?>"><button class="btn btn-primary"><i class="fas fa-edit"></i></button></a>
								</div>
								<div class="col-6">
									<button class="btn btn-danger" data-id="<?php echo $res[$i]['id'];?>"><i class="fas fa-trash"></i></button>
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
				<li class="page-item"><a class="page-link" href="<?php echo 'productionSell.php?page='.$page ?>"><?php echo 		$page ?></a></li>
				<?php
					}
				?>
				<li class="page-item">
					<a class="page-link" href="#" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
					</a>
				</li>
			</ul>
		</nav>
	</div>
</div>
<script src="./js/delete/deleteSell.js"></script>
<?php
require_once './assest/footer.php';
 }else{
	header('location:404.php');
 }
?>