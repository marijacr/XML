<!doctype html>
<html lang="hr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pčelarstvo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

</head>
<body style="background-color: #fffef5;">

<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="index.php">
        <i class="fa-solid fa-spa" style="color: white; margin-right: 8px;"></i>
        <span>Pčelice</span>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" href="index.php">Početna</a></li>
        <li class="nav-item"><a class="nav-link" href="pcelari.php">Pčelari</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php
$xml = simplexml_load_file('kosnice.xml');
?>

<div class="container mt-5">
  <h2 class="text-center mb-4">Popis košnica</h2>
  <table class="table table-bordered table-striped">
    <thead class="table-warning">
      <tr>
        <th>Ime</th>
        <th>Prezime</th>
        <th>Godina rođenja</th>
        <th>Lokacija</th>
        <th>Tip košnice</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($xml->pcelar as $pcelar): ?>
        <tr>
          <td><?= $pcelar->ime ?></td>
          <td><?= $pcelar->prezime ?></td>
          <td><?= $pcelar->godiste ?></td>
          <td><?= $pcelar->lokacija ?></td>
          <td><?= $pcelar->kosnica ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <div class="text-center mt-5">
    <?php
    $slika = "img/" . $xml->slike->slika;
    echo '<img src="' . $slika . '" class="img-fluid rounded" alt="Kosnica">';
    ?>
    <p class="mt-3"><strong>Tradicionalna drvena košnica</strong></p>
  </div>
</div>

<footer class="text-center mt-5 mb-3 text-muted">&copy; Marija Crnac 2025.</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
