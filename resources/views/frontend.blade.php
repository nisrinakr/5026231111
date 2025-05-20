<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tugas Pertemuan 11</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container text-center mt-5">
  <h3>Frontend</h3>
  <p class="text-muted">Tugas Pertemuan 11</p>

  <div class="link-buttons mt-4">
    <a href="{{ url('pertama') }}" class="btn btn-outline-success btn-block mb-3">Pertama</a>
    <a href="{{ url('bootstrap1') }}" class="btn btn-outline-success btn-block mb-3">Bootstrap 1</a>
    <a href="{{ url('bootstrap2') }}" class="btn btn-outline-success btn-block mb-3">Bootstrap 2</a>
    <a href="{{ url('homepage-teknisi') }}" class="btn btn-outline-success btn-block mb-3">Homepage Teknisi</a>
    <a href="{{ url('linktree') }}" class="btn btn-outline-success btn-block mb-3">Linktree</a>
    <a href="{{ url('js1') }}" class="btn btn-outline-success btn-block mb-3">js1</a>
    <a href="{{ url('js2') }}" class="btn btn-outline-success btn-block mb-3">js2</a>
    <a href="{{ url('ets') }}" class="btn btn-outline-success btn-block mb-3">ETS</a>



  </div>
</div>

</body>

<style>
    body {
  background-color: #78e1ba;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.container {
  max-width: 400px;
  background: rgb(214, 255, 236);
  padding: 30px;
  border-radius: 15px;
  box-shadow: 0 0 20px rgba(0,0,0,0.1);
}

</style>
</html>
