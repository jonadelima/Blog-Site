<nav class="col-md-2 d-none d-md-block p-1 pt-2 sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Route::is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                @if(Auth::user()->role == 1)                                
                    <a class="nav-link {{ Route::is('admin.users.index') || Route::is('admin.users.create') || Route::is('admin.users.edit') || Route::is('admin.users.show') ? 'active' : '' }}" href="{{ route('admin.users.index') }}">
                        Users
                    </a>
                @elseif(Auth::user()->role == 0)
                    <a class="nav-link {{ Route::is('profile') ? 'active' : '' }}" href="{{ route('profile') }}">
                        Profile
                    </a>
                @endif
            </li>
            <li class="nav-item">
                @if(Auth::user()->role == 1)
                    <a class="nav-link {{ Route::is('admin.posts.index') ? 'active' : '' }}" href="{{ route('admin.posts.index') }}">
                        Manage Posts
                    </a>
                @elseif(Auth::user()->role == 0)
                    <a class="nav-link {{ Route::is('posts.*') ? 'active' : '' }}" href="{{ route('posts.index') }}">
                        My Posts
                    </a>
                @endif
            </li>
        </ul>
    </div>
</nav>