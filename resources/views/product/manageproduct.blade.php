@extends('layouts.dashboard')
@section('dashboardcontent')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mt-5">
                <li class="breadcrumb-item active" aria-current="page">Manage Product</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-body">
                <table class="table table-stripedtable-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>SKU</th>
                            <th>Stock</th>
                            <th>Harga</th>
                        </tr>
                        </thead>
                        <tbody>
                            @for ($i=0;$i<=5;$i++)
                            <tr>
                                <td scope="row">{{$i+1}}</td>
                                <td>Barang</td>
                                <td>SKU</td>
                                <td>Stock</td>
                                <td>Harga</td>
                            </tr>
                            @endfor
                        </tbody>
                </table>
                {{-- @livewire('user.user-create') --}}
            </div>
            {{-- @livewire('user.user-table') --}}
        </div>
    </div>
@endsection
@section('script')
@endsection
