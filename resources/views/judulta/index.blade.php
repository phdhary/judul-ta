@extends('layouts.main_base')

@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Judul TA</h1>
                    </div>
                   
                </div>
            </div>
            <!-- /.container-fluid -->
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <a class="btn btn-block btn-primary" href="{{ route('judulta.create') }}">Tambah
                                        Judul TA</a>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Nama Judul</th>
                                                <th>Deskripsi</th>
                                                <th>Nama Dosen</th>
                                                <th>Mahasiswa</th>
                                                <th>Kategori</th>
                                                <th>Link Telegram</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($judultas as $judulta)

                                                <tr>
                                                    <td>{{ $judulta->nama_judul }}</td>
                                                    <td>{{ $judulta->deskripsi }}</td>
                                                    <td>{{ $judulta->nama_dosen }}</td>
                                                    <td>{{ $judulta->user->name }}</td>
                                                    <td>{{ $judulta->kategori->nama }}</td>
                                                    <td>{{ $judulta->user->link_telegram }}</td>
                                                    <td>
                                                        <a class="btn btn-block btn-success"
                                                            href="{{ route('judulta.edit', $judulta) }}">
                                                            <span class="fas fa-edit"></span>
                                                        </a>
                                                        <form action="{{ route('judulta.destroy', $judulta) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-block btn-danger btn-sm" type="submit">
                                                                <span class="fas fa-trash"></span>
                                                            </button>

                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Nama Judul</th>
                                                <th>Deskripsi</th>
                                                <th>Nama Dosen</th>
                                                <th>Mahasiswa</th>
                                                <th>Kategori</th>
                                                <th>Link Telegram</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
        </section>
    </div>
@endsection
