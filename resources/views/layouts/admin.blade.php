<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>@yield('title') - Admin Panel</title>

<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.lineicons.com/5.0/lineicons.css">
<link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


</head>
<body>
<div class="wrapper">
    

    <!-- SIDEBAR -->
    <div class="sidebar" id="sidebar">

        <!-- HEADER WITH TOGGLE -->
        <div class="brand">
            <div class="brand-left">
                <i class="lni lni-dashboard"></i>
                <span>Hello, {{ Auth::user()->name }}</span>
                
            </div>
            <button onclick="toggleSidebar()">
                <i class="lni lni-chevron-left"></i>
            </button>
        </div>

        <a href="">
            <i class="lni lni-home"></i>
            <span>Dashboard</span>
        </a>
        
        <a href="">
            <i class="lni lni-users"></i>
            <span>Users</span>
        </a>
        
        <a href="#" onclick="toggleDropdown(event)">
            <i class="lni lni-cog"></i>
            <span>Tours</span>
            <i class="lni lni-chevron-down ms-auto"></i>
        </a>

        <div class="dropdown-menu-custom collapse" id="settingsMenu">
            <a href="{{ route('category_listing') }}"><i class="lni lni-user"></i>Add Category</a>
            <a href="#"><i class="lni lni-lock"></i>Add Tour</a>
        </div>

        <a href="#" onclick="toggleDropdown(event)">
            <i class="lni lni-cog"></i>
            <span>Settings</span>
            <i class="lni lni-chevron-down ms-auto"></i>
        </a>

        <div class="dropdown-menu-custom collapse" id="settingsMenu">
            <a href="#"><i class="lni lni-user"></i>Profile</a>
            <a href="#"><i class="lni lni-lock"></i>Security</a>
        </div>

        <!-- <a href="#">
            <i class="lni lni-exit"></i>
            <span>Logout</span>
        </a> -->

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>

    <!-- PAGE CONTENT -->
    <div class="content">
        @yield('content')
    </div>

</div>



 <div id="blade-modal">
    <div id="blade-modal-content">
     <button class="blade-close">&times;</button>
     </div>
</div>


@if(session('success'))
<div id="successPopup" class="success-popup">
    <div class="success-icon">✔</div>
    <div class="success-text">{{ session('success') }}</div>
</div>
@endif

<script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>
