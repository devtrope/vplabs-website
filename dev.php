<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>VP Lab's - Professeur particulier en mathématiques, physique et chimie</title>
    <link rel="icon" href="public/assets/images/favicon.ico" />
    <link rel="stylesheet" href="public/assets/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
        <navbar class="navbar">
            <div class="navbar-content">
                <img src="public/assets/images/vplabs_full.png" alt="Logo du VP Lab's">
                <div class="navbar-content__links">
                    <a href="https://app.vplabs.fr" class="btn btn-primary"><span class="material-symbols-outlined">person</span>Accéder à la plateforme</a>
                </div>
            </div>
        </navbar>
        <div class="header-content">
            <div class="header-content__text">
                <h1>Dépasse tes limites avec un <span class="blue">accompagnement personnalisé</span></h1>
                <p class="subtitle">Professeur particulier en maths & physique-chimie. J'accompagne les lycées et les collégiens</p>
                <a href="https://app.vplabs.fr" class="btn btn-secondary">Découvrir mes offres</a>
                <a href="https://app.vplabs.fr" class="btn btn-primary">Accéder à la plateforme<span class="material-symbols-outlined">arrow_forward</span></a>
            </div>
        </div>
        <?php $colors = ['', '-blue', '-green', '-orange', '-pink']; ?>
        <?php for ($i = 0; $i < 11; $i++) : ?>
            <?php $color = $colors[rand(0, sizeof($colors) - 1)]; ?>
            <img class="movable" src="public/assets/images/triangle<?= $color ; ?>.png">
        <?php endfor; ?>
    </header>
</body>
</html>