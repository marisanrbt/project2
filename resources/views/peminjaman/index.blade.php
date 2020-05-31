<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Daftar Peminjaman Buku</title>
  </head>
  <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container">
                <a class="navbar-brand" href="#">Perpustakaan IPB</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="/">Beranda</a>
                        <a class="nav-item nav-link" href="/peminjaman">Peminjaman</a>
                        <a class="nav-item nav-link" href="/pengembalian">Pengembalian</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="mt-3">Daftar Peminjaman Buku</h1>
               
                    <a href="/peminjaman/create" class="btn btn-info my-3">Form Peminjaman Buku</a>

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Username</th>
                                <th scope="col">NIM</th>
                                <th scope="col">Judul Buku</th>
                                <th scope="col">Nama Penerbit</th>
                                <th scope="col">Tanggal Peminjaman</th>
                                <th scope="col">Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $peminjaman as $pmjmn )
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $pmjmn->nama }}</td>
                                <td>{{ $pmjmn->username }}</td>
                                <td>{{ $pmjmn->nim }}</td>
                                <td>{{ $pmjmn->judul_buku }}</td>
                                <td>{{ $pmjmn->nama_penerbit }}</td>
                                <td>{{ $pmjmn->created_at }}</td>
                                <td>
                                    <button type="submit" class="badge badge-success">edit</a>
                                    <button type="submit" class="badge badge-danger">delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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