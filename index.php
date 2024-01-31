<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Web Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h1>Your Website Name</h1>
    </header>

    <nav>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
    </nav>

    <!-- Main Image Section -->
    <div class="main-image">
    <div class="image-overlay">
        <h2>Security Cybercrime Test Site</h2>
        <p>Discover our website to see what we can do for you!</p>
    </div>
</div>

    <!-- Grid Section -->
    <div class="grid-container">
    <div class="grid-item">
        <h2>Cyber Crime Costs</h2>
        <p>Cybercrime is prediced to cost $8 trillion in 2023.</p>
    </div>
    <div class="grid-item">
        <h2>Data Breach</h2>
        <p>Over 33 billion records will be stolen by cyber criminals by 2023.</p>
    </div>
    <div class="grid-item">
        <h2>Cyber Attacks</h2>
        <p>Cyber attacks happen once every 39 seconds.</p>
    </div>
    <div class="grid-item">
        <h2>Data Privacy</h2>
        <p>47% of American adults have had their personal information exposed.</p>
    </div>
</div>

    <!-- FAQ Section -->
    <div class="faq-container">
        <h2>Frequently Asked Questions</h2>
        <?php include('faq-content.php'); ?>
    </div>

    <footer class="footer">
    <!-- Additional Elements -->
    <div class="footer-icons">
        <a href="#" target="_blank">Facebook</a>
        <a href="#" target="_blank">Twitter</a>
        <a href="#" target="_blank">Instagram</a>
        <!-- Add more social media icons as needed -->
    </div>

    <p>&copy; 2024 Your Website Name. All rights reserved. | Designed by <a href="https://www.yourdesigner.com" target="_blank">Your Designer</a></p>
    </footer>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var faqQuestions = document.querySelectorAll('.faq-question');

        faqQuestions.forEach(function(question) {
            var answer = question.nextElementSibling;
            answer.style.display = 'none'; // Close all answers by default

            question.addEventListener('click', function() {
                this.classList.toggle('active');
                if (answer.style.display === 'block' || answer.style.display === '') {
                    answer.style.display = 'none';
                } else {
                    answer.style.display = 'block';
                }
            });
        });
    });
</script>


</body>

</html>
