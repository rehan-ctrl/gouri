<?php include "header.php"; ?>
<div class="container-fluid">
	<div class="main-gif">
		<div class="gif-image">
			<img src="images/web-gif.png">
		</div>
		<div class="search-section">
			<div class="search-div">
				<div class="search-inner-div">
					<div class="first-search">
						<i class="fa fa-search"></i>
						<input type="text" class="search-box-one" placeholder="Treatments">
					</div>
					<div class="search-breaker"></div>
					<div class="second-search">
						<i class="fa fa-search"></i>
						<input type="text" class="search-box-two" placeholder="Symptoms">
					</div>
					<div class="">
						<input type="button" class="search-button" value="Submit">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="style-1">
	<div class="little-space"></div>
	<div class="container-fluid">
		<div class="treatments-list">
			<div class="tl-heading">
				<h2><span>Treatments</span><br>By Alphabets</h2>
			</div>
			<div class="little-space"></div>
			<div class="sldier-section">
				<div class="main-content">
					<div class="owl-carousel owl-theme">
						<?php $n=1;foreach(range('A', 'Z') as $char){ ?>
						<div class="item">
							<div class="alpha-section">
								<?php
								$random_color_part= str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
								$random_color_part1= str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
								$random_color_part2= str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
								$random_color = $random_color_part . $random_color_part1 . $random_color_part2;
								?><br>
								<div class="alpha-letter">
									<a href="" style="background-color: #<?= $random_color ?>"><?= $char ?></a>
								</div>
								<div class="alpha-treatments">
									<span>Abdominal pain</span><br>
									<span>Abnormal Appitite</span><br>
									<div class="more-treatments"><?= str_shuffle(substr(123456789, 0,2)) ?>+</div>
								</div>
							</div>
						</div>
						<?php $n++;} ?>
					</div>
					<div class="owl-theme">
						<div class="owl-controls">
							<div class="custom-nav owl-nav"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="little-space"></div>
	<div class="left-padding">
		<div class="container-fluid">
			<div class="line"></div>
			<div class="little-space"></div>
			<div class="row">
				<div class="col-md-3">
					<div class="appreciation-section">
						<div class="app-heading">
							<h2>May i help<br>you</h2>
						</div>
						<div class="space"></div>
						<p class="app-desc">The aim of this clinics is<br>
							the restore the sick to healthy,<br>
							rapidly albiet gently.
						</p>
					</div>
				</div>
				<div class="offset-md-1 col-md-3">
					<div class="appreciation-section">
						<div class="app-heading">
							<img src="images/people.jfif" height="80">
						</div>
						<div class="space"></div>
						<p class="app-desc">Over <span>30,000</span><br>
						<span>happy patients</span><br>
						over all india
					</p>
				</div>
			</div>
			<div class="offset-md-1 col-md-3">
				<div class="appreciation-section">
					<div class="app-heading">
						<img src="images/prize.png" height="80">
					</div>
					<div class="space"></div>
					<p class="app-desc"><span>91% success rate</span><br>
					in treating various <br>medical conditions
				</p>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<div class="style-2">
<div class="little-space"></div>
<div class="left-padding">
<div class="container-fluid">
	<div class="consultation-start">
		<div class="os-heading">
			<h2>Our Consultation</h2>
		</div>
		<div class="little-space"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<img src="images/dr-gouri.png" height="400">
				</div>
				<div class="col-md-8">
					<div class="little-space"></div>
					<div class="little-space"></div>
					<div class="dr-desc">
						<div class="dr-name">
							<h2>Dr Venugopal Gouri</h2>
							<div class="space"></div>
							<h4>Consultant Homeopath</h4>
							<div class="space"></div>
						</div>
						<div class="dr-intro">
							<p>
								Gouri Homeo Healthway was established in 1993 at Hyderabad and works from three locations of Hyderabad i.e, Vikrampuri (Karkhana), Srinagar Colony and Kondapur while open to consultations online. The aim of these clinics is to restore the sick to health, rapidly albeit gently. Patient-First is the policy at our clinics. We look for the appropriate symptoms of the patient and give importance to pathological investigations while we arrive at the best possible combination of homoeopathic remedies.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<div class="little-space"></div>
<div class="little-space"></div>
<div class="little-space"></div>
</div>
<div class="left-padding right-padding">
<div class="container-fluid">
<div class="consultation-start">
	<div class="opt-heading text-center">
		<h2>Our popular treatments</h2>
	</div>
	<div class="little-space"></div>
	<div class="opt-section">
		<div class="row">
			<div class="col-md-4">
				<div class="opts-image">
					<img src="images/post-1.jpg">
				</div>
				<div class="opts-heading">
					<div class="space"></div>
					<div class="left-padding">
						<h4><a href="collection.php">Hairfall</a></h4>
						<p>A few remedies to arrest hair loss and improve growth </p>
						<i class="fa fa-tags"></i> <div class="chip">Hair</div>
						<div class="chip">remedies</div><div class="chip">arrest</div>
						<div class="chip">hair loss</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="opts-image">
					<img src="images/post-2.png">
				</div>
				<div class="opts-heading">
					<div class="space"></div>
					<div class="left-padding">
						<h4><a href="collection.php">Hair Growth</a></h4>
						<p>From dry scalp to hereditary reasons, hairfall can be...</p>
						<i class="fa fa-tags"></i> <div class="chip">Hair</div>
						<div class="chip">remedies</div><div class="chip">arrest</div>
						<div class="chip">hair growth</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="opts-image">
					<img src="images/post-3.jpg">
				</div>
				<div class="opts-heading">
					<div class="space"></div>
					<div class="left-padding">
						<h4><a href="collection.php">Frequent urination</a></h4>
						<p>A need to pass urine more regularly and most of the...</p>
						<i class="fa fa-tags"></i> <div class="chip">regularly</div>
						<div class="chip">urination</div><div class="chip">urine</div>
						<div class="chip">problem</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<div class="little-space"></div>
