<ul class="nav navbar-nav navbar-right">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Logged In <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
            <li><a href="#"><i class="fa fa-user"></i> My Profile</a></li>
            <li><a href="#"><i class="fa fa-dollar"></i> My Classifieds</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Options</li>
            <li><a href="#"><i class="fa fa-cogs"></i> My Settings</a></li>
            <li><a href="{{ route('classifieds.auth.logout') }}"><i class="fa fa-reply"></i> Logout</a></li>
        </ul>
    </li>
</ul>
