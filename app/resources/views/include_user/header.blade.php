<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3">
                        <div class="logo-img">
                            <a href="{{url('/home')}}">
                                <img  src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9">
                        <div class="menu_wrap d-none d-lg-block">
                            <div class="menu_wrap_inner d-flex align-items-center justify-content-end">

           <!--------------------------------- NavBar ---------------------------------->
                                <div class="main-menu">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="{{url('/home')}}">Home</a></li>
                                            <li><a href="{{url('#Asection')}}">About</a></li>
                                            <li><a href="{{url('/contact')}}">Contact</a></li>
                                            <li><a href="{{url('/specialities')}}">Specialties</a></li>
                                            <li></li>
                                        </ul>
                                    </nav>
                                </div>

           <!--------------------------------- /NavBar ---------------------------------->


           <!--------------------------------- BTNS In Nav ---------------------------------->

                                <div class="book_room" style="width:45%">
                                    @if(session()->has('user_id')==NULL)
                                    <div class="book_btn" style="width:100%">
                                        <a href="{{route('signup')}}" style="width:50%text-align: center">Sign Up</a>
                                        <a href="{{route('login')}}" style="width:48%;text-align: center">Login</a>
                                    </div>
                                    @else
                                    <div  style="width:50%">
                                    <a href={{route('profile.fname')}}><i class="fa-solid fa-user fa-2xl" style="color: white"></i></a>&nbsp; <span style="color: white;font-size:25px">|</span>  &nbsp;
                                    <a href="{{route('logout')}}"><i class="fa-solid fa-right-from-bracket fa-2xl" style="color: white"></i></a>
                                    </div>
                                    @endif
                                </div>

           <!--------------------------------- /BTNS In Nav ---------------------------------->

                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
