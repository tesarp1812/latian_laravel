<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

    <nav class="navbar navbar-expand bg-dark">
        <ul class="nav">
            <li>
                <a class="nav-link" href="{{url('/beranda')}}">home</a>
            </li>
            <li>
                <a class="nav-link" href="{{url('/data-siswa')}}">Data Siswa</a>
            </li>
            <li>
                <a class="nav-link" href="{{url('/info-kegiatan')}}">Info Kegiatan</a>
            </li>
        </ul>
    </nav>

    <div class="jumbotron text-center">
         <h3>Info Kegiatan</h3>
         <p>Informasi Kegiatan Siswa Bulan Ini :</p>
         <ul>
            <li>10 Agustus - Masa Orientasi Siswa</li>
            <li>17 Agustus - Upacara Bendera</li>
         </ul>
         <p>Informasi Kegiatan Siswa Bulan Ini :</p>
         <ul>
            <li>12 September - Ujian Tengah Semester</li>
         </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>