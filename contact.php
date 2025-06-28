<?php include('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/contactus.css">
</head>
<body>

        <div class="p-hero">
            <h1>Today’s Power, Tomorrow’s People</h1>
        </div>

 <!-- Main Content Section -->
 <section class="contact-section">
    <div class="contact-container">
        <h2>Contact Us</h2>

        <!-- Contact Form -->
        <form action="#" method="POST" class="contact-form">
        <!-- First and Last Name Fields Side by Side -->
        <div class="name-fields">
            <div class="name-field">
                <label for="first-name">First Name:</label>
                <input type="text" id="first-name" name="first-name" required>
            </div>
            <div class="name-field">
                <label for="last-name">Last Name:</label>
                <input type="text" id="last-name" name="last-name" required>
            </div>
        </div>


            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="reason">Reason for Contact</label>
            <select id="reason" name="reason" required>
                <option value="">Select a reason...</option>
                <option value="inquiry">General Inquiry</option>
                <option value="support">Customer Support</option>
                <option value="feedback">Feedback</option>
                <option value="partnership">Partnership Proposal</option>
                <option value="career">Job Application</option>
                <option value="other">Other</option>
            </select>

            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Your message here" rows="4" required></textarea>

            <!-- New File Upload Field -->
            <label for="file-upload">Upload File:</label>
            <input type="file" id="file-upload" name="file-upload" accept=".jpg, .jpeg, .png, .pdf, .doc, .docx, .txt" />

            <button type="submit">Send Message</button>
        </form>

                <!-- Google Map -->
                <div class="google-map-container">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.9999187654335!2d7.009087313943058!3d4.814515896480164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x106a0ba3e96a70f7%3A0xcdbff9344e19f9e4!2s4%20Agudama%20Ave%2C%20D-Line%2C%20Port%20Harcourt!5e0!3m2!1sen!2sng!4v1679325896164!5m2!1sen!2sng" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

     <!-- load your Javascript file here -->
      <script src="js/contactus.js"></script>

</body>
</html>

<?php include('includes/footer.php'); ?>
