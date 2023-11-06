    {{-- Top --}}
    @extends('include_user.top')


    <!------------------------------------------ header-start --------------------------------------------->
    @include('include_user.header')
       <!---------------------------------------- /header-start ---------------------------------------------->
       @section('title','Home')

       <!---------------------------------------- slider_area_start  ---------------------------------------------->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <span>the best medical center</span>
                                <h3>Bringing health<br>
                                    to life for the whole family.</h3>

                                   <!---------------------- Search Box  ---------------------->

                                   <form action="{{ route('searchDoctor') }}" method="GET" role="search" class="sea">
                                    <label for="search">Search for a doctor by name</label>
                                    <input id="search" type="text" name="search" placeholder="Search..." autofocus required />
                                    <button type="submit" style="color: aliceblue;">Go</button>
                                </form>
                            </div>
                                  <!---------------------- Search Box  ---------------------->


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
           <!---------------------------------------- slider_area_start  ---------------------------------------------->


    <!---------------------------------------------- Secound Section ---------------------------------------------->
    <div id="Asection">
      <div class="welcome_clicnic_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-5">
                    <div class="welcome_thumb">
                        <div class="thumb_1">
                            <img src="./img/about/1.webp" alt="about our clinic" height="650px">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_docmed_info">
                        <h3>Welcome To
                            <span>Modern Clinic.</span></h3>
                        <p>At modern clinic, we are dedicated to providing you with the highest quality healthcare in a welcoming and compassionate environment. Your well-being is our priority, and we are honored to be your trusted healthcare partner
                        </p>
                        <ul>
                            <li>  <strong>Expertise:</strong> Our team of experienced and skilled healthcare professionals is committed to delivering top-notch medical care</li>
                            <li> <strong>Patient-Centered Care:</strong> Your health and comfort are at the forefront of everything we do</li>
                            <li>  <strong> Services:</strong> Whether you need routine check-ups, specialized medical care </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>

        <!---------------------------------------------- /Secound Section ---------------------------------------------->



        <!---------------------------------------------- depertment_area---------------------------------------------->

    <div class="depertment_area">
        <div class="container" >
            <div class="row custom_align align-items-end justify-content-between" >
                <div class="col-lg-6" >
                    <div class="section_title" >
                        <h3 style="margin-left:5%;margin-right:5%; width:300px; box-shadow:2px 2px 5px black;padding:1%;">Specialties</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="depart_ment_tab mb-30"  style="display: flex; flex-wrap: wrap;justify-content: space-around">

                            @foreach ($sp as $item)
                                <div class="sp-div" style="width:30%; text-align: center;border:1px solid gray;border-radius: 10px;margin-bottom:2%">
                                    <a href="{{route('specialty',$item->id)}}" style="cursor: pointer">
                                    <img src="{{ asset('storage/' . $item->photo) }}" alt="User Image" style="width:100%;border-radius: 50%;">
                                    <h3>{{$item->name}}</h3></a>

                                </div>
                            @endforeach

                    </div>
                </div>
            </div>

        </div>
    </div>
        <!---------------------------------------------- /depertment_area---------------------------------------------->


        <!---------------------------------------------- expert doctors area start---------------------------------------------->

    {{-- <div class="expert_doctors_area">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-6">
                    <div class="section_title mb-55 text-center">
                        <h3>Our Doctors</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single_expert">
                        <div class="expert_thumb">
                            <img src="img/experts/1.png" alt="">
                        </div>
                        <div class="experts_name text-center">
                            <h3>Jhon Smith</h3>
                            <span>Dentist</span>
                            <div class="social_links">
                                <ul>
                                    <li>
                                        <a href="#"> <i class="bi bi-facebook"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="bi bi-linkedin"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="bi bi-twitter"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_expert">
                        <div class="expert_thumb">
                            <img src="img/experts/2.png" alt="">
                        </div>
                        <div class="experts_name text-center">
                            <h3>Jhon Smith</h3>
                            <span>Dentist</span>
                            <div class="social_links">
                                <ul>
                                    <li>
                                        <a href="#"> <i class="bi bi-facebook"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="bi bi-linkedin"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="bi bi-twitter"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_expert">
                        <div class="expert_thumb">
                            <img src="img/experts/3.png" alt="">
                        </div>
                        <div class="experts_name text-center">
                            <h3>Jhon Smith</h3>
                            <span>Dentist</span>
                            <div class="social_links">
                                <ul>
                                    <li>
                                        <a href="#"> <i class="bi bi-facebook"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="bi bi-linkedin"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="bi bi-twitter"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
   <!---------------------------------------------- /expert doctors area end ---------------------------------------------->


    <!-- ---------------------------------Appointment Section start--------------------------------- -->

    <div class="book_apointment_area" >
        <div class="container" >
            <div class="row justify-content-end" >
                <div class="col-lg-7" >
                    <div class="popup_box" >
                        <div class="popup_inner" >
                            <h3 style="text-align: center">
                                Book an
                            <span>Appointment</span>
                            </h3>
                            <form action="{{route('reservation.store')}}" style="margin-right:auto;margin-left:auto" method="post">
                                @csrf
                                <div class="row">
                                    {{-- <div class="col-xl-12">
                                        <select class="form-select wide" id="sp-select" name="specialty_id">
                                            <option data-display="Please select the Specialty">Please select the Specialty </option>
                                            @foreach ($sp as $item )
                                                <option value={{$item->id}}>{{$item->name}}</option>

                                            @endforeach
                                        </select>
                                    </div> --}}
                                    <div class="col-xl-12">
                                        <select class="form-select wide" id="sp-select" class="" name="docter_id">
                                            <option data-display="Please select the Doctor">Please select the Doctor </option>
                                            @foreach ($docters as $doc )
                                                <option value={{$doc->id}}>Dr. {{$doc->fname}}&nbsp;{{$doc->lname}} - {{$doc->specialties->name}}</option>

                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="hidden" value="{{session()->get('user_id')}}" name="user_id">
                                        <input type="text" value="{{session()->get('name')}}" placeholder="User Name">
                                    </div>
                                    <div class="col-xl-6">
                                        <input class="datepicker" placeholder="Appointment Date"   name="appointment_date" min="{{ date('Y-m-d') }}">
                                    </div>
                                    <div class="col-xl-6">
                                        <select name="time">
                                            <option value="">Select a time</option>
                                            @foreach ($times as $time)
                                                <option value="{{ $time->id }}">{{ $time->time }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xl-12" >
                                        <button type="submit" style="width:97%" class="boxed-btn3">Make an Appointment</button>
                                        @if (session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ---------------------------------Appointment Section end--------------------------------- -->



    <!-- -----------------------------------quality_area start----------------------------------- -->

    <div class="quality_area">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-6">
                    <div class="section_title mb-55 text-center">
                        <h3>Quality Health</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_quality">
                        <div class="icon">
                            <i class="fa-solid fa-user-doctor" style="color: #ffffff;"></i>
                        </div>
                        <h3>Health Consultation</h3>
                        <p>Health Consultation is a personalized and comprehensive service that puts your health at the forefront.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_quality">
                        <div class="icon">
                            <i class="fa-solid fa-brain" style="color: #ffffff;"></i>
                        </div>
                        <h3>Find Health</h3>
                        <p>As you explore our website, you'll find valuable information about our services, our dedicated team, and resources to support your health and well-being.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_quality">
                        <div class="icon">
                            <i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>

                        </div>
                        <h3>Search Deoctor</h3>
                        <p> Start by entering your search criteria, such as the type of doctor you need, location, language preference, and more.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- -----------------------------------quality_area end------------------------------------ -->



    <script>

          // Assume you've already fetched your time values and stored them in the times array
    const times = @json($times);

// Function to populate the time picker
function populateTimePicker() {
    const timePicker = document.getElementById('timePicker');

    // Clear existing options
    timePicker.innerHTML = '<option value="">Select a time</option>';

    // Populate options from the times array
    times.forEach((time) => {
        const option = document.createElement('option');
        option.value = time;
        option.textContent = time;
        timePicker.appendChild(option);
    });
}

window.onload = populateTimePicker;

    </script>


    <!-------------------------------- footer Section ---------------------------------->

     @include('include_user.footer')
    <!-- -----------------------------------Java Script-------------------------------- -->

      <!-- --------------------------------font-awesome--------------------------------- -->

        @extends('include_user.js')
