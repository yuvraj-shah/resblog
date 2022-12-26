<?php require("libs/fetch_data.php"); ?>
<?php //code to get the item using its id
include("database/conn.php"); //database config file
$id = $_REQUEST['id'];
$query = "SELECT * from blogs where id='" . $id . "'";
$result = mysqli_query($GLOBALS["___mysqli_ston"], $query) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : true)));
$row = mysqli_fetch_assoc($result);
//pageview count query
$page = $row['title'];
$count = "SELECT * FROM page_hits WHERE page='" . $page . "'";
$feedback = mysqli_query($GLOBALS["___mysqli_ston"], $count) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : true)));
$roo = mysqli_fetch_assoc($feedback); ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title><?php echo $row['title']; ?>|<?php getwebname("titles"); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link id="browser_favicon" rel="shortcut icon" href="blogadmin/images/<?php geticon("titles"); ?>">
	<meta charset="utf-8" name="description" content="<?php getshortdescription("titles"); ?>">
	<meta name="keywords" content="<?php getkeywords("titles"); ?>" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/single.css">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link
		href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
		rel="stylesheet">
	<!--additional javascripts will be placed here-->
	<?php getjavascripts("links"); ?>
</head>

<body>
	<!--Header-->
	<header>
		<div class="top-bar_sub_w3layouts container-fluid">
			<div class="row">
				<div class="col-md-4 logo text-left">
					<a class="navbar-brand" href="index.php">
						<i class="fas fa-chevron-left"></i>༒Ÿนvℝคj༒<i class="fas fa-chevron-right"></i> </a>
				</div>
				<div class="col-md-4 top-forms text-center mt-lg-3 mt-md-1 mt-0">
					<span>


						<SCRIPT LANGUAGE="JavaScript">
							currentTime = new Date();
							//getHour() function will retrieve the hour from current time
							if (currentTime.getHours() < 12)
								document.write("<b>Good Morning! </b>");
							else if (currentTime.getHours() < 17)
								document.write("<b>Good Afternoon! </b>");
							else
								document.write("<b>Good Evening! </b>");
						</SCRIPT>


					</span>
					<span class="mx-lg-4 mx-md-2  mx-1">
						<a href="blogadmin/index.php">
							<i class="fas fa-lock"></i> <strong>Sign In</strong></a>
					</span>
					<span>
						<a href="blogadmin/membership_signup.php">
							<i class="far fa-user"></i> <strong>Register</strong></a>
					</span>
				</div>
				<div class="col-md-4 log-icons text-right">

					<ul class="social_list1 mt-3">

						<!-- <li>
							<a href="http://www.facebook.com/yuvraj.shah.7359447" target="_blank" class="facebook1 mx-2" >
								<i class="fab fa-facebook-f"></i>

							</a>
						</li> -->
						<li>
							<a href="tel:+917285047313" class="twitter2">
								<i class="fas fa-phone"></i>

							</a>
						</li>
						<li>
							<a href="https://api.whatsapp.com/send?phone=917285047313" target="_blank"
								class="dribble3 mx-2">
								<i class="fab fa-whatsapp"></i>
							</a>
						</li>
						<li>
							<a href="mailto: shahyuvrajp@gmail.com" target="_blank" class="pin">
								<i class="fas fa-envelope-square"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="header_top" id="home">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>


				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link" href="index.php">Home

							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="about.php">About</a>
						</li>
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Categories
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#"></a>
								<?php getcategoriesmenu("blog_categories"); ?>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>

					</ul>
					<form action="search.php" method="post" class="form-inline my-2 my-lg-0 header-search" name="form">
						<input class="form-control mr-sm-0" type="search" placeholder="Search here..." required="yes"
							type="text" name="search[keyword]">
						<button class="btn btn1 my-2 my-sm-0" type="submit" name="submit"><i
								class="fas fa-search"></i></button>
					</form>



				</div>
			</nav>

		</div>
	</header>
	<!--//header-->
	<!--update database on page views-->
	<?php require_once('adminstats/conn.php');
    require_once('counter.php');
    $pn = updateCounter('' . $row['title'] . ''); // Updates page hits
    echo $pn;
    updateInfo(); // Updates hit info ?>
	<!-- <div class="banner-inner">
	</div> -->
	<!-- <ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.php">Home</a>
		</li>
		<li class="breadcrumb-item active">Blog</li>
	</ol> -->

	<!--//banner-->
	<section class="banner-bottom">
		<!--/blog-->
		<div class="container">
			<div class="row">
				<!--left-->
				<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
					<div class="blog-grid-top">
						<div class="b-grid-top">
							<div class="blog_info_left_grid">
								<a href="#">
									<img src="blogadmin/images/<?php echo $row['photo']; ?>" class="img-fluid"
										alt="image not available" style="width:900px;height:300px">
								</a>
							</div>
							<div class="blog-info-middle">
								<ul>
									<li>
										<a href="#">
											<i class="far fa-calendar-alt"></i><?php echo $row['date']; ?></a>
									</li>
									<li class="mx-2">
										<a href="#">
											<i class="far fa-user"></i><?php echo $row['author']; ?></a>
									</li>
									<li>
										<a href="#">
											<i class="far fa-tags"></i> <?php echo $row['tags']; ?></a>
									</li>
									<li>
										<a href="#">
											<i class="far fa-eye fa-x2"></i> <?php echo $roo['count']; ?></a>
									</li>

								</ul>
							</div>
						</div>

						<h3>
							<a href="single.html"><?php echo $row['title']; ?></a>
						</h3>
						<!--sharing script-->
						<?php getsharingscript("links"); ?>
						<?php echo $row['content']; ?>
					</div>
					<!--comments script will go here-->
					<?php getcommentsscript("links"); ?>
				</div>

				<!--//left-->
				<!--right-->
				<aside class="col-lg-4 agileits-w3ls-right-blog-con text-right">
					<div class="right-blog-info text-left">
						<h4 class="text-center pb-3"><strong>Categories</strong></h4>
						<ul class="list-group single" style="background-color: #d8e2dc;text-align:center;" >
							<?php getcategoriesmenu("blog_categories"); ?>
						</ul>
						<!-- <div class="tech-btm widget_social">
							<h4>Stay Connected</h4>
							<ul>
								<li>
									<a class="twitter" style="background-color: green;"
										href="https://api.whatsapp.com/send?phone=917285047313" target="_blank">
										<i class="fab fa-whatsapp"></i>
										<span class="count"></span> Whatsapp</a>
								</li>
								<li>
									<a class="facebook" href="tel:+917285047313">
										<i class="fas fa-phone"></i>
										<span class="count"></span> Phone</a>
								</li> -->
								<!-- <li>
									<a class="dribble" href="<?php getlinks("links", "dribble"); ?>">
										<i class="fas fa-envelope-square"></i>

										<span class="count"></span> Dribble</a>
								</li> -->
								<!-- <li>
									<a class="pin" href="mailto: shahyuvrajp@gmail.com" target="_blank">
										<i class="fas fa-envelope-square"></i>
										<span class="count"></span> Email</a>
								</li> -->
							<!-- </ul>
						</div> -->
						<div class="tech-btm">
							<h4 class="text-center pt-3">Older Posts</h4>
							<?php getolderposts("blogs"); ?>
							<!-- <h4>Editor's Choice</h4>
															<?php geteditorschoice("editors_choice"); ?> -->
							<!--olderpostsendhere-->
						</div>
					</div>
				</aside>
				<!--//right-->
			</div>
		</div>
	</section>
	<!--//main-->
	<!--footer-->
	<?php include("footer.php"); ?>
	<!---->
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!--/ start-smoth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!--// end-smoth-scrolling -->

	<script>
		$(document).ready(function () {
			/*
									var defaults = {
											containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
										};
										*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>

	<!-- //Custom-JavaScript-File-Links -->
	<script src="js/bootstrap.js"></script>


</body>

</html>