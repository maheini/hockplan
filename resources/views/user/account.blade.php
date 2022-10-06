@extends('scaffold/scaffold', ['title' => 'Account'] )

@section('content')

@auth
    
<h1>Dein Konto</h1>
<h3>Benutzername:</h3>
<p>{{auth()->user()->name}}</p>
<h3>Email:</h3>
<p>{{auth()->user()->email}}</p>

@endauth

@endsection