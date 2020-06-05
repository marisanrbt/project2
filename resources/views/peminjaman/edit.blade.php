@extends('layouts.app')
@section('title', 'Edit Peminjaman')
@section('content')
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h1 class="mt-3">Form Ubah Data Peminjaman Buku</h1>
               
                    <form method="post" action="/peminjaman/{{ $pmjmn->id }}">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Nama Panjang" name="nama"  value="{{ $pmjmn->nama }}">
                            @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Masukkan Username" name="username" value="{{ $pmjmn->username }}">
                            @error('username')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="Masukkan NIM" name="nim" value="{{ $pmjmn->nim }}">
                            @error('nim')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                            <label for="judul_buku">Judul buku</label>
                            <input type="text" class="form-control @error('judul_buku') is-invalid @enderror" id="judul_buku" placeholder="Masukkan Judul Buku" name="judul_buku" value="{{ $pmjmn->judul_buku}}">
                            @error('judul_buku')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                            <label for="nama_penerbit">Nama Penerbit</label>
                            <input type="text" class="form-control @error('nama_penerbit') is-invalid @enderror" id="nama_penerbit" placeholder="Masukkan Nama Penerbit" name="nama_penerbit" value="{{ $pmjmn->nama_penerbit }}">
                            @error('nama_penerbit')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                            <label for="tgl_pinjam">Tanggal peminjaman</label>
                            <div class="input-group date" data-provide="datepicker"  data-date-format="yyyy-mm-dd">
                                <input type="text" class="form-control" name="tgl_pinjam"  value="{{ $pmjmn->tgl_pinjam }}">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-th"></span>
                                    </div>
                            
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                    </form>    

                </div>
            </div>
        </div>

        @endsection
    
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
            
            // var currentdate = new Date(); 
            // var datetime = currentdate.getFullYear()+ "-"
            //     +  (currentdate.getMonth()+1) + "-" 
            //     +  currentdate.getDate() 
            
            $("#datepicker").val(date); 
        });

        $('#datepicker').datepicker({
            dateFormat: 'yy-mm-dd'
        });
    </script>
    </body>
</html>