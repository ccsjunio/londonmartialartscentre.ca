<?php 
$pageTitle = 'Book a Call'; 
include 'header.php'; 
?>

<main>
    <section class="book-call">
        <div class="container">
            <h2>Book a Call</h2>
            <p>Schedule a call with us to discuss your goals and how our programs can help you achieve them.</p>
            <div class="embedded-call">
                <!-- Motion embed begin -->
                <iframe 
                    src="https://app.usemotion.com/meet/londonmartialartscentre/info" 
                    title="Motion Booking Page" 
                    width="100%" 
                    height="840px"
                    frameborder="0"
                    allowfullscreen
                    loading="lazy">
                </iframe>
                <!-- Motion embed end -->
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>