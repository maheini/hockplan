@extends('scaffold/scaffold')

@section('content')

<div id="login">
    <h2>Registrieren</h2>
    <form method="POST" action="/register">
        @csrf
        <input type="text" name="name" placeholder="Benutzername" value="{{old('name')}}"/>
        @error('name')
        <p>{{$message}}</p>
        @enderror
        <input type="email" name="email" placeholder="Email"  value="{{old('email')}}"/>
        @error('email')
        <p>{{$message}}</p>
        @enderror
        <input type="password" name="password" placeholder="Passwort" value="{{old('password')}}"/>
        @error('password')
        <p>{{$message}}</p>
        @enderror
        <input type="password" name="password_confirmation" placeholder="Passwort bestätigen"  value="{{old('password_confirmation')}}"/>
        <input type="submit" value="Registrieren">
    </form>
</div>

@endsection