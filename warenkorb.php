<!DOCTYPE html>
<html lang="de">
<head>
    <?php include 'head.php'; ?>
    <title>Ecostyle Shop</title>
</head>
<body>
    <header>
        <?php include 'menu.php'; ?>
    </header>
    <main>
        <?php include 'artikel.php'; ?>
        <div class="container">
            <h1 class="mt-4">Unsere umweltfreundlichen Praktiken</h1>
            <p>Bei Ecostyle steht Nachhaltigkeit im Mittelpunkt unserer Produktion. Wir wählen sorgfältig nachhaltige Stoffe aus, die ethisch und umweltfreundlich hergestellt werden. Unsere kreativen Mitarbeiterinnen setzen ihr handwerkliches Können ein, um Stofftaschen, Stoffmützen und Kleidungsstücke herzustellen, die nicht nur stilvoll, sondern auch umweltfreundlich sind. Wir setzen auf lokale Näherinnen, um die Gemeinschaft zu unterstützen und die Qualität unserer Produkte zu gewährleisten. Jedes Stück wird mit Liebe zum Detail gefertigt, unter Berücksichtigung von Abfallreduzierung und Recycling, um eine nachhaltige Modeoption anzubieten.</p>
            <div class="row">
                <div class="col-3">
                    <img src="img/objekt_1.jpg" alt="">
                    <p>Grüne Eleganz</p>
                    <p>Stilvoll, geräumig und umweltfreundlich – eine Tasche für jeden Anlass.</p>
                </div>
                <div class="col-3">
                    <img src="./img/objekt-2.jpg" alt="">
                    <p>Natürliche Wärme</p>
                    <p>Warme Mütze aus nachhaltigem Material für kalte Tage.</p>
                </div>
                <div class="col-3">
                    <img src="../img/objekt-3.png" alt="">
                    <p>Neuer Look, altes Gewand</p>
                    <p>Einzigartiges Kleid aus recycelten Stoffen – nachhaltige Eleganz.</p>
                </div>
                <div class="col-3">
                    <img src="./img/objekt-4.jpg" alt="">
                    <p>Komfort trifft Nachhaltigkeit</p>
                    <p>Bequemes T-Shirt aus Bio-Baumwolle für umweltbewussten Stil.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <img src="./img/objekt_5.jpg" alt="">
                    <p>Grüne Eleganz</p>
                    <p>Stilvoll, geräumig und umweltfreundlich – eine Tasche für jeden Anlass.</p>
                </div>
                <div class="col-3">
                    <img src="" alt="">
                    <p>Natürliche Wärme</p>
                    <p>Warme Mütze aus nachhaltigem Material für kalte Tage.</p>
                </div>
                <div class="col-3">
                    <img src="" alt="">
                    <p>Neuer Look, altes Gewand</p>
                    <p>Einzigartiges Kleid aus recycelten Stoffen – nachhaltige Eleganz.</p>
                </div>
                <div class="col-3">
                    <img src="" alt="">
                    <p>Komfort trifft Nachhaltigkeit</p>
                    <p>Bequemes T-Shirt aus Bio-Baumwolle für umweltbewussten Stil.</p>
                </div>
            </div>
            <h3>Top seller</h3>
            <div class="row">
                <div class="col-6">
                    <img src="" alt="">
                    <p>Stilvolle Funktionalität</p>
                    <p>Robuster Rucksack aus recycelten Materialien für umweltbewusste Abenteuer.</p>
                </div>
                <div class="col-6">
                    <img src="" alt="">
                    <p>Wärme mit Liebe gemacht</p>
                    <p>Gemütlicher Schal, handgestrickt und nachhaltig – perfekt für kühle Tage.</p>
                </div>
            </div>

            <h3>Unsere umweltfreundlichen Materialien</h3>
            <p>Unsere Produkte entstehen aus umweltfreundlichen Materialien, die sorgfältig ausgewählt und ethisch beschafft werden. Wir verwenden recycelte Stoffe, Bio-Baumwolle und andere nachhaltige Materialien, um die Umweltbelastung zu minimieren. Unsere Produktionsprozesse sind auf Langlebigkeit ausgelegt und fördern einen nachhaltigen Lebenszyklus für unsere Produkte. Wir arbeiten kontinuierlich daran, unsere Herstellungsprozesse zu verbessern, um unseren ökologischen Fußabdruck weiter zu reduzieren und eine nachhaltige Zukunft zu fördern.</p>
            <form id="bestellform">
                <?php for ($i = 0; $i < count($artikel); $i++) { ?>
                    <div class="row">
                        <div class="col-md-3">
                            <p><?php echo $artikel[$i]; ?></p>
                        </div>
                        <div class="col-md-3">
                            <p id='<?php echo 'artikelpreis_' . $i; ?>'><?php echo number_format($preis[$i], 2); ?></p>
                        </div>
                        <div class="col-md-3">
                            <input type="number" value='0' min='0' id='<?php echo 'artikelanzahl_' . $i; ?>'>
                        </div>
                        <div class="col-md-3">
                            <p id='<?php echo 'artikelsumme_' . $i; ?>' class="d-flex justify-content-end">0.00</p>
                        </div>
                    </div>
                <?php } ?>
                <div class="row">
                    <div class="offset-md-9 col-md-3">
                        <p id="nettosumme">0.00</p>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-md-9 col-md-3">
                        <button type="submit" class="btn-brown">Bestellen</button>
                    </div>
                </div>
                <input id="anzahlArtikel" value='<?php echo count($artikel); ?>' hidden>
            </form>
        </div>
        <?php include 'footer.php'; ?>
    </main>
    <script src="js/hausuebung-ecostyle.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>