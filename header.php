<!DOCTYPE html>
<html lang="en">
<head>
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
</head>
<body>
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
                <li><a href="index.php#contact">Contact</a></li>
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