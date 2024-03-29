<?php
session_start();
require_once('../db/config.php');
require_once('../const/web-info.php');
require_once('../const/check_session.php');
switch ($res) {
	case '0':
		$_SESSION['reply'] = "006";
		header("location:../login");
		break;

	case '2':
		$_SESSION['reply'] = "005";
		header("location:../login");
		break;

	case '3':
		$_SESSION['reply'] = "007";
		header("location:../login");
		break;
}

if ($role == "admin") {
} else {
	$_SESSION['reply'] = "008";
	header("location:../login");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/select2.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="../plugins/datatable/css/jquery.dataTables.min.css">
	<link type="text/css" rel="stylesheet" href="../plugins/loader/waitMe.css">
	<link rel="icon" href="../icon/<?php echo AppIcon; ?>" sizes="32x32">
	<meta name="description" content="<?php echo AppDesc; ?>">
	<meta name="author" content="Anton Moskalev">
	<title><?php echo AppName; ?> – Pricing Plans</title>

</head>

<body>
	<header class="header">
		<div class="header__content">
			<a href="../" class="header__logo">
				<img class="inner_logo" src="../img/<?php echo AppLogo; ?>" alt="">
			</a>
			<button class="header__btn" type="button">
				<span></span>
				<span></span>
				<span></span>
			</button>
		</div>
	</header>
	<div class="sidebar">
		<a href="../" class="sidebar__logo">
			<img class="inner_logo" src="../img/<?php echo AppLogo; ?>" alt="">
		</a>
		<div class="sidebar__user">
			<div class="sidebar__user-img">
				<img class="profile_in" src="../img/users/<?php echo $image; ?>" alt="">
			</div>
			<div class="sidebar__user-title">
				<span>Website Admin</span>
				<p><?php echo $rusername; ?></p>
			</div>
			<a class="sidebar__user-btn" href="../logout">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
					<path d="M4,12a1,1,0,0,0,1,1h7.59l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l4-4a1,1,0,0,0,.21-.33,1,1,0,0,0,0-.76,1,1,0,0,0-.21-.33l-4-4a1,1,0,1,0-1.42,1.42L12.59,11H5A1,1,0,0,0,4,12ZM17,2H7A3,3,0,0,0,4,5V8A1,1,0,0,0,6,8V5A1,1,0,0,1,7,4H17a1,1,0,0,1,1,1V19a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V16a1,1,0,0,0-2,0v3a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V5A3,3,0,0,0,17,2Z" />
				</svg>
			</a>
		</div>
		<ul class="sidebar__nav">
<!--			<li class="sidebar__nav-item">-->
<!--				<a href="./" class="sidebar__nav-link"><i class="side_icon feather icon-home"></i> <span>Dashboard</span></a>-->
<!--			</li>-->
			<li class="sidebar__nav-item">
				<a href="./index.php" class="sidebar__nav-link"><i class="side_icon feather icon-grid"></i> <span>Catalog</span></a>
			</li>
<!--			<li class="sidebar__nav-item">-->
<!--				<a href="genre" class="sidebar__nav-link"><i class="side_icon feather icon-layers"></i> <span>Genres</span></a>-->
<!--			</li>-->
			<li class="sidebar__nav-item">
				<a href="plans" class="sidebar__nav-link sidebar__nav-link--active"><i class="side_icon feather icon-box"></i> <span>Pricing Plans</span></a>
			</li>
<!--			<li class="sidebar__nav-item">-->
<!--				<a href="coupons" class="sidebar__nav-link"><i class="side_icon feather icon-gift"></i> <span>Coupons</span></a>-->
<!--			</li>-->
			<li class="sidebar__nav-item">
				<a href="users" class="sidebar__nav-link "><i class="side_icon feather icon-users"></i> <span>Users</span></a>
			</li>
<!--			<li class="sidebar__nav-item">-->
<!--				<a href="comments" class="sidebar__nav-link "><i class="side_icon feather icon-message-square"></i> <span>Comments</span></a>-->
<!--			</li>-->
<!--			<li class="sidebar__nav-item">-->
<!--				<a href="reviews" class="sidebar__nav-link "><i class="side_icon feather icon-star"></i> <span>Reviews</span></a>-->
<!--			</li>-->
<!--			<li class="sidebar__nav-item">-->
<!--				<a href="smtp" class="sidebar__nav-link "><i class="side_icon feather icon-mail"></i> <span>SMTP Settings</span></a>-->
<!--			</li>-->
<!--			<li class="sidebar__nav-item">-->
<!--				<a href="account" class="sidebar__nav-link "><i class="side_icon feather icon-user"></i> <span>Account Settings</span></a>-->
<!--			</li>-->
<!--			<li class="sidebar__nav-item">-->
<!--				<a href="payment_gateways" class="sidebar__nav-link "><i class="side_icon feather icon-credit-card"></i> <span>Payment Gateways</span></a>-->
<!--			</li>-->
<!--			<li class="sidebar__nav-item">-->
<!--				<a href="settings" class="sidebar__nav-link "><i class="side_icon feather icon-settings"></i> <span>General Settings</span></a>-->
<!--			</li>-->
<!--			<li class="sidebar__nav-item">-->
<!--				<a href="more_settings" class="sidebar__nav-link"><i class="side_icon feather icon-life-buoy"></i> <span>Additional Settings</span></a>-->
<!--			</li>-->
			<li class="sidebar__nav-item">
				<a href="../" class="sidebar__nav-link "><i class="side_icon feather icon-arrow-left-circle"></i> <span>Back to <?php echo AppName; ?></span></a>
			</li>
		</ul>
		<div class="sidebar__copyright">© <?php echo AppName; ?>, <?php echo date('Y'); ?>. <br>Developed by <a href="https://vk.com/antonmoskalev" target="_blank">Anton Moskalev</a></div>
	</div>
	<main class="main">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="main__title">
						<h2>Pricing Plans</h2>
						<a href="add-item" class="main__title-link">add item</a>
					</div>
				</div>
				<div class="col-12 col-xl-12">
					<div class="dashbox">
						<div class="dashbox__title">
							<h3>Manage Pricing Plans</h3>
						</div>
						<div class="dashbox__table-wrap dashbox__table-wrap--1">
							<?php require_once('../const/check_reply.php'); ?>
							<table id="datatbl" class="main__table main__table--dash">
								<thead>
									<tr>
										<th>ID</th>
										<th>PLAN</th>
										<th>VALID</th>
										<th>COST</th>
										<th>MAX SIZE</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php
									try {
										$conn = new PDO('mysql:host=' . DBHost . ';dbname=' . DBName . ';charset=' . DBCharset . ';collation=' . DBCollation . ';prefix=' . DBPrefix . '', DBUser, DBPass);
										$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
										$stmt = $conn->prepare("SELECT * FROM tbl_plans ORDER BY id");
										$stmt->execute();
										$result = $stmt->fetchAll();
										foreach ($result as $row) {
											switch ($row[4]) {
												case 'Days';
													if ($row[2] > 1) {
														$valid = '' . $row[2] . ' Days';
													} else {
														$valid = '' . $row[2] . ' Day';
													}
													break;
												case 'Months';
													if ($row[2] > 1) {
														$valid = '' . $row[2] . ' Months';
													} else {
														$valid = '' . $row[2] . ' Month';
													}
													break;
												case 'Years';
													if ($row[2] > 1) {
														$valid = '' . $row[2] . ' Years';
													} else {
														$valid = '' . $row[2] . ' Year';
													}
													break;
											}
									?>
											<tr>
												<td>
													<div class="main__table-text"><?php echo $row[0]; ?></div>
												</td>
												<td>
													<div class="main__table-text"><?php echo $row[1]; ?></div>
												</td>
												<td>
													<div class="main__table-text"><?php echo $valid; ?></div>
												</td>
												<td>
													<div class="main__table-text">
														<?php if (AppCurrency == "") {
														} else {
															print AppCurrency;
														}
														echo number_format($row[3], 2);
														if (AppCurrency == "") {
															print ' ' . AppISO . '';
														} else {
														} ?>
													</div>
												</td>
												<td>
													<div class="main__table-text"><?php echo $row[5]; ?>p</div>
												</td>
												<td width="100">
													<div class="main__table-text">
														<a onclick="edit_modal(this.id)" id="<?php echo $row[0]; ?>" href="#modal-edit" class="open-modal">
															Edit
														</a>
													</div>
												</td>
											</tr>
									<?php
										}
									} catch (PDOException $e) {
										echo "Connection failed: " . $e->getMessage();
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<div id="modal-edit" class="zoom-anim-dialog mfp-hide modal">
		<h6 class="modal__title">Edit Plan</h6>
		<form action="core/edit_plan" method="POST" autocomplete="OFF" id="ifrm2">
			<div id="response">
			</div>
		</form>
	</div>
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/smooth-scrollbar.js"></script>
	<script src="js/select2.min.js"></script>
	<script src="js/admin.js"></script>
	<script src="../plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="../plugins/loader/waitMe.js"></script>
	<script src="../js/forms.js"></script>
	<script src="js/plans.js"></script>
	<script>
		$(document).ready(function() {
			$('#datatbl').DataTable({
				"ordering": false
			});
		});
	</script>
</body>

</html>