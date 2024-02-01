<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Security test</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<?php
    include('header.php')
    ?>

    <main>

    <div class="container">

        <!-- Left Column: Information about Cybersecurity Tests -->
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

        <!-- Right Column: Form -->
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

    <?php
    include('footer.php')
    ?>

</body>

</html>