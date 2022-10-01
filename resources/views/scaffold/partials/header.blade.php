<div id="header">
    <div class="inner">
        {{-- <a class="active" href="#home">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a> --}}
        @auth
        <div class="menu-right">
            <a href="/account">{{auth()->user()->name}}</a>
        </div>
        @endauth
        @guest
        <div class="menu-right">
            <a href="/login">Anmelden</a>
            <a href="/registerieren">Registrieren</a>
        </div>
        @endguest
    </div>
</div> 