<!DOCTYPE html>

<head>
    <title>Latihan Bootstrap</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/styleku.css" type="text/css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container-fluid">
                <a href="" class="navbar-brand">Dashboard</a>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="jumbotron text-center">
            <h1>Dashboard</h1>
            <?= d($_SESSION)?>
        </div>
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
  </ol>
</nav>
<div class="card text-center">
  <div class="card-header">
    Selamat Datang <?= $data[0]->fullname?>
  </div>
  <div class="card-body">
    <h5 class="card-title">Username anda adalah : <?= $data[0]->username?></h5>
    <p class="card-text">Ini tutorial pertemuan ke-2 membuat halaman Register dan Login dengan Codeigniter 4</p>
    <a href="<?= base_url()?>" class="btn btn-primary">Home</a>
  </div>
  <div class="card-footer text-muted">
    akun dibuat tanggal <?= date('d', strtotime($data[0]->created_at))?> <?= date('M', strtotime($data[0]->created_at))?> <?= date('y', strtotime($data[0]->created_at))?>
  </div>
</div>
    </div>
</body>
<script src="/assets/js/bootstrap.js"></script>

</html>