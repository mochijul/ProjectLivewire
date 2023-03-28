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
            <a href="{{route('dashboard')}}"><li class="nav-link ">Dashboard</li></a>
            @if (in_array(auth()->user()->role->name,["superadmin","admin"]))
            <a href="{{route('manageproduct')}}"><li class="nav-link ">Manage Product</li></a>
            @endif
            @if (in_array(auth()->user()->role->name,["superadmin"]))
                <a href="{{route('manageuser')}}"><li class="nav-link ">Manage User </li></a>
            @endif
        </ul>
        <ul class="navbar-nav ml-auto text-light">
            <li class="nav-item nav-link">{{auth()->user()->email}} as {{auth()->user()->role->name}}</li>
            <li class="nav-item">
                @livewire('component.logout')
            </li>
        </ul>
        </div>
    </nav>
    @yield('dashboardcontent')
@endsection
@yield('script')
