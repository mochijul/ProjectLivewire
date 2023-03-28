<div style="padding-top: 10%;">
    <div class="container" style="">
        <form class="form-signin" style="line-height: 1.5;
        text-align: center!important;
        box-sizing: border-box;
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
        " wire:submit.prevent="authlogin">

            <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Please log in</h1>
            @if (session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <label for="inputEmail" class="sr-only ">Email address</label>
            <input type="email" id="inputEmail" class="form-control mb-2 is-invalid" placeholder="Email address" required=""  wire:model='email'>
            @error('email')
            {{$message}}
            @enderror
            <label for="inputPassword" class="sr-only ">Password</label>
            <input type="password" id="inputPassword" class="form-control mb-2" placeholder="Password" required="" wire:model='password'>
            @error('password')
            {{$message}}
            @enderror
            <button class="btn btn-lg btn-primary btn-block mt-3 mb-3" type="submit">Sign in</button>

            <span>
                don't have an account ? <a class="mt-4" href="{{route('register')}}">Register</a>
            </span>
        </form>
    </div>
</div>

