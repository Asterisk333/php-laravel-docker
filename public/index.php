<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lebenslauf</title>
    <link rel="stylesheet" href="style/styles.css">
    <script>
    function displayThankYouMessage(event) {
         event.preventDefault(); // Prevent the default form submission
            const formData = new FormData(event.target);

            fetch('submit_form.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .catch(error => {
                console.error('Error:', error);
            });

        document.getElementById('thank-you-message').style.display = 'block';
        document.querySelector('form').reset();
    }
</script>
</head>
<body>
<header>
    <h1>Sean Kessi</h1>
    <img src="img/portrait.png" alt="Portrait von Max Mustermann">
</header>
<section id="personal-info">
    <h2>Persönliche Daten</h2>
    <p>Adresse: <span>Meine Strasse 33, 9999 Ortschaft</span></p>
    <p>Telefon: <span><a href="tel:+41123456789">123456789</a></span></p>
    <p>Email: <span><a href="mailto:demo@mail.ch?subject=Kontakt aufnehmen">demo@mail.ch</a></span></p>
    <p>Geburtsdatum: <span>01.01.2024</span></p>
    <p>Nationalität/Heimatort: <span>Schweiz/Heimatort</span></p>
</section>
<section id="experience">
    <h2>Berufserfahrung</h2>
    <ul>
        <li><p><strong>IT-Supporter</strong> bei Rado Switzerland (06.2023 - heute)</p></li>
        <li><p><strong>Backend Developer</strong> bei Fruitcake W+P AG (08.2022 - 05.2023)</p></li>
        <li><p><strong>Lehrender</strong> bei Eta SA (08.2018 - 07.2022)</p></li>
    </ul>
</section>
<section id="education">
    <h2>Ausbildung</h2>
    <ul>
        <li><p><strong>Informatiker HF</strong>, Höhere Fachschule Mittel-Land (2023 - heute)</p></li>
        <li><p><strong>Cloud-native, DevOps und Container – Vorkurs</strong>, Technische Berufsschule Zürich TBZ (2022 - 2023)</p></li>
    </ul>
</section>
<section id="skills">
    <h2>Sonstige Skills</h2>
    <ul>
        <li><p>Programmierung in PowerShell, Python</p></li>
        <li><p>Backendentwicklung mit PHP, WordPress & ProcessWire</p></li>
        <li><p>System: Virtualisierung, Cloud, Netzwerk Management</p></li>
    </ul>
</section>
<section id="languages">
    <h2>Sprachkenntnisse</h2>
    <ul>
        <li><p><strong>Deutsch</strong>, Muttersprache</p></li>
        <li><p><strong>Englisch</strong>, Kenntnisse mündlich und schriftlich, First Certificate in English B2</p></li>
        <li><p><strong>Französisch</strong>, Kenntnisse mündlich</p></li>
    </ul>
</section>
<section id="contact">
    <h2>Kontakt</h2>
    <p id="thank-you-message" style="display:none;">Vielen Dank für Ihre Nachricht!</p>
    <form onsubmit="displayThankYouMessage(event)">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="message">Nachricht:</label>
        <textarea id="message" name="message" required></textarea>
        <button type="submit">Senden</button>
    </form>
</section>
</body>
</html>
