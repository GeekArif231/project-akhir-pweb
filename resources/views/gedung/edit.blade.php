@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Gedung</h1>

    <!-- Menampilkan pesan sukses atau error -->
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <!-- Formulir untuk mengedit gedung -->
    <form action="{{ route('gedung.update', $gedung->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="nama_gedung">Nama Gedung</label>
            <input type="text" name="nama_gedung" id="nama_gedung" class="form-control @error('nama_gedung') is-invalid @enderror" value="{{ old('nama_gedung', $gedung->nama_gedung) }}" required>
            @error('nama_gedung')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" required>{{ old('deskripsi', $gedung->deskripsi) }}</textarea>
            @error('deskripsi')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="kapasitas">Kapasitas</label>
            <input type="number" name="kapasitas" id="kapasitas" class="form-control @error('kapasitas') is-invalid @enderror" value="{{ old('kapasitas', $gedung->kapasitas) }}" required>
            @error('kapasitas')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="fasilitas">Fasilitas</label>
            <input type="text" name="fasilitas" id="fasilitas" class="form-control @error('fasilitas') is-invalid @enderror" value="{{ old('fasilitas', $gedung->fasilitas) }}" required>
            @error('fasilitas')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="harga_internal">Harga Internal</label>
            <input type="number" name="harga_internal" id="harga_internal" class="form-control @error('harga_internal') is-invalid @enderror" value="{{ old('harga_internal', $gedung->harga_internal) }}" required>
            @error('harga_internal')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="harga_eksternal">Harga Eksternal</label>
            <input type="number" name="harga_eksternal" id="harga_eksternal" class="form-control @error('harga_eksternal') is-invalid @enderror" value="{{ old('harga_eksternal', $gedung->harga_eksternal) }}" required>
            @error('harga_eksternal')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="gambar_gedung">Gambar Gedung</label>
            <input type="file" name="gambar_gedung" id="gambar_gedung" class="form-control @error('gambar_gedung') is-invalid @enderror">
            @error('gambar_gedung')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            @if($gedung->gambar_gedung)
                <p>Gambar saat ini: <img src="{{ asset('storage/' . $gedung->gambar_gedung) }}" alt="gambar gedung" width="100"></p>
            @endif
        </div>

        <div class="form-group">
            <label for="alamat_id">Alamat</label>
            <select name="alamat_id" id="alamat_id" class="form-control @error('alamat_id') is-invalid @enderror" required>
                <option value="">Pilih Alamat</option>
                @foreach ($alamat as $item)
                    <option value="{{ $item->id }}" {{ old('alamat_id', $gedung->alamat_id) == $item->id ? 'selected' : '' }}>{{ $item->nama_jalan }}</option>
                @endforeach
            </select>
            @error('alamat_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
