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

    <main>

    <div class="info">
        <div class="box">
            <div class="box-title">Waarom een cybersecurity-test</div>
            <div class="box-text">
                <p>Het uitvoeren van een cybersecurity-test is van vitaal belang voor bedrijven, vooral nu cybercriminaliteit een groeiend probleem is, met name voor kleine bedrijven. Deze tests, zoals penetratietests, stellen organisaties in staat potentiële zwakke punten in hun systemen en beveiligingsmaatregelen te identificeren. Door proactief beveiligingsmaatregelen te evalueren, kunnen bedrijven kwetsbaarheden opsporen en aanpakken voordat kwaadwillende actoren dat doen.</p>
            </div>
        </div>

        <div class="box">
            <div class="box-title">Wat is een cybersecurity-test</div>
            <div class="box-text">
                <p>Onze cybersecuritytest biedt een grondige beoordeling van uw bedrijfsbeveiliging tegen cybercriminaliteit, inclusief phishing, hacking en e-mailfraude. Na de test ontvangt u een gedetailleerd rapport met geïdentificeerde zwakke plekken en praktische verbeteringsaanbevelingen. Ons ervaren team simuleert potentiële bedreigingen om proactief zwakke punten bloot te leggen, zodat u tijdig maatregelen kunt nemen. We begeleiden u bij het implementeren van verbeteringen, zoals personeelstraining, software-updates en actuele veiligheidsprotocollen.</p>
            </div>
        </div>

        <div class="box">
            <div class="box-title">Wie voert de cybersecurity-test uit</div>
            <div class="box-text">
                <p>Verschillende ervaren pentesters en/of bedrijven die zorgvuldig zijn geselecteerd door ons, nemen de verantwoordelijkheid op zich om uitgebreide cybersecuritytests uit te voeren voor uw bedrijf. Deze professionals voeren hun taken met de grootst mogelijke nauwkeurigheid uit, waarbij ze rekening houden met de waarborging van uw privacy. Het proces omvat een grondige analyse van de beveiligingsinfrastructuur van uw organisatie.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <h2>Cybersecurity test</h2>

        <?php include('insert_data.php'); ?>

        <?php
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Collect form data
            $email = $_POST["email"];
            $firstName = $_POST["firstName"];
            $lastName = $_POST["lastName"];
            $companyName = $_POST["companyName"];
            $websiteUrl = $_POST["websiteUrl"];

            // Display the collected data
            echo "<p>Email: $email</p>";
            echo "<p>First Name: $firstName</p>";
            echo "<p>Last Name: $lastName</p>";
            echo "<p>Company Name: $companyName</p>";
            echo "<p>Website URL: $websiteUrl</p>";
        }
        ?>

        <form action="#" method="post">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" required>

            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" required>

            <label for="companyName">Company Name:</label>
            <input type="text" id="companyName" name="companyName">

            <label for="websiteUrl">Website URL:</label>
            <input type="url" id="websiteUrl" name="websiteUrl">

            <button type="submit">Submit</button>
        </form>
    </div>
    
    </main>

    <footer>
        &copy; 2024 Your Website Name. All rights reserved.
    </footer>

</body>

</html>