@extends('layouts.dashboard')
@section('dashboardcontent')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mt-5">
                <li class="breadcrumb-item active" aria-current="page"> <a href="{{route('manageuser')}}">Manage User</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-body">
                @livewire('user.user-edit',['user'=>$user])
            </div>
        </div>
    </div>
@endsection
@section('script')

@endsection
