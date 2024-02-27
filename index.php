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
        <div class="container mt-4 mt-md-4 mb-4 mb-md-4">
            <div class="row mt-5 mb-5">
                <div class="col-12">
                    <h1>Handgefertigte Nachhaltigkeit in der Altstadt</h1>
                    <p>Willkommen bei Ecostyle! Unser Geschäft in der malerischen Altstadt von Innsbruck produziert mit lokalen Näherinnen hochwertige und nachhaltige Textilprodukte. Unsere Kollektion umfasst Stofftaschen, Stoffmützen und Kleidungsstücke, die aus sorgfältig ausgewählten, nachhaltigen Stoffen handgefertigt werden. Entdecken Sie unsere einzigartigen Produkte, gefertigt mit Liebe zum Detail und einem Fokus auf Umweltfreundlichkeit.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/foto_2.jpg" class="d-block w-100 img-fluid" style="height: 400px; object-fit: cover;" alt="kleider" title="kleider">
                    </div>
                    <div class="carousel-item">
                        <img src="img/foto_3.jpg" class="d-block w-100 img-fluid" style="height: 400px; object-fit: cover;" alt="kleider" title="kleider">
                    </div>
                    <div class="carousel-item">
                        <img src="img/foto_4.jpg" class="d-block w-100 img-fluid" style="height: 400px; object-fit: cover;" alt="hosen" title="hosen">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-5">
                    <h3>Angebote, die begeistern</h3>
                    <p>Entdecken Sie unseren Online-Shop und lassen Sie sich von unserer nachhaltigen Kollektion inspirieren.</p>
                    <a href="shop.php" class="btn-brown">jetzt Einkaufen</a>
                </div>
            </div>
        </div>

        <div class="bg-image2 container">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-12 text-center">
                        <h4 class="m-4 kundenstimmen">Kundenstimmen über Ecostyle</h4>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-5">
                        <div class="card2 card bg-light p-4 text-center">
                            <p>"Liebe zum Detail"</p>
                            <p>Ecostyle repräsentiert wahre Handwerkskunst. Jedes Detail wird sorgfältig umgesetzt, und man spürt die Liebe, die in jedes Stück fließt.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-5">
                        <div class="card2 card bg-light p-4 text-center">
                            <p>"Nachhaltig und stilvoll"</p>
                            <p>Die Qualität und der Stil von Ecostyle begeistern mich! Jedes Produkt zeigt nicht nur Nachhaltigkeit, sondern auch hervorragendes Handwerk und Design.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-5">
                        <div class="card card2 bg-light p-4 text-center">
                            <p>"Umweltfreundlich und Chic"</p>
                            <p>Die Idee von Ecostyle, lokale Ressourcen zu nutzen, ist bewundernswert. Die Stoffe sind nicht nur umweltfreundlich, sondern auch modisch und vielseitig.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container text-center mt-5">
    <div class="row">
        <div class="col-lg-4 position-relative">
            <i class="fas fa-cubes fa-sm text-primary mb-2"></i>
            <img class="mb-3" src="./img/quality.png" alt="icon" title="icon">
            <h6 class="text-black fw-normal mb-2">High quality</h6>
            <div class="vr vr-blurry position-absolute my-0 h-100 d-none d-md-block top-0 end-0"></div>
        </div>

        <div class="col-lg-4 position-relative">
            <i class="fas fa-layer-group fa-sm text-primary mb-2"></i>
            <img class="mb-3" src="./img/fast.png" alt="icon" title="icon">
            <h6 class="text-black fw-normal mb-2">Fast delivery</h6>
            <div class="vr vr-blurry position-absolute my-0 h-100 d-none d-md-block top-0 end-0"></div>
        </div>

        <div class="col-lg-4 position-relative">
            <img class="mb-3" src="./img/eco.png" alt="icon" title="icon">
            <h6 class="text-black fw-normal mb-2">Ecological</h6>
            <div class="vr vr-blurry position-absolute my-0 h-100 d-none d-md-block top-0 end-0"></div>
        </div>
    </div>
</div>


   
      </main>

        <?php include 'footer.php'; ?>
    <script>function scrollToTop() { window.scrollTo({ top: 0, behavior: 'smooth' });}</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/mdb.umd.min.js"></script>
</body>
</html>