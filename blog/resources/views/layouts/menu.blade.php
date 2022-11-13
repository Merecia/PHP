<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link active">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('users.index') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <p>Users</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('comments.index') }}"
       class="nav-link {{ Request::is('comments*') ? 'active' : '' }}">
        <p>Comments</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('articles.index') }}"
       class="nav-link {{ Request::is('articles*') ? 'active' : '' }}">
        <p>Articles</p>
    </a>
</li>


