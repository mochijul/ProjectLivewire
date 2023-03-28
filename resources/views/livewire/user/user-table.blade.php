@section('dashboardname')
    ss
@endsection

<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $index => $user)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role->name }}</td>
                    <td class="float-rigt" style=" white-space: nowrap; width: 1%;">
                        <a href="{{route('editeuser',['id'=>$user->id])}}"><button type="button" class="btn btn-default btn-sm" wire:click=""> Edit</button> </a>

                        @if ($confirming === $user->id)
                            <button type="button" class="btn btn-danger btn-sm"
                                wire:click="destroy({{ $user->id }})">Confirm</button>
                            <button type="button" class="btn btn-primary btn-sm"
                                wire:click="destroyAbort()">Abort</button>
                        @else
                            <button type="button" class="btn btn-default btn-sm"
                                wire:click="destroyConfirm({{ $user->id }})" onclick="Livewire.emit('openModal', 'component.modal')">Delete</button>
                        @endif
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
