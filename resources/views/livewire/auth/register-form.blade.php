<div style="padding-top: 10%;">
    <div class="container" style="">
        <form class="form-signin" style="line-height: 1.5;
        text-align: center!important;
        box-sizing: border-box;
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
        " wire:submit.prevent="store">
            @if (session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72" >
            <h1 class="h3 mb-3 font-weight-normal">Please register</h1>
            <label for="inputName" class="sr-only ">Name</label>
            <input type="Name" id="inputName" class="form-control mb-2" placeholder="Name" required="" autofocus=""  value=""  wire:model="name">
            @error('name')
            {{$message}}
            @enderror
            <label for="inputEmail" class="sr-only ">Email address</label>
            <input type="email" id="inputEmail" class="form-control mb-2 " placeholder="Email address" value="" wire:model='email'>
            @error('email')
            {{$message}}
            @enderror
            <label for="inputPassword" class="sr-only ">Password</label>
            <input type="password" id="inputPassword" class="form-control mb-2" placeholder="Password" required="" wire:model='password'>
            @error('password')
            {{$message}}
            @enderror
            <label for="inputRetypePassword" class="sr-only ">Retype Password</label>
            <input type="password" id="inputRetypePassword" class="form-control mb-2" placeholder="RetypePassword" required="" wire:model='password_confirmation'>
            @error('password_confirmation')
            {{$message}}
            @enderror
            <label for="inputRetypePassword" class="sr-only ">Role</label>
            <select class="form-control mb-2" wire:model='role_id'>
                <option value="" selected active>Select your option..</option>
                @foreach ($roles as $role)
                <option value="{{$role->id}}">{{$role->name}}</option>
                @endforeach
            </select>
            @error('roleid')
            {{$message}}
            @enderror


            <button class="btn btn-lg btn-primary btn-block mt-3 mb-3" type="submit">Sign up</button>
            <span>
                already have an account? <a class="mt-4" href="{{route('login')}}">Login</a>
            </span>
        </form>
    </div>
</div>
