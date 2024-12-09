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
            <label>Interested Services:</label>
            <div>
                <label>
                    <input type="checkbox" name="services[]" value="kung-fu">
                    Kung Fu Classes
                </label>
            </div>
            <div>
                <label>
                    <input type="checkbox" name="services[]" value="wellness">
                    Wellness Classes
                </label>
            </div>
            <div>
                <label>
                    <input type="checkbox" name="services[]" value="private">
                    Private Classes
                </label>
            </div>
            <div>
                <label>
                    <input type="checkbox" name="services[]" value="online">
                    Online Classes
                </label>
            </div>
            <div>
                <label>
                    <input type="checkbox" name="services[]" value="birthday">
                    Birthday Parties
                </label>
            </div>
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