<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">ANDRI POS </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="{{ Request::is('home') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{route('home')}}"><i class="fas fa-dashboard">
                    </i> <span>Dashboard</span>
                </a>
            </li>
            <li class="{{ Request::is('category') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{route('users.index')}}"><i class="fas fa-list">
                    </i> <span>Category</span>
                </a>
            </li>
            <li class="{{ Request::is('product') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{route('users.index')}}"><i class="fas fa-fire">
                    </i> <span>Product</span>
                </a>
            </li>
            <li class="{{ Request::is('users') ? 'active' : '' }}">
                <a class="nav-link"
                    href="{{route('users.index')}}"><i class="fas fa-users">
                    </i> <span>Users</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
