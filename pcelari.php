<!doctype html>
<html lang="hr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pčelari</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>
<body style="background-color: #fffdf0;">

<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="index.php">
        <i class="fa-solid fa-spa" style="color: white; margin-right: 8px;"></i>
        <span>Pčelice</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav2">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="nav2">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="index.php">Početna</a></li>
        <li class="nav-item"><a class="nav-link active" href="pcelari.php">Pčelari</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php
$xml = simplexml_load_file('podaciPcelari.xml');
?>

<div class="container mt-5">
  <h2 class="text-center mb-4">Naši pčelari</h2>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <?php foreach ($xml->pcelar as $pcelar): ?>
        <div class="card mb-4 shadow-sm">
          <img src="img/<?= $pcelar->slika ?>" class="card-img-top" alt="<?= $pcelar->ime ?>">
          <div class="card-body">
            <h5 class="card-title"><?= $pcelar->ime ?></h5>
            <p class="card-text"><?= $pcelar->opis ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<footer class="text-center mt-4 mb-3 text-muted">&copy; Marija Crnac 2025.</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
