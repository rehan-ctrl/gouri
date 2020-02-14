<?php include "header.php"; ?>
<div class="container-fluid">
	<div class="main-gif">
		<div class="gif-image">
			<img src="images/gr-1.jpg" height="150">
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
	<div class="parent">
		<div class="logo-child">
			<img src="images/gouri-logo.png" height="70">
		</div>
	</div>
	<div class="parent">
		<div class="menu-child ts-menu">
			<nav class="menu menu--prospero">
				<ul class="menu__list">
					<li class="menu__item menu__item--current"><a href="#" class="menu__link">Home</a></li>
					<li class="menu__item"><a href="#" class="menu__link">About</a></li>
					<li class="menu__item"><a href="#" class="menu__link">Services</a></li>
					<li class="menu__item"><a href="#" class="menu__link">Our Team</a></li>
					<li class="menu__item"><a href="#" class="menu__link">Contact Us</a></li>
				</ul>
			</nav>
		</div>
		<div class="menu-toggle">
			<!-- <a href="javascript:void(0)"><i class="fa fa-bars ts-menu"></i></a> -->
		</div>
		<div class="slogan-heading">
			<h1><span>Where good health comes </span><br>naturally.</h1>
		</div>
	</div>
	<div class="front-space"></div>
	<div class="container-fluid">
		<div class="parent">
		<div class="alphabets">
			<h1>Search treatment by keyword</h1>
			<ul class="list-inline alpha-list">
				<?php $n=1;foreach(range('A', 'Z') as $char){ ?>
				<li class="list-inline-item <?php if($char == 'A' || $char == 'Z'){echo "alpha-big";} ?> <?php if($n % 2 !==0 && $char !=='A'){echo "alpha-mid";} ?>"><?= $char ?></li>
				<?php $n++;} ?>
			</ul>
		</div>
	</div>
	</div>
</div>
<?php include "footer.php"; ?>