<?php 
$pageTitle = 'Birthday Parties'; 
include 'header.php'; 
?>

<section class="hero">
    <video class="hero-video" autoplay loop muted playsinline poster="path/to/your/poster.jpg">
        <source src="/images/BirthdayParty-Murilo.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="hero-section">
        <div class="hero-content">
            <h1>Celebrate with Us!</h1>
            <p>Make your child's birthday unforgettable at London Martial Arts Centre.</p>
            <a href="#booking-section" class="btn">Book Now</a>
        </div>
    </div>
</section>

<main>
    <section class="service-detail">
        <div class="container">
            <h2>Make Your Child's Birthday Unforgettable!</h2>
            <p>
                Host your child's birthday party at the London Martial Arts Centre and make it a day to remember! Our unique birthday package combines fun, learning, and celebration in a safe and exciting environment.
            </p>

            <div class="birthday-details">
                <h3>Here's What’s Included:</h3>
                <ul>
                    <li>10 birthday guests</li>
                    <li>A 2 hour period that includes a 45 minutes Kung Fu class and games</li>
                    <li>10 Party Invitations</li>
                    <li>10 VIP's which allow each guest to train at our school for 2 weekd free</li>
                    <li>Cake cutting with a butterfly sword</li>
                    <li>Ceremonial gift opening</li>
                </ul>

                <div class="carousel-container">
                    <div class="carousel">
                        <div class="carousel-slide">
                            <img src="/images/birthday-party-01.png" loading="lazy" alt="Description of image 1">
                        </div>
                        <div class="carousel-slide">
                            <img src="/images/birthday-party-02.png" loading="lazy" alt="Description of image 2">
                        </div>
                        <div class="carousel-slide">
                            <img src="/images/birthday-party-03.png" loading="lazy" alt="Description of image 3">
                        </div>
                        <div class="carousel-slide">
                            <img src="/images/birthday-party-04.png" loading="lazy" alt="Description of image 4">
                        </div>
                    </div>
                    <button class="carousel-button prev" onclick="moveSlide(-1)">&#10094;</button>
                    <button class="carousel-button next" onclick="moveSlide(1)">&#10095;</button>
                </div>

                <h3>Pricing and Booking:</h3>
                <p>
                    <strong>Price:</strong> CAD 199 + HST (50% paid in advance)<br>
                    This price includes all the features listed above.
                    The remaining amount as well as the cost for additional guests can be paid on the day of the party!
                </p>

                <p>
                    For additional guests the cost is CAD10 + HST per guest and the minimum age is 3 years old.
                </p>

                <h3>How It Works:</h3>
                <ul>
                    <li>You bring the food, drinks, decorations, and any other party items you need.</li>
                    <li>We supply 2 folding tables with standard table cloths for the party.</li>
                </ul>

                <h3>Ready to Book?</h3>
                <p>
                    Don't wait to secure your child's special day! Use the booking form below to reserve your spot. Spaces fill up quickly, so book today!
                </p>

                <a href="#booking-section" class="btn" id="button-birthday-parties-book-now">Book Now</a>
            </div>
        </div>
    </section>
    <section id="contact" class="contact">
		<div class="form-container" id="birthday-party-form-container">
			<h2>Contact Us</h2>
			<p>Please let us know that you are interested on these services! Leave your contact information below and we will contact you soon!</p>

			<form id="birthday-party-form" action="https://hooks.zapier.com/hooks/catch/15596128/2fzalop/" method="post">
                <label for="child-name">Child's Name:</label>
                <input type="text" id="child-name" name="child_name" required>

                <label for="parent-name">Parent's Name:</label>
                <input type="text" id="parent-name" name="parent_name" required>

                <label for="contact-email">Contact Email:</label>
                <input type="email" id="contact-email" name="contact_email" required>

                <label for="contact-phone">Contact Phone Number:</label>
                <input type="tel" id="contact-phone" name="contact_phone" required>

                <label for="birthday-date">Date of the Birthday:</label>
                <input type="date" id="birthday-date" name="birthday_date" required>

                <label for="number-invitees">Number of Invitees:</label>
                <input type="number" id="number-invitees" name="number_invitees" min="1" required>

                <fieldset>
                    <legend>Optional Services:</legend>
                    <div class="birthday-checkbox-container">
                        <input type="checkbox" id="extra_time_before" name="optional_services" value="extra_time_before">
                        <label for="extra_time_before">Extra Time Before</label>
                    </div>
                    <div class="birthday-checkbox-container">
                        <input type="checkbox" id="extra_time_after" name="optional_services" value="extra_time_after">
                        <label for="extra_time_after">Extra Time After</label>
                    </div>
                    <div class="birthday-checkbox-container">
                        <input type="checkbox" id="cake_cutting_with_sword" name="optional_services" value="cake_cutting_with_sword">
                        <label for="cake_cutting_with_sword">Cutting the Cake with a Sword</label>
                    </div>
                    <div class="birthday-checkbox-container">
                        <input type="checkbox" id="picture_with_uniform" name="optional_services" value="picture_with_uniform">
                        <label for="picture_with_uniform">Picture with Uniform</label>
                    </div>
                </fieldset>

                <label for="message">Message:</label>
                <textarea id="message" name="message"></textarea>

                <button type="submit">Submit</button>
            </form>

		</div>
        <div id="confirmation-message"></div>
	</section>
    <section id="book-trial" class="book-trial">
		<div class="container">
			<h2>Book Your Birthday Party</h2>
			<p>Choose a slot below to book your birthday party.</p>

            <!-- Agreement Link -->
            <p>
                <a href="birthday-party-agreement.php" class="agreement-link">Review Our Birthday Party Agreement</a>
            </p>

			<!-- Embedded Codes -->
			<div id="embedded-code-container">
				<div id="tiny-program-code" class="embedded-code">
					<h3>Birthday Party Dates</h3>
                    <div class="maonrails-schedule" attr-gym="AnM4j" attr-schedule="ARemB" attr-program="LOQ5v"></div>
				</div>
			</div>
		</div>
	</section>


   
</main>

<?php include 'footer.php'; ?>