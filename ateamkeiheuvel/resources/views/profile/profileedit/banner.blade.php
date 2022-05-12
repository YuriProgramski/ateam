<div class="container">

<h1 class="banner-slogan">
    Profile
</h1>

<article class="banner-user">

    <div class="banner-user-image-profile">
    <form action="{{ route('profile.update-email', $user) }}" method="post" class="flex flex-col gap-4">
                @csrf @method('put')

                

                <div class="flex flex-col">
                    <label class="text-gray-500" for="voornaam">E-mailadres: *</label>
                    <input name="email" value="{{ $user->email }}" type="email" class="bg-white border border-gray-500 px-4 py-2">
                    <p class="text-red-500">
                    @error('email')
                            {{ $user->email }}
                        @enderror
                    </p>
                </div>

                <div>
                    <button class="button" type="submit" class="mt-4 block hover:bg-orange-600 bg-orange-500 uppercase text-center font-semibold text-lg cursor-pointer text-white px-4 py-2 w-full">
                        E-mailadres bewaren
                    </button>
                </div>

            </form>

            <form action="{{ route('profile.update-password') }}" method="post" novalidate class="mt-12 flex flex-col gap-4">
                @csrf @method('put')

              

                <div class="flex flex-col">
                    <label class="text-gray-500" for="voornaam">Nieuw wachtwoord: *</label>
                    <input name="password" type="password" class="bg-white border border-gray-500 px-4 py-2">
                    <p class="text-red-500">
                    @error('password')
                            {{ $message }}
                        @enderror
                    </p>
                </div>

                <div class="flex flex-col">
                    <label class="text-gray-500" for="voornaam">Confirmeer nieuw wachtwoord: *</label>
                    <input name="password_confirmation" type="password" class="bg-white border border-gray-500 px-4 py-2">
                    <p class="text-red-500">
                    @error('password_confirmation')
                            {{ $message }}
                        @enderror
                    </p>
                </div>

                <div>
                    <button class="button" type="submit" class="mt-4 block hover:bg-orange-600 bg-orange-500 uppercase text-center font-semibold text-lg cursor-pointer text-white px-4 py-2 w-full">
                        Wachtwoord instellen
                    </button>
                </div>

            </form>

           
            
    </div>
   
</article>

</div>