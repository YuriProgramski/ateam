<div class="container">

<h1 class="banner-slogan">
    Register
</h1>

<article class="banner-user">

    <div class="banner-user-image-contact">
<h1 class="loginregisterswitch">
    <a href="{{route('login.get') }}">Log in..</a></h1>
    </div>
    <div class="banner-user-image-contact">
    <form action="{{ route('register.post') }}" method="post" class="flex flex-col gap-4">
                @csrf
                <div class="form-content aligns">
              
                <p>
                        <label for="name">name</label>
                       
                    
                    <input type="text" name="name" id="nameregister" value="{{ old('name') }}">
                    <span class="errorclientside" id="error_nameregister"></span>
                    @error('name')
                            <span class="error blink">{{ $message }}</span>
                        @enderror
</p>
                    <p>
                        <label for="email">Email</label>
                        
                    
                    <input type="text" name="email" id="emailregister" value="{{ old('email') }}">
                    <span class="errorclientside" id="error_emailregister"></span>
                    @error('email')
                            <span class="error blink">{{ $message }}</span>
                        @enderror
</p>
                <p class="form-element">
                    
                        <label for="password">Password</label>
                       
                   
                    <input type="password" name="password" id="passwordregister">
                    <span class="errorclientside" id="error_passwordregister"></span>
                    @error('password')
                            <span class="error blink">{{ $message }}</span>
                        @enderror
</p>
                <p class="form-element">
                    
                        <label for="password_confirm">Password</label>
                       
                   
                    <input type="password" name="password_confirmation" id="password_confirmationregister">
                    <span class="errorclientside" id="error_password_confirmationregister"></span>
                    @error('password_confirm')
                            <span class="error blink">{{ $message }}</span>
                        @enderror
</p>
                <p>
                <button class="button" type="submit" value="Register" onClick="submitregister()">></a>
</p>
</div>
            </form>
    </div>
</article>

</div>