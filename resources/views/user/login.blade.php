@extends('scaffold/scaffold')

@section('content')

<div id="login">
    <h2>Anmelden</h2>
    <form method="POST" action="/login">
        @csrf
        <input type="email" name="email" placeholder="Email">
        @error('email')
        <p>{{$message}}</p>
        @enderror
        <input type="password" name="password" placeholder="Passwort">
        @error('password')
        <p>{{$message}}</p>
        @enderror
        <input type="submit" value="Anmelden">
    </form>
</div>
    
@endsection