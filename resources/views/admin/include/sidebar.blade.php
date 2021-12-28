 <!-- sidebar menu -->
 <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

    <div class="menu_section">
      {{-- <h3>General</h3> --}}
      <ul class="nav side-menu">
        @if(Auth::user()->type=="Superadmin")
          <li><a href="{{ route('users.index') }}"><i class="fa fa-calendar"></i> Users </a></li>
        @endif
        @if(Auth::user()->type=="Superadmin" || Auth::user()->type=="Admin")
            <li><a href="{{route('weddings.index')}}"><i class="fa fa-calendar"></i> Events </a></li>
            
        @endif


      </ul>
    </div>

  </div>
  <!-- /sidebar menu -->
