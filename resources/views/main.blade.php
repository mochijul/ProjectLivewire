@extends('layouts.dashboard')
@section('dashboardcontent')
    <div class="container">

        <div class="card mt-5">
            <div class="card-body">
                <h2>Selamat datang di web pengelolaan barang kami!

                </h2>
                <p>Kami adalah platform pengelolaan barang yang bertujuan untuk memberikan solusi yang efektif dan efisien
                    untuk semua kebutuhan pengelolaan barang Anda. Dengan berbagai fitur canggih yang kami sediakan, Anda
                    dapat dengan mudah mengelola dan melacak inventaris Anda, menghemat waktu dan usaha Anda dalam mengatur
                    barang.</p>
                {{-- @livewire('user.user-create') --}}
            </div>
            {{-- @livewire('user.user-table') --}}
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('#myModal').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })
    </script>
@endsection
