<div class="back-to-top"></div>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="500">
      <div class="container">
        <a href="/" class="navbar-brand">
          <!-- info<span class="text-primary">cliq</span> -->
          <img src="assets/img/logo.png" alt="">

        </a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link {{ Request::segment(1) === '' ? 'active' : null }}" href="{{route('welcome')}}">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::segment(1) === 'about' ? 'active' : null }}" href="{{route('view.aboutus')}}">ABOUT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::segment(1) === 'services' ? 'active' : null }}" href="{{route('view.services')}}">SERVICES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::segment(1) === 'blog' ? 'active' : null }}" href="{{route('view.blogs')}}">BLOG</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::segment(1) === 'contact' ? 'active' : null }}" href="{{route('view.contact')}}">CONTACT</a>
            </li>
            <li class="nav-item">
                <a href="" class="btn btn-primary ml-lg-2">Get Quote</a>
            </li>
          </ul>
        </div>

      </div>
    </nav>
  </div>