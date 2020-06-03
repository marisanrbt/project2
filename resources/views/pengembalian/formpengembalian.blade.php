<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.standalone.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.standalone.min.css">

    <title>Form Pengembalian Buku</title>
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
                <div class="col-8">
                    <h1 class="mt-3">Form Pengembalian Buku</h1>
               
                    <form method="post" action="/pengembalian/{{ $pngmbln->id }}>
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" readonly="true" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Nama Panjang" name="nama" value="{{ $pngmbln->nama }}">
                            @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text"  readonly="true" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Masukkan Username" name="username" value="{{ $pngmbln->username }}">
                            @error('username')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" readonly="true" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="Masukkan NIM" name="nim" value="{{ $pngmbln->nim }}">
                            @error('nim')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                            <label for="judul_buku">Judul buku</label>
                            <input type="text" readonly="true" class="form-control @error('judul_buku') is-invalid @enderror" id="judul_buku" placeholder="Masukkan Judul Buku" name="judul_buku" value="{{ $pngmbln->judul_buku }}">
                            @error('judul_buku')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                            <label for="nama_penerbit">Nama Penerbit</label>
                            <input type="text" readonly="true" class="form-control @error('nama_penerbit') is-invalid @enderror" id="nama_penerbit" placeholder="Masukkan Nama Penerbit" name="nama_penerbit" value="{{ $pngmbln->nama_penerbit }}">
                            @error('penerbit')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group ">
                            <label for="tgl_kembali">Tanggal Dikembalikan</label>
                            <div class="input-group date"  data-provide="datepicker"  data-date-format="yyyy-mm-dd">
                                <input type="text" class="form-control" name="tgl_kembali"  value="{{ $pngmbln->tgl_kembali }}">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-th"></span>
                                    </div>                
                           </div>
                        </div>                    
                        <button type="submit" class="btn btn-primary">Selesai</button>
                    </form>    

                </div>
            </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <script>
        $( document ).ready(function() {

            console.log( "ready!" );
            var myDate = new Date(); 
            var date =myDate.getFullYear() + '-' + ("0" +(parseInt(myDate.getMonth()) + 1)) + '-' + ('0'+ myDate.getDate()).slice(-2)  ;
            
            $("#datepicker").val(date); 
        });

        $('#datepicker').datepicker({
            dateFormat: 'dd-mm-yy'
        });
    </script>

  </body>
</html>