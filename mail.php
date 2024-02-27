<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/PHPMailer/Exception.php';
require 'src/PHPMailer/PHPMailer.php';
require 'src/PHPMailer/SMTP.php';

$images = ["./img/objekt-1.png", "i./img/objekt-2.png", "./img/objekt-3.png", "./img/objekt-6.png", "<div class="">
<img src="" alt="">
<objekt-7></objekt-7>.png", "./img/objekt-8.png", "./img/objekt-9.png", "./img/objekt-10.png", "./img/objekt-4.png", "./img/objekt-5.png",];
$artikel = ["tasche", "muetze", "kleid ", "tshirt", "schuertze", "beutel ", "decke", "pygiama", "rucksack", "schal"];
$preis = [90.00, 30.00, 30.00, 30.00, 40.00, 15.00, 30.00, 50.00, 60.00, 35.00];


if (isset($_POST['submit'])) {

    $selectedItems = $_POST['artikelanzahl'];

    $selectedItemsHtml = '';

    foreach ($_POST['artikelanzahl'] as $index => $anzahl) {
        if ($anzahl > 0) {
            $artikelName = $artikel[$index];
            $artikelimages = $images[$index];
            $artikelpreis = $preis[$index];
            $selectedItemsHtml .= "<img src='" . $artikelimages . "' alt='" . $artikelName . "'><br>"
                . $artikelName . " - Menge: " . $anzahl . " - Preis Einzeln: " . number_format($artikelpreis, 2, ',', '.') . " €<br><br>";
        }
    }




    $vorname = htmlspecialchars($_POST['vorname']);
    $nachname = htmlspecialchars($_POST['nachname']);
    $email = htmlspecialchars($_POST['email']);
    $tele = htmlspecialchars($_POST['tele']);
    $address = htmlspecialchars($_POST['address']);
    $city = htmlspecialchars($_POST['city']);
    $postal = htmlspecialchars($_POST['postal-code']);
    $nachricht = htmlspecialchars($_POST['nachricht']);
    $gesamtsumme = $_POST['gesamtsumme'];
    $versandoption = htmlspecialchars($_POST['shipping']);
    $versandtext = $versandoption === 'liefern' ? 'Lieferung' : 'Im Geschäft abholen';
}
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>DANKE</title>
</head>


<body>
    <?php
    // E-Mail-Versand
    if (isset($_POST['submit'])) {
        $mail = new PHPMailer(true);
        $mail->CharSet = 'utf-8';
        $mail->setLanguage('de');
        $mail->isSMTP();
        $mail->Host = "securemail-wda-innsbruck-at.prossl.de";
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "tls";
        $mail->Port = 587;
        $mail->Username = "wiastud-newsletter";
        $mail->Password = "45YerkaidaAsaef5Kiap";
        $mail->From = "stud-newsletter@wda-innsbruck.at";
        $mail->FromName = "Eco Style";

        $mail->addAddress($email, $vorname . " " . $nachname);
        $mail->addAddress('senonerrene@hotmail.com', "Rene Senoner");

        $mail->isHTML(true);
    }
        $mail->Subject = "Vielen Dank für Ihre Bestellung bei Eco Style";

        $mail->Body =
            <div style='background-color: #f2f2f2; padding: 20px; border-radius: 10px;'>
                <h1 style='color: #8B786A; text-align: center; padding-bottom: 10px;'>Vielen Dank für Ihre Bestellung bei Eco Style!</h1>
                <p style='font-size: 16px; text-align: justify;'>
                    Sehr geehrte(r) $vorname $nachname,
                </p>
                <p style='font-size: 16px; text-align: justify;'>
                    wir möchten uns herzlich für Ihre Bestellung bei Eco Style bedanken. Wir haben alle wichtigen Informationen für Sie zusammengefasst. Bitte überprüfen Sie die unten stehenden Details Ihrer Bestellung. Bei Fragen oder Unklarheiten stehen wir Ihnen gerne zur Verfügung.
                </p>
                <hr style='border: 1px solid #8B786A; margin: 20px 0;'>
                <h2>Ihre Bestelldetails:</h2>
                <p><strong>Name:</strong> $vorname $nachname</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Telefonnummer:</strong> $tele</p>
                <p><strong>Adresse:</strong> $address, $postal $city</p>
                <h2>Ihre Produkte:</h2>
                $selectedItemsHtml
                <h2>Versandoption:</h2>
                <p>$versandoption</p>
                <h2>Gesamtsumme:</h2>
                <p>$gesamtsumme €</p>
                <p style='font-size: 16px; text-align: justify;'>
                    Wir werden Ihre Bestellung so schnell wie möglich bearbeiten. Sie erhalten eine Versandbestätigung per E-Mail, sobald Ihre Lieferung versandt wurde. Vielen Dank für Ihr Vertrauen in Eco Style. Wir freuen uns darauf, Sie bald wieder begrüßen zu dürfen!
                </p>
              </div>;

        try {
            $mail->send();
            echo '<h1>Danke</h1><h2>Wir melden uns bei Ihnen ' . $vorname . ' ' . $nachname . '</h2>';
        } catch (Exception $ex) {
            echo 'Oh! Es scheint ein Fehler passiert zu sein.' . $mail->ErrorInfo;
        }

        
    ?>
</body>

</html>
