@extends('layouts.main_base')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Profile</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7">
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>
                                <p class="text-muted text-center">Admin</p>
                                <form action="{{ route('admin.update') }}" method="post">
                                    @csrf
                                    @method('PATCH')
                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <div class="form-group">
                                                <label for="link_telegram">Link Telegram</label>
                                                <input id="link_telegram" type="text" class="form-control"
                                                    placeholder="Masukkan link telegram" @error('link_telegram') is-invalid
                                                    @enderror name="link_telegram"
                                                    value="{{ Auth::user()->link_telegram }}" required
                                                    autocomplete="link_telegram" autofocus>
                                                @error('link_telegram')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </li>

                                    </ul>
                                    <button type="submit" class="btn btn-primary btn-block"><b>Apply</b>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>

    </div>
    </div>
@endsection
