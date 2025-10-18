<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Laravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/mahasiswa">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/profile">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
        </li>
        </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container">
  <h1>Ini adalah halaman Mahasiswa</h1>

  {{--
    ROWSPAN = untuk menggabungkan baris
    COLSPAN = untuk menggabungkan kolom
    --}}

  <table class="table table-danger table-sm table-hover table-striped table-bordered 
  text-center">
    <thead>
      <tr>
        <th>NPM</th>
        <th>Nama Mahasiswa</th>
        <th>Jenis Kelamin</th>
        <th colspan="2">TTL</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>0702232100</td>
        <td>Silvi Rahmawati</td>
        <td>Perempuan</td>
        <td>14-07-2005</td>
        <td rowspan="4">Tegal</td>
      </tr>
      <tr>
        <td>0702232101</td>
        <td>Fira Alifia Putri</td>
        <td>Perempuan</td>
        <td>16-07-2017</td>
      </tr>
      <tr>
        <td>0702232102</td>
        <td>Uswatun Hasanah</td>
        <td>Perempuan</td>
        <td>15-07-2020</td>
      </tr>
      <tr>
        <td>0702232103</td>
        <td>Rasheed Al Ghifari Akbar</td>
        <td>Laki-Laki</td>
        <td>05-08-2025</td>
      </tr>
    </tbody>
  <table>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>