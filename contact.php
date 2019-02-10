<?php include ('includes/connection.php'); 
include "includes/header.php" ;
include "includes/navigation.php" ; ?>

<!-- inner page banner -->
<section class="inner-page-banner" style="background: url(images/contact.jpg) no-repeat 0px 0px;">
	<div class="page-heading text-center">
		<h2>Contact Page</h2>
		<span class="section_1-breadcrumbs"><a href="index.html"><i class="fa fa-home home_1"></i> Home</a> <span>/ Contact</span></span>
	</div>
</section>
<!-- //inner page banner -->

<!-- contact -->		
<section class="contact py-5">
	<div class="container">
		<div class="heading pb-4">
			<h3 class="heading mb-2 text-center"> <span>Contact </span> Us </h3>
			<p class="para mb-5 text-center"> </p>
		</div>
		<div class="row contact-agileinfo">
			<div class="col-md-7 contact-right"> 
				<form action="#" method="post">  
					<input type="text" name="Name" placeholder="Name" required="">
					<input type="email" class="email" name="Email" placeholder="Email" required="">
					<input type="text" name="Phone no" placeholder="Phone" required="">
					<textarea name="Message" placeholder="Message" required=""></textarea>
					<div class="read mt-3">
						<a href="#">Submit <span class="btn ml-2"><i class="fas fa-arrow-right" aria-hidden="true"></i></span></a>
					</div>	
				</form>
			</div>
			<div class="col-md-5 mt-md-0 mt-5 contact-left">
				<div class="address">
					<h5>Address:</h5>
					<p><span class="fa fa-home"></span>Union Bank ATM Building, </p><p class="ml-4" style="margin-top: -1px;"> &nbsp;Daudpur Chowk, Gorakhpur.</p> 
				</div>
				<div class="address address-mdl">
					<h5>Phones:</h5>
					<p><span class="fa fa-phone"></span> +91 91-6162-8999</p>
				</div>
				<div class="address">
					<h5>Email:</h5>
					<p><span class="fa fa-envelope"></span> <a href="mailto:hr@innovincservices.com">hr@innovincservices.com</a></p>
					<p><span class="fa fa-globe"></span> <a href="mailto:office@innovincservices.com">office@innovincservices.com</a></p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="agileits-w3layouts-map">
	<iframe src="https://maps.google.com/maps?q=Innovinc%20Educational%20Services&t=&z=13&ie=UTF8&iwloc=&output=embed" allowfullscreen></iframe>
</section>
<!-- //contact -->

<?php include ('includes/footer.php'); ?>