<?php 
$pageTitle = 'Birthday Parties'; 
include 'header.php'; 
?>

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
		<div class="container">
			<h2>Contact Us</h2>
			<p>Please let us know that you are interested on these services! Leave your contact information below and we will contact you soon!</p>

			<?php include 'form-container.php'; ?>

		</div>
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