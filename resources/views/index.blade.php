@extends('layouts.app')

@section('title', ' - Lorem ipsum dolor sit amet, consectetur adipiscing elit.')

@section('content')
<section class="has-background-link">
    <div class="container">    
        <nav class="navbar is-link navbar-style">
            <div class="nav-menu">
                <a class="navbar-item has-text-white">CALL US AT (123) 456-7891</a>
            </div>  

            <div class="nav-menu">
                <a class="navbar-item has-text-white">saidan@gmail.com</a>
            </div>        
        </nav>
    </div>

    <section class="section has-text-centered">
        <img class="front-logo" src="/images/logo.jpg">
    </section>
</section>

<section style="margin-top:10px;">
    <div class="container">
        <div class="tabs is-centered">
            <ul>
                <li><a>Home</a></li>
                <li><a>About</a></li>
                <li><a>Menu</a></li>
                <li><a>Reservations</a></li>
                <li><a>Location & Hours</a></li>
                <li><a>Contact</a></li>
                <li><a href="{{ route('login') }}">Login </a></li>
                <li><a>Register</a></li>
            </ul>
        </div>
    </div>    
</section>

<section class="section">
    <div class="container">
        <div class="content">
            <h1 class="title is-uppercase has-text-centered is-family-monospace">Lorem ipsum dolor sit amet, consectetur elit.</h1>   
            <br>         
            <p class="subtitle has-text-justified">In nec ipsum sit amet est hendrerit scelerisque. Nulla facilisi. Vivamus id mauris 
                in nulla rutrum interdum. Morbi vitae turpis at metus suscipit tincidunt a at turpis. Quisque quam magna, tincidunt 
                auctor lectus nec, mattis maximus sapien. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus 
                mus. Mauris mollis lacus velit, dignissim mattis velit scelerisque vel. Etiam in lectus dolor. Etiam mattis finibus ligula 
                id sodales. Aliquam eget tempus nulla. Fusce vel luctus velit. Donec at nunc sed elit scelerisque condimentum a nec diam. 
                Integer ac velit non nibh imperdiet suscipit. Nunc non turpis viverra, hendrerit purus vulputate, ultrices ex.</p>
            <figure class="image is-2by1">
                <img src="/images/featured.jpeg">
            </figure>    
        </div>    
    </div>
</section>

<section class="section">
    <div class="container">
        <hr>
        <div class="columns is-flex-tablet-only">
            <div class="column is-3">
                <a href="" class="has-text-centered">
                    <figure class="image is-128x128 is-mx-auto">
                        <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                    </figure>  
                    <p class="subtitle is-pt-2">Starters</p>
                </a>
            </div>

            <div class="column is-3">
                <a href="" class="has-text-centered">
                    <figure class="image is-128x128 is-mx-auto">
                        <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                    </figure>   
                    <p class="subtitle is-pt-2">Salad</p>
                </a>
            </div>

            <div class="column is-3">
                <a href="" class="has-text-centered">
                    <figure class="image is-128x128 is-mx-auto">
                        <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                    </figure>  
                    <p class="subtitle is-pt-2">Entrees</p>
                </a>
            </div>

            <div class="column is-3">
                <a href="" class="has-text-centered">
                    <figure class="image is-128x128 is-mx-auto">
                        <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
                    </figure>    
                    <p class="subtitle is-pt-2">Desserts</p>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="section has-background-info">
    <div class="container">
        <div class="columns">
            <div class="column">
                <article class="media has-text-white">
                    <figure class="media-left">
                        <p class="image is-64x64">
                            <img src="https://bulma.io/images/placeholders/128x128.png">
                        </p>
                    </figure>
                    <div class="media-content">
                        <div class="content">
                            <p>
                                <strong class="has-text-white">John Smith</strong> <small>@johnsmith</small> <small>31m</small>
                                <br>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                            </p>
                        </div>
                    </div>
                    <div class="media-right">
                    </div>
                </article>
            </div>

            <div class="column">
                <article class="media has-text-white">
                    <figure class="media-left">
                        <p class="image is-64x64">
                            <img src="https://bulma.io/images/placeholders/128x128.png">
                        </p>
                    </figure>
                    <div class="media-content">
                        <div class="content">
                            <p>
                                <strong class="has-text-white">John Smith</strong> <small>@johnsmith</small> <small>31m</small>
                                <br>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                            </p>
                        </div>
                    </div>
                    <div class="media-right">
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
@endsection
