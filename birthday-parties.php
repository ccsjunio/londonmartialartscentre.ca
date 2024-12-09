<?php 
$pageTitle = 'Birthday Parties'; 
include 'header.php'; 
?>

<main>
    <section class="service-detail">
        <div class="container">
            <h2>Birthday Parties</h2>
            <p>Experience the best in traditional Kung Fu and Tai Chi group training. Our classes are designed to build confidence, discipline, and community in a supportive and fun environment.</p>
            <p>Whether you are looking to improve your fitness, learn self-defense, or explore mindfulness practices through Tai Chi, our group classes cater to all levels and goals.</p>
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
			<p>Choose a class below to book your birthday party.</p>

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