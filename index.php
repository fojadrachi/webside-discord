<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daddel gadsen</title>
    <!-- Verbessertes Styling -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #303030; /* Hintergrundfarbe grau gemacht */
            margin: 0;
            padding: 20px;
            display: flex; /* Flexbox-Container für Inhalt und Beschreibung */
            justify-content: space-between; /* Zwischen Inhalt und Beschreibung Platz schaffen */
        }
        .discord-widget-container {
            max-width: 400px;
            background-color: #333333; /* Hintergrundfarbe weiß */
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Schatten leichter gemacht */
        }
        .discord-widget-header {
            background-color: #7289da; /* Discord-Blau als Hintergrundfarbe */
            padding: 20px; /* Größerer Abstand oben und unten */
            text-align: center;
            color: #3f3f3f;
            font-weight: bold;
            border-bottom: 2px solid #4e5d94;
            border-radius: 8px 8px 0 0; /* Obere Ecken abgerundet */
        }
        .discord-widget-body {
            padding: 20px; /* Größerer Innenabstand */
        }
        .join-link {
            display: block;
            text-align: center;
            margin-top: 20px; /* Größerer Abstand zum Widget */
            text-decoration: none;
            color: #ffffff;
            background-color: #465db3;
            padding: 12px 24px; /* Größere Schaltfläche */
            border-radius: 25px; /* Runder Button */
            transition: background-color 0.3s ease; /* Fließende Farbänderung */
        }
        .join-link:hover {
            background-color: #4e5d94; /* Dunklere Farbe beim Hovern */
        }
        .description {
            color: #858484; /* Textfarbe auf weiß geändert */
            max-width: 50%; /* Maximale Breite für die Beschreibung */
            padding: 20px; /* Abstand zur Seite und zum Widget */
        }
    </style>
    <!-- Discord-Logo als Favicon -->
    <link rel="icon" type="image/png" href="https://discord.com/assets/2c21aeda16de354ba5334551a883b481.png">
</head>
<body>
    <div class="discord-widget-container">
        <div class="discord-widget-header">
            Willkommen auf daddel gadsen!
        </div>
        <div class="discord-widget-body">
            <iframe src="https://discord.com/widget?id=1232771909603557377&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
            <a href="https://chrisserver.de" class="join-link" target="_blank">daddel gadsen beitreten</a>
        </div>
    </div>
    <!-- Beschreibung neben dem Widget -->
    <div class="description">
        <h2>Willkommen auf daddel gadsen!</h2>
        <p>Dieser server war eigentlich mal eine gruppe aus 5 leuten und jetzt ist das ein server wo einiges passiert</p>
    </div>
    <div>
        <?php
        // IP-Adresse des Besuchers erfassen
        $ip_address = $_SERVER['REMOTE_ADDR'];

        // Aktuelles Datum und Uhrzeit erfassen
        $date_time = date('Y-m-d H:i:s');

        // Datei zum Speichern der IP-Adressen
        $file = 'ip_addresses.txt';

        // Formatieren der Daten zum Speichern
        $data = "IP: $ip_address - Datum/Uhrzeit: $date_time\n";

        // Daten in die Datei schreiben
        file_put_contents($file, $data, FILE_APPEND);

        // IP-Adresse anzeigen
        echo "Deine IP-Adresse ist: $ip_address";
        ?>
    </div>
</body>
</html>
