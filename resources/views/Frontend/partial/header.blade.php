<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="{{ URL::to('/') }}" class="logo d-flex align-items-center">
            <img src="{{ asset('Frontend/resources/img/logo.png') }}" alt="">
            <span class="d-none d-lg-block">Noipunno Digital</span>
        </a>
        @guest
        @else
        <i class="bi bi-list toggle-sidebar-btn"></i>
        @endguest
    </div><!-- End Logo -->

    <div class="search-bar">
        @guest
        @else
        <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input type="text" name="query" placeholder="Search" title="Enter search keyword">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
        @endguest
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
            @guest
            @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @endif

            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li><!-- End Search Icon-->

            @foreach (App\Models\Social::social_media() as $social)
            <!-- Start Social Media Icon-->
            <li class="nav-item dropdown icon_hover">
                <a class="nav-link nav-icon" href="{{'https://'. $social->media_link }}">
                    <i class="fa fa-{{ $social->name }}" style="font-size: 30px"></i>
                </a>
            </li>
            @endforeach

            <!-- End Social Media Icon-->

            <li class="nav-item dropdown">

                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-bell"></i>
                    <span class="badge bg-primary badge-number">4</span>
                </a><!-- End Notification Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                    <li class="dropdown-header">
                        You have 4 new notifications
                        <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="notification-item">
                        <i class="bi bi-exclamation-circle text-warning"></i>
                        <div>
                            <h4>Lorem Ipsum</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>30 min. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="notification-item">
                        <i class="bi bi-x-circle text-danger"></i>
                        <div>
                            <h4>Atque rerum nesciunt</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>1 hr. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="notification-item">
                        <i class="bi bi-check-circle text-success"></i>
                        <div>
                            <h4>Sit rerum fuga</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>2 hrs. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="notification-item">
                        <i class="bi bi-info-circle text-primary"></i>
                        <div>
                            <h4>Dicta reprehenderit</h4>
                            <p>Quae dolorem earum veritatis oditseno</p>
                            <p>4 hrs. ago</p>
                        </div>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li class="dropdown-footer">
                        <a href="#">Show all notifications</a>
                    </li>

                </ul><!-- End Notification Dropdown Items -->

            </li><!-- End Notification Nav -->

            <li class="nav-item dropdown">

                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-chat-left-text"></i>
                    <span class="badge bg-danger badge-number "> {{App\Models\Message::unread_message()}}</span>
                </a><!-- End Messages Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                    <li class="dropdown-header">
                        You have 3 new messages
                        <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    @foreach (App\Models\Message::show_message() as $message)
                    <li class="message-item hover_color">
                        <a href="{{route('message_read', $message->id)}}">
                            <img src="{{asset('Frontend/UserImage/'. Auth::user()->image)}}" alt="{{Auth::user()->name}}" class="rounded-circle">
                            <div>
                                <h4>{{$message->title}}</h4>
                                <p>{{$message->description}}</p>
                                <p>{{$message->updated_at}}</p>
                            </div>
                        </a>

                    </li>
                    <hr class="dropdown-divider ">
                    @endforeach
                    <li>
                        <hr class="dropdown-divider">
                    </li>


                    <li class="dropdown-footer">
                        <a href="{{route('show_message')}}">Show all messages</a>
                    </li>

                </ul><!-- End Messages Dropdown Items -->

            </li><!-- End Messages Nav -->

            <!-- start user Login section-->
            <li class="nav-item dropdown">

                <a id="userNav" class="nav-link dropdown-toggle nav-icon text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if(Auth::user()->image)

                    <img src="{{asset('Frontend/UserImage/'. Auth::user()->image)}}" alt="" style="width: 38px;height:40px; border-radius:50%">
                    <span class="badge">{{Auth::user()->name}}</span>
                    @else
                    <img src="{{asset('Frontend/UserImage/default.png')}}" alt="" style="width: 40px; border-radius:60%">
                    <span class="badge">{{Auth::user()->name}}</span>
                    @endif
                </a>


                <div class="dropdown-menu dropdown-menu-end" style="min-width: 200px;" aria-labelledby="userNav">
                    <a id="userDashboard" class="nav-link " href="{{route('userdashboard')}}" role="button" aria-haspopup="true" aria-expanded="false">
                        Dashboard
                    </a>
                    <a id="userName" class="nav-link " href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
            <!-- end user Login section-->
        </ul><!-- End Profile Dropdown Items -->
    </nav><!-- End Icons Navigation -->

</header>