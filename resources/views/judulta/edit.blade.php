@extends('layouts.main_base')

@section('content')
    <div class="content-wrapper">

        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Ubah data Judul TA</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('judulta.update', $judulta) }}">
                @csrf
                @method('PATCH')
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama_judul">Nama Judul</label>
                        <input id="nama_judul" type="text" class="form-control" placeholder="Masukkan nama judul"
                            @error('nama_judul') is-invalid @enderror" name="nama_judul"
                            value="{{ $judulta->nama_judul }}" required autocomplete="nama_judul" autofocus>
                        @error('nama_judul')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <input id="deskripsi" type="text" class="form-control" placeholder="Masukkan Deskripsi"
                            @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{ $judulta->deskripsi }}"
                            required autocomplete="deskripsi" autofocus>
                        @error('deskripsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Kategori</label>
                        <select id="kategori" class="form-control" @error('kategori') is-invalid @enderror" name="kategori">
                            @foreach ($kategoris as $kategori)
                                <option {{ $judulta->kategori->nama == $kategori->nama ? 'selected' : '' }}>
                                    {{ $kategori->nama }}
                                </option>

                            @endforeach
                        </select>
                        @error('kategori')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Mahasiswa</label>
                        <select id="user" class="form-control" @error('user') is-invalid @enderror" name="user">
                            @foreach ($users as $user)
                                <option {{ $judulta->user->name == $user->name ? 'selected' : '' }}>
                                    {{ $user->name }}</option>

                            @endforeach
                        </select>
                        @error('user')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nama_dosen">Nama Dosen</label>
                        <input id="nama_dosen" type="text" class="form-control" placeholder="Masukkan Nama Dosen"
                            @error('nama_dosen') is-invalid @enderror" name="nama_dosen"
                            value="{{ $judulta->nama_dosen }}" required autocomplete="nama_dosen" autofocus>
                        @error('nama_dosen')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </div>
@endsection
