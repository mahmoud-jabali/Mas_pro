<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">Admin DashBoard</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            {{-- <li class="sidebar-item active">
                <a class="sidebar-link" href="{{ url('admindashboard') }}">
                    <i class="align-middle" data-feather="sliders"></i>
                    <span class="align-middle">Dashboard</span>
                </a>
            </li> --}}

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ url('users') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Users</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ url('docters') }}">
                    <i class="fa-solid fa-user-doctor"></i> <span class="align-middle">Doctors</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ url('appointment') }}">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Appointments</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ url('specialties') }}">
                    <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Specialties</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ url('/adcontact') }}">
                    <i class="fa-regular fa-message" ></i> <span class="align-middle">Contact</span>
                </a>
            </li>

            {{-- <li class="sidebar-item">
                <a class="sidebar-link" href="{{ url('profile') }}">
                    <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">User Profile</span>
                </a>
            </li> --}}
        </ul>
    </div>
</nav>
