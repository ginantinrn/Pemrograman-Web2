@extends('template.index')

@section('content')
    <div class="container-fluid px-2">
        <h2 class="mt-2">Edit Menu</h2>
        <div class="d-flex justify-content-between mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Edit Menu</li>
            </ol>
            <a href="/inventaris_restoran" class="btn btn-warning btn-sm" style="height: 40px;">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form action="/inventaris_restoran/update/{{ $dataInventaris->id }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control"
                            value="{{ $dataInventaris->nama }}" required>
                    </div>
                    <div class="form-group">
                        <label for="kode">Kode</label>
                        <input type="text" name="kode" id="kode" class="form-control"
                            value="{{ $dataInventaris->kode }}" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_barang">Jumlah Barang</label>
                        <input type="number" name="jumlah_barang" id="jumlah_barang" class="form-control"
                            value="{{ $dataInventaris->jumlah_barang }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
