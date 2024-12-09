<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-N3L3TNZR');
    </script>
    <!-- End Google Tag Manager -->
     <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1752796625556398');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1752796625556398&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? 'London Martial Arts Centre'; ?></title>
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
			// Find all buttons in the .book-form
			const buttons = document.querySelectorAll('.book-form button');

			// Loop through buttons to find one with the specific text
			buttons.forEach((button) => {
				if (button.textContent.trim() === 'Confirm Booking') {
					console.log('Confirm Booking button is now available!');
					observer.disconnect(); // Stop observing once the button is found
				}
			});
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

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const hamburger = document.querySelector('.hamburger');
            const menu = document.querySelector('.menu');

            hamburger.addEventListener('click', () => {
                menu.classList.toggle('mobile-hidden');
                menu.classList.toggle('mobile-visible');
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const dobInput = document.getElementById('dob');
            const parentField = document.getElementById('parentField');
            const parentNameInput = document.getElementById('parentName');

            dobInput.addEventListener('change', function () {
                const dob = new Date(dobInput.value);
                const today = new Date();
                const age = today.getFullYear() - dob.getFullYear();
                const isUnder18 = age < 18 || (age === 18 && today < new Date(dob.setFullYear(today.getFullYear())));

                if (isUnder18) {
                    parentField.style.display = 'block';
                    parentNameInput.required = true;
                } else {
                    parentField.style.display = 'none';
                    parentNameInput.required = false;
                }
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', async () => {
            const referrerInput = document.getElementById('referrer');
            const queryParamsInput = document.getElementById('queryParams');
            const userAgentInput = document.getElementById('userAgent');
            const ipAddressInput = document.getElementById('ipAddress');
            const ageCategoryInput = document.getElementById('ageCategory');
            const dobInput = document.getElementById('dob');
            const parentField = document.getElementById('parentField');
            const parentNameInput = document.getElementById('parentName');
            const ageInput = document.getElementById('age');

            // Populate referrer
            referrerInput.value = document.referrer || 'Direct Access';

            // Populate query parameters
            const params = new URLSearchParams(window.location.search);
            queryParamsInput.value = Object.fromEntries(params.entries());

            // Populate user agent
            userAgentInput.value = navigator.userAgent;

            // Fetch IP Address
            try {
                const response = await fetch('https://api.ipify.org?format=json');
                const data = await response.json();
                ipAddressInput.value = data.ip;
            } catch (error) {
                console.error('Error fetching IP address:', error);
            }

            // Date of Birth Logic
            dobInput.addEventListener('change', () => {
                const dob = new Date(dobInput.value);
                const today = new Date();
                let age = today.getFullYear() - dob.getFullYear();
                const isBirthdayPast = 
                    today.getMonth() > dob.getMonth() || 
                    (today.getMonth() === dob.getMonth() && today.getDate() >= dob.getDate());
                
                if (!isBirthdayPast) {
                    age--;
                }

                ageInput.value = age; // Update the hidden age field

                // Show Parent Name Field if under 18
                if (age < 18) {
                    parentField.style.display = 'block';
                    parentNameInput.required = true;
                } else {
                    parentField.style.display = 'none';
                    parentNameInput.required = false;
                }

                // Populate Age Category
                if (age >= 4 && age <= 7) {
                    ageCategoryInput.value = 'siu-lung';
                } else if (age >= 8 && age <= 12) {
                    ageCategoryInput.value = 'kid';
                } else {
                    ageCategoryInput.value = 'adult';
                }
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Utility function to get a cookie by name
            function getCookie(name) {
                const cookies = document.cookie.split('; ');
                for (let i = 0; i < cookies.length; i++) {
                    const [key, value] = cookies[i].split('=');
                    if (key === name) return decodeURIComponent(value);
                }
                return null;
            }

            // Check for the 'name' cookie
            const visitorName = getCookie('name');
            if (visitorName) {
                // Create the welcome back message
                const welcomeMessage = document.createElement('div');
                welcomeMessage.id = 'welcome-back-message';
                welcomeMessage.style.margin = '20px';
                welcomeMessage.style.fontSize = '1.2em';
                welcomeMessage.style.color = '#2c3e50';
                welcomeMessage.textContent = `Welcome back, ${visitorName}!`;

                // Add the message to the top of the body or a specific section
                const aboutContainer = document.getElementById('about');
                if (aboutContainer) {
                    aboutContainer.insertAdjacentElement('beforebegin', welcomeMessage);
                } else {
                    document.body.insertAdjacentElement('afterbegin', welcomeMessage);
                }
            }
        });
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            flatpickr("#dob", {
                altInput: true, // Shows a more user-friendly format
                altFormat: "F j, Y", // Display format (e.g., January 1, 2024)
                dateFormat: "Y-m-d", // Submission format (e.g., 2024-01-01)
                maxDate: "today", // Prevent future dates
                disableMobile: "true", // Ensures the custom picker appears on mobile
            });
        });
    </script>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N3L3TNZR"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
<header>
    <div class="container">
        <h1>
            <a href="index.php">
                <img src="images/Logo_2024_02.png" alt="London Martial Arts Centre Logo" class="logo">
                London Martial Arts Centre
            </a>
        </h1>
        <nav>
            <!-- Hamburger Icon -->
            <button class="hamburger" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <!-- Navigation Menu -->
            <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#about">About Us</a></li>
                <li><a href="index.php#classes">Classes</a></li>
                <li class="dropdown">
                    <a href="#services" class="dropbtn">Our Services</a>
                    <div class="dropdown-content">
                        <a href="kung-fu-tai-chi-group-classes.php">Kung Fu and Tai Chi Group Classes</a>
                        <a href="private-classes.php">Private Classes</a>
                        <a href="online-private-classes.php">Online Private Classes</a>
                        <a href="birthday-parties.php">Birthday Parties</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="index.php#contact" class="dropbtn">Contact</a>
                    <div class="dropdown-content">
                        <a href="index.php#contact">Contact Us</a>
                        <a href="book-a-call.php">Book a Call</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">More Info</a>
                    <div class="dropdown-content">
                        <a href="genealogy.php">Genealogy</a>
                        <a href="instructors.php">Instructors</a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</header>