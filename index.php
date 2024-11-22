<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>London Martial Arts Centre</title>
    <link rel="stylesheet" href="styles/styles.css">
	<link rel="icon" href="images/Logo_2024_02_ico.ico" type="image/x-icon">

	<!-- script for the gymdesk scheduling app -->
	<script src="https://gymdesk.com/js/widgets.js"></script>
	<script>
		document.addEventListener('DOMContentLoaded', function () {
		// Event delegation for dynamic content
		document.body.addEventListener('click', function (event) {
			// Check if the clicked element is the Confirm Booking button
			if (
				event.target && 
				(event.target.tagName === 'BUTTON' || event.target.closest('button')) &&
				event.target.textContent.trim() === 'Confirm Booking'
			) {
				console.log('Confirm Booking button clicked!');
				captureFormData();
			}
		});

		const observer = new MutationObserver(() => {
			const button = document.querySelector('.book-form button:contains("Confirm Booking")');
			if (button) {
				console.log('Confirm Booking button is now available!');
				observer.disconnect(); // Stop observing once found
			}
		});

		// Start observing changes in the document
		observer.observe(document.body, { childList: true, subtree: true });

		// Function to capture form data safely
		function captureFormData() {
			const form = document.querySelector('.book-form form.checkout');
			if (form) {
				const formData = {};
				const inputs = form.querySelectorAll('input, select, textarea');

				inputs.forEach(input => {
					formData[input.name] = input.value || '';
				});

				console.log('Captured Form Data:', formData);

				// Optionally send data to a server
				// fetch('https://yourserver.com/endpoint', {
				//     method: 'POST',
				//     headers: {
				//         'Content-Type': 'application/json'
				//     },
				//     body: JSON.stringify(formData)
				// }).then(response => response.json())
				//   .then(data => console.log('Data sent to server:', data))
				//   .catch(error => console.error('Error sending data:', error));
			} else {
				console.warn('Form not found!');
			}
		}
	});
	</script>
	
</head>
<body>
    <header>
        <div class="container">
            <h1>
				<img src="images/Logo_2024_02.png" alt="London Martial Arts Centre Logo" class="logo">
				London Martial Arts Centre
			</h1>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#classes">Classes</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

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
					<a href="#book-trial" class="btn">Book a Trial</a>
                </div>
                <div class="class-item">
                    <h3>Kids (8-12 yrs)</h3>
                    <p>Programs designed to build confidence and physical skills in a supportive environment.</p>
					<a href="#book-trial" class="btn">Book a Trial</a>
                </div>
                <div class="class-item">
                    <h3>Adults of All Ages</h3>
                    <p>Customized martial arts classes that respect your pace, condition, and goals.</p>
					<a href="#book-trial" class="btn">Book a Trial</a>
                </div>
                <div class="class-item">
                    <h3>My Wellness Formula</h3>
                    <p>A combination of Tai Chi, Qi Gong, Meditation, Flexibility, and Mobility to improve and balance your life and health.</p>
					<a href="#book-trial" class="btn">Book a Trial</a>
				</div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
		<div class="container">
			<h2>Contact Us</h2>
			<p>We love to have new friends and students at our Kung Fu school. Feel free to visit during normal business hours or send us a message below!</p>

			<!-- Contact Form -->
			<form action="submit-form.php" method="post" class="contact-form">
				<div>
					<label for="name">Your Name:</label>
					<input type="text" id="name" name="name" required>
				</div>
				<div>
					<label for="email">Your Email:</label>
					<input type="email" id="email" name="email" required>
				</div>
				<div>
					<label for="message">Your Message:</label>
					<textarea id="message" name="message" rows="5" required></textarea>
				</div>
				<button type="submit">Send Message</button>
			</form>

			<!-- Existing Map -->
			<div class="map-container">
				<iframe 
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.1160307388626!2d-81.263579!3d42.979896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882ef2a8ff49b553%3A0x9bb6bc98e3d1223!2s190%20Wortley%20Rd%2C%20London%2C%20ON%20N6C%201J8%2C%20Canada!5e0!3m2!1sen!2sca!4v1234567890!5m2!1sen!2sca" 
					width="100%" 
					height="300" 
					style="border:0;" 
					allowfullscreen="" 
					loading="lazy" 
					referrerpolicy="no-referrer-when-downgrade">
				</iframe>
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

    <footer>
        <div class="container">
            <p>&copy; 2024 London Martial Arts Centre. All rights reserved.</p>
        </div>
    </footer>

	<script>
		document.addEventListener("DOMContentLoaded", function () {
			// Get the referrer URL
			const referrer = document.referrer;

			// Log the referrer to the console (for debugging)
			console.log("User came from:", referrer);

			// Optionally display or store the referrer
			if (referrer) {
				// Example: Display the referrer in a hidden input field
				const referrerInput = document.createElement("input");
				referrerInput.type = "hidden";
				referrerInput.name = "referrer";
				referrerInput.value = referrer;
				
				// Append to a form, if needed
				const form = document.querySelector("form");
				if (form) {
					form.appendChild(referrerInput);
				}
			}
		});
	</script>

	

</body>
</html>