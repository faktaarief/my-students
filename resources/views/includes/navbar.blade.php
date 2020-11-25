<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('dashboard.index') }}">MyStudents</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
          <a class="nav-link"  href="{{ route('dashboard.index') }}">Home</a>
        </li>
        <li class="nav-item {{ Request::is('students') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('students.index') }}">Students</a>
        </li>
      </ul>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <span class="nav-link">( {{ Auth::user()->name }} )</span>
          </li>
          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="nav-link" 
                    href="{{ route('logout') }}" 
                    onclick="event.preventDefault(); 
                    this.closest('form').submit();"
                >Logout</a>
            </form>
          </li>
      </ul>
  </div>
</nav>