<div class="container-fluid">
<div class="index-contact-section">
<div class="offset-md-3 col-md-6">
	<div class="contact-heading text-center">
		<h2>MAKE APPOINTMENT</h2>
	</div>
	<div class="little-space"></div>
	<form action="" method="post">
		<div class="row">
			<div class="col-md-6">
				<!-- Default input -->
				<div class="form-group">
					<label>First Name</label>
					<input type="text" class="form-control" placeholder="First Name" required="">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label>Last Name</label>
					<input type="text" class="form-control" placeholder="Last Name" required="">
				</div>
			</div>
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="text" class="form-control" placeholder="Email" required="">
		</div>
		<div class="form-group">
			<label>Mobile</label>
			<input type="text" class="form-control" placeholder="Mobile" required="">
		</div>
		<div class="form-group">
			<select class="form-control" name="location" required="">
				<option value="" selected="">Select Location</option>
				<option value="Vikrampuri Colony">Vikrampuri Colony</option>
				<option value="Srinagar Colony">Srinagar Colony</option>
				<option value="Kondapur">Kondapur</option>
			</select>
		</div>
		<div class="form-group">
			<textarea id="message" class="form-control  c-message" name="message" placeholder="Write Your Message.." style="height:120px"></textarea>
		</div>
		<input type="submit" name="contact-submit" class="btn btn-sm btn-primary" value="Submit">
	</form>
</div>
</div>
</div>
<div class="little-space"></div>
<div class="left-padding right-padding">
<div class="container-fluid">
<div class="consultation-start">
	<div class="opt-heading text-center">
		<h2>What people say about us</h2>
	</div>
	<!-- Section: Testimonials v.2 -->
	<div class="offset-md-3 col-md-6">
		<section class="text-center my-5">
			<div class="wrapper-carousel-fix">
				<!-- Carousel Wrapper -->
				<div id="carousel-example-1" class="carousel no-flex testimonial-carousel slide carousel-fade" data-ride="carousel"
					data-interval="false">
					<!--Slides-->
					<div class="carousel-inner" role="listbox">
						<!--First slide-->
						<div class="carousel-item active">
							<div class="testimonial">
								<!--Avatar-->
								<div class="avatar mx-auto mb-4">
									<img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" class="rounded-circle img-fluid"
									alt="First sample avatar image">
								</div>
								<!--Content-->
								<p>
									<i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod
									eos
									id officiis hic tenetur quae quaerat ad velit ab. Lorem ipsum dolor sit amet, consectetur
									adipisicing elit. Dolore cum accusamus eveniet molestias voluptatum inventore laboriosam labore
									sit, aspernatur praesentium iste impedit quidem dolor veniam.
								</p>
								<h4 class="font-weight-bold">Anna Deynah</h4>
								<h6 class="font-weight-bold my-3">Founder at ET Company</h6>
								<!--Review-->
								<i class="fas fa-star blue-text"> </i>
								<i class="fas fa-star blue-text"> </i>
								<i class="fas fa-star blue-text"> </i>
								<i class="fas fa-star blue-text"> </i>
								<i class="fas fa-star-half-alt blue-text"> </i>
							</div>
						</div>
						<!--First slide-->
						<!--Second slide-->
						<div class="carousel-item">
							<div class="testimonial">
								<!--Avatar-->
								<div class="avatar mx-auto mb-4">
									<img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg" class="rounded-circle img-fluid"
									alt="Second sample avatar image">
								</div>
								<!--Content-->
								<p>
									<i class="fas fa-quote-left"></i> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
									odit
									aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque
									porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia
								non numquam eius modi tempora incidunt ut labore. </p>
								<h4 class="font-weight-bold">Maria Kate</h4>
								<h6 class="font-weight-bold my-3">Photographer at Studio LA</h6>
								<!--Review-->
								<i class="fas fa-star blue-text"> </i>
								<i class="fas fa-star blue-text"> </i>
								<i class="fas fa-star blue-text"> </i>
								<i class="fas fa-star blue-text"> </i>
								<i class="fas fa-star blue-text"> </i>
							</div>
						</div>
						<!--Second slide-->
						<!--Third slide-->
						<div class="carousel-item">
							<div class="testimonial">
								<!--Avatar-->
								<div class="avatar mx-auto mb-4">
									<img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(3).jpg" class="rounded-circle img-fluid"
									alt="Third sample avatar image">
								</div>
								<!--Content-->
								<p>
									<i class="fas fa-quote-left"></i> Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
									culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus
								error sit voluptatem accusantium doloremque laudantium.</p>
								<h4 class="font-weight-bold">John Doe</h4>
								<h6 class="font-weight-bold my-3">Front-end Developer in NY</h6>
								<!--Review-->
								<i class="fas fa-star blue-text"> </i>
								<i class="fas fa-star blue-text"> </i>
								<i class="fas fa-star blue-text"> </i>
								<i class="fas fa-star blue-text"> </i>
								<i class="far fa-star blue-text"> </i>
							</div>
						</div>
						<!--Third slide-->
					</div>
					<!--Slides-->
					<!--Controls-->
					<a class="carousel-control-prev left carousel-control" href="#carousel-example-1" role="button"
						data-slide="prev">
						<span class="icon-prev" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next right carousel-control" href="#carousel-example-1" role="button"
						data-slide="next">
						<span class="icon-next" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
					<!--Controls-->
				</div>
				<!-- Carousel Wrapper -->
			</div>
		</section>
		<!-- Section: Testimonials v.2 -->
	</div>
</div>
</div>
</div>
<?php include "footer.php"; ?>