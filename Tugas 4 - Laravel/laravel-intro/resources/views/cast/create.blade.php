@extends('layout.master')
@section('judul')
    Tambah Cast
@endsection

@section('content')
    <form action="/cast" method="POST">
        @csrf
        <div class="form-group">
            <label >Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Cast">
            @error('nama')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Umur</label>
            <input type="text" class="form-control" name="umur" placeholder="Masukkan Umur">
            @error('umur')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Bio</label>
            <textarea name="bio" id="" class="form-control" cols="30" rows="10"></textarea>
            @error('bio')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
@endsection