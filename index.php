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

    <section id="contact" class="contact">
		<div class="container">
			<h2>Contact Us</h2>
			<p>We love to have new friends and students at our Kung Fu school. Feel free to visit during normal business hours or send us a message below!</p>

			<div id="form-container">
				<!-- Contact Form -->
				<form id="contact-form" action="submit-form.php" method="post" class="contact-form">
					<div>
						<label for="name">Name (person insterested in training, even if child):</label>
						<input type="text" id="name" name="name" required>
					</div>
					<div>
						<label for="email">Email:</label>
						<input type="email" id="email" name="email" required>
					</div>
					<div>
						<label for="phone">Phone Number:</label>
						<input type="tel" id="phone" name="phone" placeholder="e.g., 123-456-7890" required>
					</div>
					<div>
						<label for="dob">Date of Birth (person interested on training, even if child):</label>
						<input type="date" id="dob" name="dob" required>
						<small>Providing your date of birth helps us recommend the most suitable class for your age group.</small>
					</div>
					<div id="parentField" style="display: none;">
						<label for="parentName">Parent's Name:</label>
						<input type="text" id="parentName" name="parentName" required>
					</div>
					<div>
						<label for="message">Your Message:</label>
						<textarea id="message" name="message" rows="5" required></textarea>
					</div>
					<input type="hidden" id="ageCategory" name="ageCategory" value="">
					<!-- Hidden Fields -->
					<input type="hidden" id="referrer" name="referrer" value="">
					<input type="hidden" id="queryParams" name="queryParams" value="">
					<input type="hidden" id="userAgent" name="userAgent" value="">
					<input type="hidden" id="ipAddress" name="ipAddress" value="">
					<input type="hidden" id="ageCategory" name="ageCategory" value="">
					<input type="hidden" id="age" name="age" value="">

					<button type="submit">Send Message</button>
				</form>
				<div id="confirmation-message" style="display: none; text-align: center; margin-top: 20px;">
					<h3>Thank you for contacting us!</h3>
					<p>Your message has been successfully sent. We will get back to you shortly.</p>
				</div>
			</div>

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

	<!-- Cookie Consent Popup -->
	<div id="cookie-popup" class="cookie-popup">
		<p>This site uses cookies to enhance your experience. By continuing, you agree to our use of cookies.</p>
		<button id="accept-cookies" class="btn">Accept</button>
		<button id="decline-cookies" class="btn">Decline</button>
	</div>

	<script>
		// Function to get query parameters from the URL
		function getQueryParam(name) {
			const urlParams = new URLSearchParams(window.location.search);
			return urlParams.get(name);
		}

		// Populate the hidden field with the referrer value
		document.addEventListener('DOMContentLoaded', function () {
			const referrerValue = getQueryParam('referrer'); // Get the 'referrer' parameter
			const referrerInput = document.getElementById('referrer'); // Hidden input field
			if (referrerValue) {
				referrerInput.value = referrerValue; // Set the hidden input field value
			}
		});
	</script>

	<script>
		document.addEventListener('DOMContentLoaded', function () {
			// Reference the form
			const form = document.getElementById('contact-form');
			const confirmationMessage = document.getElementById('confirmation-message');
        	const formContainer = document.getElementById('form-container');

			// Function to get the current timestamp
			function getCurrentTimestamp() {
				return Math.floor(Date.now() / 1000); // Convert milliseconds to seconds
			}

			// Listen for form submission
			form.addEventListener('submit', function (event) {
				event.preventDefault(); // Prevent the default form submission

				// Construct the URL for the webhook
				const webhookURL = 'https://hooks.zapier.com/hooks/catch/15596128/2ibmpez/';
				const formData = new FormData(form); // Collect form data
				const params = new URLSearchParams();

				// Append form fields as query parameters
				formData.forEach((value, key) => {
					params.append(key, value);
				});

				// Append the current timestamp
				params.append('timestamp', getCurrentTimestamp());

				// Send the data to the webhook
				fetch(`${webhookURL}?${params.toString()}`)
					.then(response => {
						if (response.ok) {
							console.log('Data successfully sent to Zapier webhook!');
							alert('Your message has been successfully sent!');
							form.reset(); // Reset the form after successful submission
							// Hide the form and show the confirmation message
							form.style.display = 'none';
                    		confirmationMessage.style.display = 'block';
						} else {
							console.error('Error with webhook submission:', response.statusText);
							console.log('There was an error sending your message. Please try again.');
						}
					})
					.catch(error => {
						console.error('Fetch error:', error);
						alert('There was an error sending your message. Please try again.');
					});
			});
		});
	</script>

	<script>
		document.addEventListener('DOMContentLoaded', function () {
			const cookiePopup = document.getElementById('cookie-popup');
			const acceptButton = document.getElementById('accept-cookies');
			const declineButton = document.getElementById('decline-cookies');

			// Check for cookie consent
			if (!getCookie('cookieConsent')) {
				cookiePopup.style.display = 'flex';
			}

			// Accept Cookies
			acceptButton.addEventListener('click', function () {
				setCookie('cookieConsent', 'true', 365);
				cookiePopup.style.display = 'none';
			});

			// Decline Cookies
			declineButton.addEventListener('click', function () {
				setCookie('cookieConsent', 'false', 365);
				cookiePopup.style.display = 'none';
			});

			// Handle form submission
			const form = document.getElementById('contact-form');
			// Handle form submission
			form.addEventListener('submit', async function (event) { // Make the function async
				if (getCookie('cookieConsent') === 'true') {
					const formData = new FormData(form);
					const date = new Date();

					setCookie('name', formData.get('name'), 365);
					setCookie('email', formData.get('email'), 365);
					setCookie('phone', formData.get('phone'), 365);
					setCookie('date', date.toISOString(), 365);

					// Fetch IP address dynamically
					const ip = await getIp(); 
					setCookie('ip', ip, 365);
				}
			});

			// Utility function to set a cookie
			function setCookie(name, value, days) {
				const expires = new Date();
				expires.setTime(expires.getTime() + days * 24 * 60 * 60 * 1000);
				document.cookie = `${name}=${value};expires=${expires.toUTCString()};path=/`;
			}

			// Utility function to get a cookie
			function getCookie(name) {
				const cookies = document.cookie.split('; ');
				for (let i = 0; i < cookies.length; i++) {
					const [key, value] = cookies[i].split('=');
					if (key === name) return value;
				}
				return null;
			}

			// Fetch IP address (uses a public API)
			async function getIp() {
				try {
					const response = await fetch('https://api.ipify.org?format=json');
					const data = await response.json();
					return data.ip;
				} catch (error) {
					console.error('Failed to fetch IP:', error);
					return '';
				}
			}
		});
	</script>

</body>
</html>