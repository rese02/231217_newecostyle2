<!DOCTYPE html>
<html lang="de">
<head>
        <?php include 'head.php'; ?>
    <title>Ecostyle</title>
</head>
<body>
    <header>
        <?php include 'menu.php'; ?>
    </header>
    <main>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 mb-4 d-flex flex-column justify-content-center">
                    <h3>Haben Sie Fragen oder Feedback?<br>Wir sind für Sie da!</h3>
                    <p class="mb-4">Vielen Dank für Ihr Interesse an Ecostyle! Wir freuen uns, von Ihnen zu hören. Egal, ob es um Produktinformationen, Bestellungen oder allgemeine Anfragen geht, unser Team steht Ihnen zur Verfügung. Füllen Sie einfach das untenstehende Formular aus oder kontaktieren Sie uns direkt über die angegebenen Kontaktdaten. Wir bemühen uns, Ihnen so schnell wie möglich zu antworten und Ihnen bestmöglich weiterzuhelfen.</p>
                    <h4 class="mt-4">Adresse</h4>
                    <p>Österreich</p>
                    <p>32910 Innsbruck</p>
                    <p>Anichstrasse, 43</p>
                </div>
                <div class="col-md-6 mb-4 d-flex align-items-center">
                    <img src="./img/maps.png" alt="maps" title="maps" class="img-fluid">
                </div>
            </div>

            <form>
                <div class="row mt-4">
                    <div class="col-md-6 mb-4">
                        <label for="inputName">Name</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Name">
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="inputSurname">Nachname</label>
                        <input type="text" class="form-control" id="inputSurname" placeholder="Nachname">
                    </div>
                    <div class="col-md-12 mb-4">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>
                    <div class="col-md-12 mb-4">
                        <label for="inputQuestion">Frage</label>
                        <input type="text" class="form-control" id="inputQuestion" placeholder="Frage">
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Ich akzeptiere die <a href="./datenschutz.php">Datenschutzbestimmungen</a>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a href="" class="btn-brown">Senden</a>
                    </div>
                </div>
            </form>
        </div>
    </main>

        <?php include 'footer.php'; ?>
    <script>function scrollToTop() { window.scrollTo({ top: 0, behavior: 'smooth' });}</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>


            