@extends('scaffold/scaffold')

@section('content')

<div id="login">
    <h2>Anmelden</h2>
    <form method="POST">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Passwort">
        <input type="submit" value="Anmelden">
    </form>
</div>
    
@endsection