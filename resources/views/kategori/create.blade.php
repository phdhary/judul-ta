@extends('layouts.main_base')

@section('content')
    <div class="content-wrapper">

        <!-- general form elements -->
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Tambah Kategori</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('kategori.store') }}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="deskripsi">Nama</label>
                        <input id="nama" type="text" class="form-control" placeholder="Masukkan nama"
                            @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}"
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
