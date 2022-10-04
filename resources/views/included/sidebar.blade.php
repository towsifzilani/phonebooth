<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="profile-image">
          <img src="{{ asset('assets/theme/images/faces/face5.jpg') }}" alt="image"/>
        </div>
        <div class="profile-name">
          <p class="name">
            Welcome Jane
          </p>
          <p class="designation">
            Super Admin
          </p>
        </div>
      </div>
    </li>

    @foreach(sidebar() as $key => $value)
    <li class="nav-item">
      <a class="nav-link" href="{{ $value['href'] }}">
        <i class="{{ $value['icon'] }} menu-icon"></i>
        <span class="menu-title">{{ $value['title'] }}</span>
      </a>
    </li>
    @endforeach

  </ul>
</nav>