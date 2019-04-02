<nav class="navbar is-link is-fixed-top" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="/">
                <img src="/images/logo.jpg" width="auto" height="">
            </a>
    
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
    
        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item">
                    Dashboard
                </a>
                <router-link class="navbar-item" to="/admin/categories">Categories</router-link>
            </div>
    
            <div class="navbar-end">
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        {{ auth()->user()->name }}
                    </a>
    
                    <div class="navbar-dropdown">
                        <a class="navbar-item">
                            Profile
                        </a>
                        <hr class="navbar-divider">
                        <a href="{{ route('logout') }}" class="navbar-item" onclick="event.preventDefault(); 
                            document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>