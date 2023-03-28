@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="" class="rounded" style="border:solid white 1px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-light" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-link ">Dashboard</li>
            <li class="nav-link ">Product</li>
            <li class="nav-link ">Manage User</li>
        </ul>
        <ul class="navbar-nav ml-auto text-light">
            <li class="nav-item">
            <a class="nav-link " href="#">Logout</a>
            </li>
        </ul>
        </div>
    </nav>
    @yield('dashboardcontent')

@endsection
@yield('script')
