<?php 
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
    	$referrer = htmlspecialchars($_POST['referrer']); // Sanitize input
    	// Use the $referrer value as needed (e.g., store it, log it, etc.)
	}
	$pageTitle = 'Home'; // Set a custom page title
	include 'header.php'; 
?>


    <section id="home" class="hero">
		<div class="container">
			<h2>Welcome to London Martial Arts Centre<br/>KIDS - ADULTS - SENIORS</h2>
			<p>Your journey to self-discipline and wellness begins here.</p>
			<a href="#book-trial" class="cta-button">Book a Free Trial</a>
		</div>
	</section>

    <section id="about" class="about">
        <div class="container">
            <h2>About Us</h2>
            <p>At London Martial Arts Centre, we offer a safe space for all generations to thrive. Our programs are designed to foster self-confidence, discipline, and community.</p>
        </div>
    </section>

    <section id="classes" class="classes">
		<div class="container">
			<h2>Our Classes</h2>
			<div class="class-list">
				<div class="class-item">
					<h3>Little Dragons (4.5-7 yrs)</h3>
					<p>Classes dedicated to fostering respectful, happy, and healthy kids.</p>
					<a href="#little-dragons-code" class="btn">Book a Trial</a>
				</div>
				<div class="class-item">
					<h3>Kids (8-12 yrs)</h3>
					<p>Programs designed to build confidence and physical skills in a supportive environment.</p>
					<a href="#kids-code" class="btn">Book a Trial</a>
				</div>
				<div class="class-item">
					<h3>Adults of All Ages</h3>
					<p>Customized martial arts classes that respect your pace, condition, and goals.</p>
					<a href="#adults-code" class="btn">Book a Trial</a>
				</div>
				<div class="class-item">
					<h3>My Wellness Formula</h3>
					<p>A combination of Tai Chi, Qi Gong, Meditation, Flexibility, and Mobility to improve and balance your life and health.</p>
					<a href="#wellness-code" class="btn">Book a Trial</a>
				</div>
			</div>
		</div>
	</section>

	<section id="services" class="services">
		<div class="container">
			<h2>Our Services</h2>
			<div class="service-list">
				<div class="service-item">
					<h3>Kung Fu and Tai Chi Group Classes</h3>
					<p>Experience the benefits of traditional martial arts training in a group setting, building community and discipline together.</p>
					<a href="kung-fu-tai-chi-group-classes.php" class="btn">Learn More</a>
				</div>
				<div class="service-item">
					<h3>Private Classes</h3>
					<p>Get personalized attention and a tailored curriculum to help you achieve your specific goals.</p>
					<a href="private-classes.php" class="btn">Learn More</a>
				</div>
				<div class="service-item">
					<h3>Online Private Classes</h3>
					<p>Enjoy the flexibility of learning martial arts from the comfort of your home with our online private sessions.</p>
					<a href="online-private-classes.php" class="btn">Learn More</a>
				</div>
				<div class="service-item">
					<h3>Birthday Parties</h3>
					<p>Make your special day unforgettable with our exciting martial arts-themed birthday party packages.</p>
					<a href="birthday-parties.php" class="btn">Learn More</a>
				</div>
			</div>
		</div>
	</section>

    <section id="contact" class="contact">
		<div class="container">
			<h2>Contact Us</h2>
			<p>We love to have new friends and students at our Kung Fu school. Feel free to visit during normal business hours or send us a message below!</p>

			<?php include 'form-container.php'; ?>

			<!-- Existing Map -->
			<div class="map-and-video">
				<!-- Embed Map Section Here -->
				<iframe 
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.923245918659!2d-81.25659782323886!3d42.96348627913757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882ef1f8ff9d5e05%3A0x2e0bc4b0efc8aecd!2s190%20Wortley%20Rd%2C%20London%2C%20ON%20N6C%203P4%2C%20Canada!5e0!3m2!1sen!2sca!4v1699876543210!5m2!1sen!2sca" 
					width="100%" 
					height="300" 
					style="border:0;" 
					allowfullscreen="" 
					loading="lazy" 
					referrerpolicy="no-referrer-when-downgrade">
				</iframe>
				
				<!-- Embedded Video Section -->
				<div class="video-section">
					<h4>How to Get to Our Unit</h4>
					<iframe 
						width="100%" 
						height="315" 
						src="https://www.youtube.com/embed/4dc7vrGiX4E" 
						title="YouTube video player" 
						frameborder="0" 
						allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
						allowfullscreen>
					</iframe>
				</div>
			</div>
		</div>
	</section>

	<section id="book-trial" class="book-trial">
		<div class="container">
			<h2>Book Your Free Trial</h2>
			<p>Choose a class below to book your free trial session.</p>

			<!-- Navigation List -->
			<ul id="class-navigation" class="class-navigation">
				<li><a href="#little-dragons-code">Little Dragons (4.5-7 yrs)</a></li>
				<li><a href="#kids-code">Kids (8-12 yrs)</a></li>
				<li><a href="#adults-code">Adults of All Ages</a></li>
				<li><a href="#wellness-code">My Wellness Formula</a></li>
			</ul>

			<!-- Embedded Codes -->
			<div id="embedded-code-container">
				<div id="little-dragons-code" class="embedded-code">
					<h3>Little Dragons (4.5-7 yrs)</h3>
					<div class="maonrails-schedule" attr-gym="AnM4j" attr-schedule="l4kWj" attr-program="vQpnn"></div>
				</div>
				<div id="kids-code" class="embedded-code">
					<h3>Kids (8-12 yrs)</h3>
					<div class="maonrails-schedule" attr-gym="AnM4j" attr-schedule="l4kWj" attr-program="q51gp"></div>
				</div>
				<div id="adults-code" class="embedded-code">
					<h3>Adults of All Ages</h3>
					<div class="maonrails-schedule" attr-gym="AnM4j" attr-schedule="l4kWj" attr-program="kpVeM"></div>
				</div>
				<div id="wellness-code" class="embedded-code">
					<h3>My Wellness Formula</h3>
					<div class="maonrails-schedule" attr-gym="AnM4j" attr-schedule="l4kWj" attr-program="GyQY5"></div>
				</div>
			</div>
		</div>
	</section>

    <?php include 'footer.php'; ?>	
