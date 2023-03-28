@extends('layouts.dashboard')
@section('dashboardcontent')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mt-5">
                <li class="breadcrumb-item active" aria-current="page">Manage User</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-body">
                @livewire('user.user-create')
            </div>
            @livewire('user.user-table')
        </div>
    </div>
@endsection
@section('script')
<script>
    $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>
@endsection
