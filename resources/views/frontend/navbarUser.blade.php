<nav class="navbar navbar-default navbar-transparent navbar-fixed-top" color-on-scroll="200">
    <div class="container">
        <div class="navbar-header">
            <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar bar1"></span>
                <span class="icon-bar bar2"></span>
                <span class="icon-bar bar3"></span>
            </button>
            <a href="{{ ('frontend.landing') }}" class="navbar-brand">
                FIXIT
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right navbar-uppercase">
                <li>
                    <a href="{{ url('whatsapp') }}" target="_blank">Ingin menjadi mitra?</a>
                </li>
                <li>
    <form action="{{ route('edituser') }}" method="GET">
        @csrf
        <button type="submit" class="btn btn-danger btn-fill">Profile</button>
    </form>
</li>
                
                <li>
                    <a href="{{ url('logout') }}" class="btn btn-danger btn-fill">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
