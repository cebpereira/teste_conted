<nav class="navbar navbar-expand navbar-dark bg-dark justify-content-between">
    <a class="navbar-brand" style="padding-left: 5px" href="{{ url('/home') }}">
        <img src="{{ url('img/logo_teste.png') }}" alt="Conted.Tech"
        style="width: 60%; height: 60%;">
    </a>

    @auth
    <div class="form-inline jutify-content-between" >
        <a class="btn btn-primary my-2 my-sm-0 mr-3 rounded-pill" href="{{ url('/user/create') }}">
            <span class="fas fa-user-plus"></span>
        </a>

        <a class="btn btn-primary my-2 my-sm-0 mr-3 rounded-pill" href="{{ url('/user/' . Auth::user()->id . '/edit') }}">
            <span class="fas fa-user-edit"></span>
        </a>

        <a class="btn btn-primary my-2 my-sm-0 mr-3 rounded-pill" href="{{ url('/user/users') }}">
            <span class="fas fa-users"></span>
        </a>

        <a class="btn btn-primary my-2 my-sm-0 rounded-pill" href="{{ url('/logout') }}">
            <span class="fas fa-sign-out-alt"></span>
        </a>
    </div>
    @endauth

    @guest
    <div class="form-inline">
        <a class="btn btn-primary my-2 my-sm-0 rounded-pill" href="{{ url('/login') }}">
            login <span class="fas fa-sign-in-alt"></span>
        </a>
    </div>
    @endguest
</nav>
