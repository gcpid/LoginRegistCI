<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar</title>

    <!-- Bootstrap core CSS -->
<link href="/assets/css/bootstrap.css" rel="stylesheet">

    <!-- Favicons -->
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<meta name="theme-color" content="#7952b3">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link href="/assets/css/login.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
    <?php if(session()->getFlashData('sukses')):?>
        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
  <div class="card-header">Informasi</div>
  <div class="card-body">
    <h5 class="card-title">Success</h5>
    <p class="card-text"><?= session()->getFlashData('sukses') ?></p>
  </div>
</div>
<?php endif;?>
  <form action="" method="post">
      <?= csrf_field()?>
    <h1 class="h3 mb-3 fw-normal">Daftar</h1>
    <div class="form-floating">
      <input type="text" name="fullname" class="form-control" id="inifullname" placeholder="Masukan nama lengkap">
      <label for="inifullname">Nama Lengkap</label>
    </div>
    <div class="form-floating">
      <input type="text" name="username" class="form-control" onkeypress="return event.charCode != 32" id="iniusername" placeholder="Username">
      <label for="iniusername">Username</label>
    </div>
    <div class="form-floating">
      <input type="email" name="email" class="form-control" id="iniemail" placeholder="name@example.com">
      <label for="iniemail">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="inipw" placeholder="Password">
      <label for="inipw">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Daftar</button>
  </form>
</main>
  </body>
  <script src="/assets/js/bootstrap.js"></script>
</html>