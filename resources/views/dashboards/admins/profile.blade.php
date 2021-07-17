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
                    <div class="col-md-3">
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>
                                <p class="text-muted text-center">Admin</p>
                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Link Telegram</b> <a class="float-right">{{ Auth::user()->link_telegram }}</a>
                                    </li>
                                </ul>
                                <a href="{{ route('admin.settings') }}" class="btn btn-primary btn-block"><b>Edit
                                        Profile</b>
                                </a>
                                <br>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-block"><b>Log Out</b>
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
