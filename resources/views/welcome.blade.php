@extends('layouts.app')
@section('content')
    <div class="container align-middle">
        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb mt-5 d-flex justify-content-center">
                <h2>Hello, Welcome to this application</h2>
            </ol>
        </nav>
        <p style="text-align: center">already have an account? <a class="mt-4" href="{{ route('login') }}">Login</a></p>


        <p style="text-align: center">don't have an account ? <a class="mt-4" href="{{ route('register') }}">Register</a></p>
        <p style="font-size: 13px">
            <b>User</b> email:user@user.com password:user <br>
            <b>Admin</b> email:admin@admin.com password:admin <br>
            <b>Superadmin</b> email:superadmin@superadmin.com password:superadmin
        </p>
    </div>
@endsection
