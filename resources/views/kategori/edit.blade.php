@extends('layouts.main_base')

@section('content')
    <div class="content-wrapper">

        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Ubah data Kategori</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('kategori.update', $kategori) }}">
                @csrf
                @method('PATCH')
                <div class="card-body">
                    <div class="form-group">
                        <label for="kategori">Nama</label>
                        <input id="nama" type="text" class="form-control" placeholder="Masukkan Nama nama"
                            @error('nama') is-invalid @enderror" name="nama" value="{{ $kategori->nama }}"
                            required autocomplete="nama" autofocus>
                        @error('nama')
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
