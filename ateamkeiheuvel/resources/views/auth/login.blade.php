@extends('layouts.default')
@section('title')<title>Home</title>@endsection
@section('banner')
<section class="banner loginwallp">
		@include('auth.login.banner')
	</section>
@endsection
@section('firstsectcontent')
@if(session('confirm'))
            <p class="confirm confirmer">{{ session('confirm') }}</p>
            @endif
<h1 class="section-title" id="register" style="font-size:27px;">Checking parameters.. Establishing course.. Confirming approval..</h1>
            @endsection

            @section('main')
           
            @endsection