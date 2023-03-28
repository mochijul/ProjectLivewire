<div>
    <form class="" wire:submit.prevent="store">
        <div class="container" style="">
            <label for="inputName" class="sr-only ">Name</label>
            <input type="Name" id="inputName" class="form-control mb-2" placeholder="Name" required="" autofocus=""
                value="" wire:model="name" autocomplete="false">
            @error('name')
                {{ $message }}
            @enderror
            <label for="inputEmail" class="sr-only ">Email address</label>
            <input type="email" id="inputEmail" class="form-control mb-2 is-invalid" placeholder="Email address"
                value="" wire:model='email' autocomplete="false">
            @error('email')
                {{ $message }}
            @enderror

            <label for="inputPassword" class="sr-only ">Password</label>
            <input type="password" id="inputPassword" class="form-control mb-2" placeholder="Password" required=""
                wire:model='password' autocomplete="false">
            @error('password')
                {{ $message }}
            @enderror

            <label for="inputRetypePassword" class="sr-only ">Retype Password</label>
            <input type="password" id="inputRetypePassword" class="form-control mb-2" placeholder="RetypePassword"
                required="" wire:model='password_confirmation' autocomplete="false">
            @error('password_confirmation')
                {{ $message }}
            @enderror

            <label for="inputRetypePassword" class="sr-only ">Role</label>
            <select class="form-control mb-2" wire:model='roleid'>
                <option value="" selected active>Select your option..</option>
                @foreach ($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
            </select>
            @error('roleid')
                {{ $message }}
            @enderror
            <button class="btn btn-primary btn-block mt-3 mb-3" type="submit" wire:key>Add User</button>


        </div>
    </form>
</div>
