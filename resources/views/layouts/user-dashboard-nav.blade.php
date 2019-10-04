<nav class="navbar navbar-expand-md navbar-dark text-white" style="background-color:#2737A6">
  <a class="navbar-brand" href="{{ url('/home') }}">
    <img class="img-responsive2" src="{{ asset('img/mouka-logo-new.png') }}" style="width:70px;">
  </a>
  <span>{{ Auth::user()->location }}</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

    </ul>
    <span>Hello, {{ Auth::user()->name }}</span> &nbsp&nbsp

    <form id="logout-form" method="POST" action="{{ route('logout') }}" class="form-inline my-2 my-lg-0">
      @csrf
      <button type="submit" class="btn btn-outline-primary text-white">Log out</button>

    </form>
  </div>

</nav>
<div class="nav-scroller bg-white box-shadow">
  <nav class="nav nav-underline">

    @if (Auth::user()->user_type > 0)
    <a class="nav-link {{ Request::is('home*') ? 'active' : '' }}" href="{{ url( '/home') }} ">Dashboard</a>
    <a class="nav-link {{ Request::is('admin/tickets*') ? 'active' : '' }}" href="{{ url( '/admin/tickets') }} ">All
      Tickets</a>
    <a class="nav-link {{ Request::is('admin/users*') ? 'active' : '' }}" href="{{ url( '/admin/users') }} ">New
      Users</a>
    <a class="nav-link {{ Request::is('admin/reports*') ? 'active' : '' }}"
      href="{{ url( '/admin/reports') }} ">Reports</a>
    @if (Auth::user()->user_type === 2)
    <a class="nav-link {{ Request::is('admin/category*') ? 'active' : '' }}"
      href="{{ url( '/admin/category') }} ">Category</a>
    <a class="nav-link {{ Request::is('admin/department*') ? 'active' : '' }}"
      href="{{ url( '/admin/department') }} ">Department</a>
    <a class="nav-link {{ Request::is('admin/logs*') ? 'active' : '' }}" href="{{ url( '/admin/logs') }} ">Logs</a>
    <a class="nav-link {{ Request::is('admin/est-level*') ? 'active' : '' }}" href="{{ url( '/admin/escalation') }} ">Escalation</a>
    @endif

    @else
    <a class="nav-link {{ Request::is('home*') ? 'active' : '' }}" href="{{ url( '/home') }} ">Dashboard</a>
    <a class="nav-link {{ Request::is('tickets*') ? 'active' : '' }}" href="{{ url( '/tickets') }} ">Open Ticket</a>
    <a class="nav-link {{ Request::is('mytickets*') ? 'active' : '' }}" href="{{ url( '/mytickets') }} ">My
      Tickets</a>
    @endif
    <a class="nav-link {{ Request::is('faq*') ? 'active' : '' }}" href="{{ url( '/faq') }} ">FAQ</a>
    <a class="nav-link {{ Request::is('settings*') ? 'active' : '' }}" href="{{ url( '/settings') }} ">Profile</a>


  </nav>
</div>