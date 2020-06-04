
@extends('layout.main')
@section('title', 'Form Pengembalian')
@section('container')
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h1 class="mt-3">Form Pengembalian Buku</h1>
               
                    <form method="post" action="/pengembalian/{{ $pngmbln->id }}">
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
                            @error('nama_penerbit')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                            <label for="tgl_pinjam">Tanggal Peminjaman</label>
                            <input type="text" readonly="true" class="form-control @error('tgl_pinjam') is-invalid @enderror" id="tgl_pinjam" name="tgl_pinjam" value="{{ $pngmbln->tgl_pinjam }}">
                            @error('tgl_pinjam')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group ">
                            <label for="tgl_kembali">Tanggal Pengembalian</label>
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
        @endsection