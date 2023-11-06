<nav class="navbar navbar-expand navbar-dark bg-dark justify-content-between">
    <a class="navbar-brand" style="padding-left: 5px" href="{{ url('/home') }}">
        <img src="{{ url('img/logo_teste.png') }}" alt="Conted.Tech"
        style="width: 60%; height: 60%;">
    </a>

    @auth
        <a class="btn btn-primary my-2 my-sm-0 rounded-pill" href="{{ url('/logout') }}">
            Logout <span class="fas fa-sign-out-alt"></span>
        </a>
    </div>
    @endauth

    @guest
    <div class="form-inline jutify-content-between" style="padding-right: 5px">
        <a class="btn btn-primary my-2 my-sm-0 rounded-pill" href="{{ url('/login') }}">
            Login <span class="fas fa-sign-in-alt"></span>
        </a>
    </div>
    @endguest
</nav>
