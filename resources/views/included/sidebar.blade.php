<div class="nk-sidebar">           
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <!-- <li class="nav-label">Dashboard</li> -->
            <li class="">
                <a class="" href="{{ route('dashboard') }}">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>

            <li><a href="{{ route('users-lists') }}"><i class="icon-people menu-icon"></i> <span class="nav-text">{{ __("Usermanagement") }}</span></a></li>
            <li><a href="#"><i class="icon-notebook menu-icon"></i> <span class="nav-text">{{ __("Package Management") }}</span></a></li>
            <li><a href="#"><i class="icon-book-open menu-icon"></i> <span class="nav-text">{{ __("Phonebook") }}</span></a></li>
            <li><a href="#"><i class="icon-envelope menu-icon"></i> <span class="nav-text">{{ __("Message Templates") }}</span></a></li>
            <li><a href="#"><i class="icon-settings menu-icon"></i> <span class="nav-text">{{ __("General Settings") }}</span></a></li>
            <li><a href="#"><i class="icon-folder menu-icon"></i> <span class="nav-text">{{ __("Phonebook Settings") }}</span></a></li>
<!--             <li class="mega-menu mega-menu-sm">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <i class="icon-grid menu-icon"></i> <span class="nav-text">Settings</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="./layout-blank.html">General Settings</a></li>
                    <li><a href="./layout-blank.html">Phonebook Settings</a></li>
                </ul>
            </li> -->
        </ul>
    </div>
</div>