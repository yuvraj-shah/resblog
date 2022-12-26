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
currentTime=new Date();
//getHour() function will retrieve the hour from current time
if(currentTime.getHours()<12)
document.write("<b>Good Morning! </b>");
else if(currentTime.getHours()<17)
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
							<a href="https://api.whatsapp.com/send?phone=917285047313" target="_blank" class="dribble3 mx-2">
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
					<button class="navbar-toggler navbar-toggler-right mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
				   </button>


					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item">
								<a class="nav-link active" href="index.php">Home
									
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link " href="about.php">About</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
								    aria-expanded="false">
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
								<input class="form-control mr-sm-0 " type="search" placeholder="Search here..." required="yes" type="text" name="search[keyword]">
								<button class="btn btn1 my-2 my-sm-0 " type="submit" name="submit"><i class="fas fa-search"></i></button>
							</form>
		
						

					</div>
				</nav>

			</div>
	</header>
	<!--//header-->