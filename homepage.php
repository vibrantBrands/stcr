<?php require('elements/header.php'); ?>

<div class="homepage">
	<section class="hero">
		 <!--<div class="hero-slider">
			<div class="overlay-text">
				<h1>Retail Technology</h1>
				<h2>Leading in Retail Innovation</h2>
			</div>
			<div class="overlay-text">
				<h1>24/7 Support</h1>
				<h2></h2>
			</div>
			<div class="overlay-text">
				<h1>Flexibility</h1>
				<h2></h2>
			</div>
			<div class="overlay-text">
				<h1>Trusted Advisor</h1>
				<h2>Since 1967</h2>
			</div>
			<div class="overlay-text">
				<h1>All in One Solution</h1>
				<h2>Increase Profitibility</h2>
			</div>

		</div>

			 <div style="padding:56.25% 0 0 0;position:relative;width:100%"><iframe src="https://player.vimeo.com/video/470760276?autoplay=1&loop=1&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>  -->

		<video muted autoplay loop controls id="video">
             <source src="<?php echo $this->getThemePath(); ?>/video/STCR-WebHeader2020.mp4" type="video/mp4"> 
        </video>
        <label for="video">STCR Hero Video</label>
	</section>
	<section class="image-row">
		<h2>Why STCR?</h2>
		<div class="container icons row">
			<div>
				<img src="<?php echo $this->getThemePath(); ?>/img/globe.png" alt="Design" data-aos="fade-right">
				<p>Since 1967</p>
			</div>

			<div>
				<img src="<?php echo $this->getThemePath(); ?>/img/lightbulb.png" alt="Design" data-aos="fade-down">
				<p>Industry Experts</p>
			</div>
			<div>
				<img src="<?php echo $this->getThemePath(); ?>/img/ring.png" alt="Construction" data-aos="fade-down">
				<p>Total Solution</p>
			</div>
			<div>
				<img src="<?php echo $this->getThemePath(); ?>/img/rocket.png" alt="Contractors" data-aos="fade-down">
				<p>Cutting Edge</p>
			</div>
			<div>
				<img src="<?php echo $this->getThemePath(); ?>/img/24.png" alt="Facility" data-aos="fade-left">
				<p>Leaders in Support</p>
			</div>
		</div>
	</section>
	<section class="gray-bg" data-aos="fade-up">
		<div class="container">
			<?php
		        $a = new Area('Main Company Description');
		        $a->display($c);
		    ?>
			
		</div>
	</section>
	<section class="dedicated">
		<div class="image-row">
			<div>
				<h3 data-aos="fade-right">Artificial Intelligence & Robotics</h3>
				<img src="<?php echo $this->getThemePath(); ?>/img/badger_2.png" alt="Badger" class="badger" data-aos="zoom-in">
			</div>
			<div>
				<h3 data-aos="fade-right">E-Commerce</h3>
				<img src="<?php echo $this->getThemePath(); ?>/img/ecommerce_2.png" alt="Ecommerce" class="label" data-aos="zoom-in">
			</div>
			<div>
				<h3 data-aos="fade-right">Retail Automation Tools</h3>
				<img src="<?php echo $this->getThemePath(); ?>/img/label_2.png" alt="Label" class="label" data-aos="zoom-in">
				
			</div>
		</div>
		<div class="redbar">
			<strong>Dedicated</strong> to <strong>Improving Retail</strong> with <strong>Technology</strong>
		</div>
	</section>
	<section class="customer-profiles" data-aos="fade-up">
		<div class="container image-row">
			<h2>Customer Stories</h2>
			<div class="images">
				<div>
					<a href="https://youtu.be/3BvhOGgCes8" data-lity>
						<img src="<?php echo $this->getThemePath(); ?>/img/vegetables.png" alt="Vegetables">
						<img src="<?php echo $this->getThemePath(); ?>/img/play-btn.png" alt="Play"class="play">
						<h3>Support Miracle</h3>
					</a>
				</div>
				<div>
					<a href="https://youtu.be/sI0VDG6Mqdw" data-lity>
						<img src="<?php echo $this->getThemePath(); ?>/img/meat.png" alt="Meat" >
						<img src="<?php echo $this->getThemePath(); ?>/img/play-btn.png" alt="Play"  class="play">
						<h3>Speed Increased</h3>
					</a>
				</div>
				<div>
					<a href="https://vimeo.com/237944002" data-lity>
						<img src="<?php echo $this->getThemePath(); ?>/img/bread.png" alt="Bread">
						<img src="<?php echo $this->getThemePath(); ?>/img/play-btn.png" alt="Play" class="play">
						<h3>System Paid for Itself</h3>
					</a>
				</div>
			</div>
		</div>
	</section>
	<section class="news-wrapper">
		<div class="news">
			<div class="container">
				<h2>Industry Insights</h2>
			</div>
			<div class="container row">
				<?php
			        $a = new Area('Blog Teasers');
			        $a->display($c);
			    ?>
			</div>
		</div>
	</section>
	<section class="get-started" data-aos="fade-up">
		<div class="container">
			<h1>Let's Get Started</h1>
			<h2>Call us or email us today.</h2>
			<div class="phone">
				<a href="tel:6077570181">607.757.0181</a>
			</div>
		</div>
	</section>

</div>

<?php require('elements/footer.php'); ?>
