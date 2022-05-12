<div class="container">

<h1 class="banner-slogan">
    Log in
</h1>

<article class="banner-user">

    <div class="banner-user-image-contact">
    <h1 class="loginregisterswitch">
    <a href="{{route('register.get') }}">Register..</a>
    </h1>
    </div>
    <div class="banner-user-image-contact">
    <form action="{{ route('login.post') }}" method="post">
            @csrf
            <div class="form-content">
                <div class="form-element">
                    <div>
                        <label for="email">Email</label>
                        @error('email')
                            <div class="error blink">{{ $message }}</div>
                        @enderror
                    </div>
                    <input type="text" name="email" id="emaillogin" value="{{ old('email') }}">
                    <span class="errorclientside" id="error_emaillogin"></span>
                </div>
                <div class="form-element">
                    <div>
                        <label for="password">Password</label>
                        @error('password')
                            <div class="error blink">{{ $message }}</div>
                        @enderror
                    </div>
                    <input type="password" name="password" id="wwlogin">
                    <span class="errorclientside" id="error_wwlogin"></span>
                </div>

                <div>
                <button class="button" type="submit" value="Login" onClick="submitlogin()">></a>
                    
                </div>
            </div>
        </form>
    </div>
</article>

</div>