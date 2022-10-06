@extends('scaffold/scaffold', ['title' => 'Account'])

@section('content')

    @auth

        <x-layout.sidebar_layout>
            <x-slot name="sidebar">
                @include('user/account/menu', ['active' => 'plaene'])
            </x-slot>
            <x-slot name="content">
                <h1>Dein Hockpläne</h1>
            </x-slot>
        </x-layout.sidebar_layout>

    @endauth

@endsection