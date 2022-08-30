 <!-- Navbar top menu -->
<ul class="nav navbar-nav">
    <li class="{{ request()->is('/') ? 'active':'' }}"><a href="{{url('/')}}">Home</a></li>
    {{-- <li class="{{ request()->is('about') ? 'active':'' }}"><a href="{{ route('about')}}">About</a></li>
    <li class="{{ request()->is('contact') ? 'active':'' }}"><a href="{{ route('contact')}}">Contact</a></li>
    <li class="{{ request()->is('dashboard') ? 'active':'' }}"><a href="{{ route('dashboard')}}">Dashboard</a></li> --}}
</ul>
<ul class="nav navbar-nav navbar-right">
    @php
        if(!Auth::check()) :
    @endphp
    <li><a href="{{ route('register')}}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
    <li><a href="{{ route('login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    @php
        else :
    @endphp
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <span class="glyphicon glyphicon-user"></span> Welcome {{Auth::user()->name}}
            <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
                    <li class="logout">
                        <form id="form-log-out" method="post" action="{{ url('/logout') }}" onsubmit="return confirmLogOut()">
                            @csrf
                            <button type="submit" class="remove-button-styles">Logout</button>
                        </form>
                    </li>
                </ul>
    </li>
    @php
        endif;
    @endphp
</ul>