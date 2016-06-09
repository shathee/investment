<header class="header">
    <div class="row">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-8">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/users') }}">Users</a></li>
                <li><a href="{{ url('/banks') }}">Banks</a></li>
                <li><a href="{{ url('/branchs') }}">Branchs</a></li>
                <li><a href="{{ url('/fdrs') }}">FDR</a></li>
                @if (!Auth::guest())
                    <li class="pull-right"><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                @endif

            </ul>
        </div>
    </div>

</header>
