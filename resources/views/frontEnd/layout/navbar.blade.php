<body>

    <!-- top bar -->
    <div class="top_bar d-none d-md-block">
        <div class="container">
            <div class="row p-1">
                <div class="col-md-6">
                    <i class="bi bi-clock"></i>
                    <span>{{ Carbon\Carbon::now() }}</span>
                </div>
                <div class="col-md-6 text-end">
                    <a href="">
                        <i class="bi bi-facebook ps-3"></i>
                    </a>
                    <a href="">
                        <i class="bi bi-twitter ps-3"></i>
                    </a>
                    <a href="">
                        <i class="bi bi-youtube ps-3"></i>
                    </a>
                    <a href="">
                        <i class="bi bi-instagram ps-3"></i>
                    </a>

                </div>
            </div>
        </div>
    </div>

    <!-- Page header with logo and tagline-->
    <header class="bg-light border-bottom d-none d-md-block">
        <div class="container">
            <div class="text-center my-1">
                <img width="150px" height="150px" src="{{ asset('assets/frontEnd/img/logo.png') }}" alt="" class="img-fluid">
            </div>
        </div>
    </header>


    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary myNavbar" style="background-color: #32C36C !important">
        <div class="container">
            <div class="navbar-brand d-md-none">
                <img width="60px" height="60px" src="{{ asset('assets/frontEnd/img/logo.png') }}" alt=""
                    class="img-fluid">
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse m-auto text-left" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('welcome.frontEnd') }}">
                            {{ __('navbar.home') }}
                        </a>
                    </li>
                     @if (isset($categories) && $categories->count() > 0)
                        @foreach ($categories as $category)
                            <li class="nav-item dropdown has-megamenu">
                                <a class="nav-link dropdown-toggle" href="#"
                                    data-bs-toggle="dropdown">{{ $category->name }}</a>
                                <div class="dropdown-menu megamenu" role="menu">
                                    <!-- for disktop -->
                                    <div class=" d-none d-md-block ">
                                        <div class="row">

                                            @php
                                                $posts = $category
                                                    ->posts()
                                                    ->latest()
                                                    ->take(4)
                                                    ->get();
                                            @endphp

                                            @foreach ($posts as $post)
                                                <div class="col-md-3 text-black">
                                                    <div class="p-2">
                                                        <div class="my_box_img" style="background-image: url('assets/images/{{ $post->photo }}');"></div>

                                                        <h6 class="mt-2">{{ $post->title }}</h6>
                                                        <div class="date mb-1 mt-1 small_text">
                                                            <i class="bi bi-clock"></i>
                                                            <span>{{ $post->created_at }}</span>
                                                            @if (isset($post->sub_category) && $post->sub_category->count() > 0)
                                                                <a href="{{ route('post.frontEnd',$post->id) }}">{{ $post->sub_category->name }}</a>
                                                            @endif
                                                        </div>
                                                    </div>

                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <!-- for mobile -->
                                    <ul class="list-unstyled d-md-none">
                                        <li>1</li>
                                        <li>2</li>
                                        <li>3</li>
                                    </ul>
                                </div>
                            </li>
                        @endforeach
                    @endif
                    <li class="nav-item">
                        @if (App::getLocale() == 'fr')
                            <a class="nav-link" href="{{ LaravelLocalization::getLocalizedURL('ar') }}">
                                عربي
                            </a>
                        @else
                            <a class="nav-link" href="{{ LaravelLocalization::getLocalizedURL('fr') }}">
                                French
                            </a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- advertisement widget-->
    <div class="mt-3 mb-3">
        <div class="text-center">
            <img src="{{ asset('assets/frontEnd/img/adv2.webp') }}" class="img-fluid" alt="">
        </div>
    </div>
