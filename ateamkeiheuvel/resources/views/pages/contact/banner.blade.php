<div class="container">

<h1 class="banner-slogan">
    Keiheuvel Historical Aircraft Team
</h1>

<article class="banner-user">

    <div class="banner-user-image-contact">

    </div>
    <div class="banner-user-image-contact">
        <p class="topmarge">Receive an <span class="highlight">email brochure</span> with all the information regarding reservation and
        <span class="highlight">flight possiblities</span> and <span class="highlight">price arrangements</span></p>
        <p><form method="post" action="/contact">@csrf
            @if(session('confirm'))
            <p class="confirm confirmer">{{ session('confirm') }}</p>
            @endif
            <input id="emailcontactsend" type="email" name="email" placeholder="example@mail.com"
            value="{{ old('email') }}"/><span class="errorclientside" id="error_emailcontactsend"></span>

            @error('email')<p class="error blink">{{ $message }} </p>@enderror
            <input id="namecontactsend" type="text" name="name" placeholder="Ben Dover"
            value="{{ old('name') }}"/><span class="errorclientside" id="error_namecontactsend"></span>
            @error('name')<p class="error blink">{{ $message }} </p>@enderror
        </p>
        <p> <button class="button" type="submit" id="submitcontactsend" onClick="submitcontact()">Send</button></p>

    </div>
</article>

</div>