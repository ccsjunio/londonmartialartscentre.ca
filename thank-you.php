<?php 
$pageTitle = 'Thank You'; 
include 'header.php'; 
?>

<main>
    <section class="thank-you">
        <div class="container">
            <h2>Thank You!</h2>
            <p>We’ve received your message and will get back to you as soon as possible.</p>
            <p>If you have any further questions, feel free to <a href="<?php echo $currentDomain;?>#contact" class="link">contact us</a> again.</p>
            <a href="index.php" class="btn">Back to Home</a>
        </div>
    </section>
    <section id="book-trial" class="book-trial">
		<div class="container">
			<h2>Book Your Free Trial</h2>
			<p>Choose a class below to book your free trial session.</p>

			<!-- Navigation List -->
			<ul id="class-navigation" class="class-navigation">
				<li><a href="#tiny-program-code">Tiny Program (3 yrs)</a></li>
				<li><a href="#little-dragons-code">Little Dragons (4.5-7 yrs)</a></li>
				<li><a href="#kids-code">Kids (8-12 yrs)</a></li>
				<li><a href="#adults-code">Adults of All Ages</a></li>
				<li><a href="#wellness-code">My Wellness Formula</a></li>
			</ul>

			<!-- Embedded Codes -->
			<div id="embedded-code-container">
				<div id="tiny-program-code" class="embedded-code">
					<h3>Tiny Program (3 yrs)</h3>
					<div class="maonrails-schedule" attr-gym="AnM4j" attr-schedule="l4kWj" attr-program="rkwWE"></div>
				</div>
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
</main>

<?php include 'footer.php'; ?>