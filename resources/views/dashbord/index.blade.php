<h1>Ini halaman dashboard</h1>
<h1>{{ Auth::user()->name }}</h1>
<h1>{{ Auth::user()->role }}</h1>

<a href="{{ url('logout') }}">Logout</a>