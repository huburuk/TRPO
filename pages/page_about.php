<?php
// Запуск сессии
session_start();
// Подключение файлов
require_once('../db/config.php');
require_once('../const/web-info.php');
require_once('../const/check_session.php');
require_once('../const/temp_browse.php');

switch ($res) {
	case '0':
		$logged = "0";
		break;

	case '1':
		$logged = "1";
		break;

	case '2':
		$logged = "0";
		break;

	case '3':
		$logged = "0";
		break;
}
$dir = "./";

try {
	// Экземпляр подключение к базе данных
	$conn = new PDO('mysql:host=' . DBHost . ';dbname=' . DBName . ';charset=' . DBCharset . ';collation=' . DBCollation . ';prefix=' . DBPrefix . '', DBUser, DBPass);
	// Установка атрибута (Отчеты об ошибках, создание исключений)
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$about = "";
	$tagline = "";
	$cp = "";
	$acc = "";
	$en = "";

	$stmt = $conn->prepare("SELECT * FROM tbl_about LIMIT 1");
	$stmt->execute();
	$result = $stmt->fetchAll();

	foreach ($result as $row) {
		$about = $row[1];
		$tagline = $row[2];
		$cp = $row[3];
		$acc = $row[4];
		$en = $row[5];
	}
} catch (PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/boot.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/slider-radio.css">
	<link rel="stylesheet" href="css/select2.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/plyr.css">
<!--	<link rel="stylesheet" href="css/appLight.css">-->
	<link rel="icon" href="icon/<?php echo AppIcon; ?>" sizes="32x32">
	<meta name="description" content="<?php echo AppDesc; ?>">
	<meta name="keywords" content="<?php echo AppKeywords; ?>">
	<meta name="author" content="Anton Moskalev">
	<title><?php echo AppName; ?> – About Us</title>
	<?php require_once('../const/cms_scripts.php'); ?>

</head>

<body>
	<!-- Подключение HEADER -->
	<?php require_once('../const/draws/header_v2.php'); ?>

	<!-- Секция с информацией -->
	<section class="section section--head section--head-fixed">
		<div class="container">
			<div class="row">
				<div class="col-12 col-xl-6">
					<h1 class="section__title section__title--head"><?php echo AppName; ?> – <?php echo $tagline; ?></h1>
				</div>
				<div class="col-12 col-xl-6">
					<ul class="breadcrumb">
						<li class="breadcrumb__item"><a href="./">Home</a></li>
						<li class="breadcrumb__item breadcrumb__item--active">About Us</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<!-- Секция  шагов (создание аккаунта, выбор плана, присоединение-->
	<section class="section section--pb0">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<p class="section__text section__text--small"><?php echo $about; ?></p>
				</div>
			</div>
			<div class="row row--grid">
				<div class="col-12 col-lg-4">
					<div class="step">
						<span class="step__number">01</span>
						<h3 class="step__title">Create an account</h3>
						<p class="step__text"><?php echo $acc; ?></p>
					</div>
				</div>
				<div class="col-12 col-lg-4">
					<div class="step">
						<span class="step__number">02</span>
						<h3 class="step__title">Choose your Plan</h3>
						<p class="step__text"><?php echo $cp; ?></p>
					</div>
				</div>
				<div class="col-12 col-lg-4">
					<div class="step">
						<span class="step__number">03</span>
						<h3 class="step__title">Enjoy <?php echo AppName; ?></h3>
						<p class="step__text"><?php echo $en; ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Секция с планами подписок -->
	<!-- Подключение footer -->
	<?php require_once('../const/draws/footer.php'); ?>
	<!-- Подключение скриптов -->
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/slider-radio.js"></script>
	<script src="js/select2.min.js"></script>
	<script src="js/smooth-scrollbar.js"></script>
    <script src="js/themes.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/plyr.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>