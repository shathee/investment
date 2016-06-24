<header class="header">
    <div class="row">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-8">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/users') }}">Users</a></li>

                <li  class="dropdown">
                    <a href="#" class="dropdown-toggle" id="bankDropMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Bank & Branchs <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="bankDropMenu">
                        <li><a href="{{ url('/banks') }}">Banks</a></li>
                        <li><a href="{{ url('/branchs') }}">Branchs</a></li>
                    </ul>
                </li>
                <li  class="dropdown">
                    <a href="#" class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Taxess <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="{{ url('/tax') }}">Tax Types</a></li>
                        <li><a href="{{ url('/taxtrates') }}">Tax Rates</a></li>
                    </ul>
                </li>
                <li  class="dropdown">
                    <a href="#" class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Investment & Funds <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="{{ url('/fund') }}">Funds</a></li>
                        <li><a href="{{ url('/investment') }}">Investments</a></li>
                    </ul>
                </li>
                @if (!Auth::guest())
                    <li class="pull-right"><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                @endif

            </ul>

        </div>
    </div>

</header>

