@extends('scaffold/scaffold')

@section('content')

<div id="login">
    <h2>Registrieren</h2>
    <form method="POST">
        <input type="text" name="name" placeholder="Benutzername">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Passwort">
        <input type="password" name="password_confirm" placeholder="Passwort bestätigen">
        <input type="submit" value="Registrieren">
    </form>
</div>

@endsection