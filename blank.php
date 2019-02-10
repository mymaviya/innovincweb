<?php include ('includes/connection.php'); 
include "includes/header.php" ;
include "includes/navigation.php" ; ?>

<!-- inner page banner -->
<section class="inner-page-banner">
	<div class="page-heading text-center">
		<h2>Error Page</h2>
		<span class="section_1-breadcrumbs"><a href="index.html"><i class="fa fa-home home_1"></i> Home</a> <span>/ Error page</span></span>
	</div>
</section>
<!-- //inner page banner -->

<!-- error content -->
<section class="error py-5">
	<div class="container">
		<div class="error_content">
			<span class="fas fa-frown"></span>
			<h3 class="mt-4">Sorry, Page not found!</h3>
			<p>Nam eleifend velit eget dolor vestibulum ornare. Vestibulum est nulla, fermentum eget euismod et, tincidunt at dui. Nulla tellus nisl, semper id justo vel, rutrum finibus risus. Cras vel auctor odio.</p>
			<form action="#" method="post">
				<input class="serch" type="search" name="serch" placeholder="Search here" required="">
				<button class="btn1"><i class="fa fa-search" aria-hidden="true"></i></button>
				<div class="clearfix"> </div>
			</form>
			<a class="b-home" href="index.html">Back to Home</a>
		</div>
	</div>
</section>
<!-- //error content -->

<?php include ('includes/footer.php'); ?>