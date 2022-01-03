<header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.html"><h2>Sixteen <em>Clothing</em></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/showProducts">Our Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact">Contact Us</a>
            </li>


            <li>
            @if (Route::has('login'))

                  @auth

                    <li class="nav-item">
                     <a class="nav-link" href="{{url('showcart')}}">
                     <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                     Cart[{{$count}}]
                    </a>
                    </li>
                      <x-app-layout></x-app-layout>
                  @else
                      <li><a href="{{ route('login') }}" class="nav-link">Log in</a></li>

                      @if (Route::has('register'))
                          <li><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                      @endif
                  @endauth

          @endif
          </li>
          </ul>
        </div>
      </div>
    </nav>

    @if(session()->has('message'))

      <div class="alert alert-success">

        <button type="button" class="close" data-dismiss='alert'>x</button>

        {{session()->get('message')}}
      </div>

    @endif

  </header>
