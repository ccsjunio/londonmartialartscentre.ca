<footer>
    <div class="container footer-content">
        <p>&copy; 2024 London Martial Arts Centre. All rights reserved.</p>
        <div class="social-links">
            <a href="https://facebook.com/londonmartialartscentre" target="_blank" aria-label="Facebook">
                <img src="images/facebook-icon.webp" alt="Facebook">
            </a>
            <a href="https://instagram.com/londonmartialartscentre" target="_blank" aria-label="Instagram">
                <img src="images/instagram-icon.webp" alt="Instagram">
            </a>
            <a href="mailto:mail@londonmartialartscentre.ca" aria-label="Email">
                <img src="images/email-icon.webp" alt="Email">
            </a>
        </div>
        <div class="contact-info">
            <p><strong>Address:</strong> 190 Wortley Rd, Unit LL4, London, ON, Canada</p>
            <p><strong>Phone:</strong> <a href="tel:+12269988703">+1 (226) 998-8703</a></p>
        </div>
        <div class="policy-links">
            <a href="privacy-policy.php">Privacy Policy</a>
        </div>
    </div>
</footer>
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
<script async type='module' src='https://interfaces.zapier.com/assets/web-components/zapier-interfaces/zapier-interfaces.esm.js'></script>
<zapier-interfaces-chatbot-embed is-popup='true' chatbot-id='clycimeyr000bt1bjx3d6hyhb'></zapier-interfaces-chatbot-embed>
</body>
</html>