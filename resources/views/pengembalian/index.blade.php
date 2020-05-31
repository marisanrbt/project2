<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Daftar Pengembalian Buku</title>
  </head>
  <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container">
                <a class="navbar-brand mb-0 h1" href="{{ url('/') }}">Perpustakaan IPB</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="{{ url('/') }}">Beranda</a>
                        <a class="nav-item nav-link" href="{{ url('/peminjaman') }}">Peminjaman</a>
                        <a class="nav-item nav-link" href="{{ url('/pengembalian') }}">Pengembalian</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-7">
                    <h1 class="mt-3">Daftar Pengembalian Buku</h1>

                    <a href="/pengembalian/create" class="btn btn-info my-3">Form Pengembalian Buku</a>

                      @foreach( $pengembalian as $pngmbln )
                        <div class="dropdown" col-7>
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ $pngmbln->nama }}
                                {{ $pngmbln->created_at }}
                            </button>
                            <div class="dropdown-menu p-4 text-muted" style="max-width: 600px;">
                                <p> Nama: {{ $pngmbln->nama }} </p>
                                <p> Nim: {{ $pngmbln->nim }} </p>
                                <p> Judul Buku: {{ $pngmbln->judul_buku }} </p>
                                <p> Penerbit: {{ $pngmbln->nama_penerbit }} </p>
                                <p> Tanggal Pengembalian: {{ $pngmbln->created_at }} </p>
                            </div>
                        </div>
                      @endforeach
                </div>
            </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>