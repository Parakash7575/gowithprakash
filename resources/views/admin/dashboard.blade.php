<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Panel</title>

<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Lineicons -->
<link rel="stylesheet" href="https://cdn.lineicons.com/5.0/lineicons.css">
</head>
<body>
<div class="wrapper">

    <!-- SIDEBAR -->
    <div class="sidebar" id="sidebar">

        <!-- HEADER WITH TOGGLE -->
        <div class="brand">
            <div class="brand-left">
                <i class="lni lni-dashboard"></i>
                <span>Hello,{{ Auth::user()->name }}</span>
            </div>
            <button onclick="toggleSidebar()">
                <i class="lni lni-chevron-left"></i>
            </button>
        </div>

        <a href="#">
            <i class="lni lni-home"></i>
            <span>Dashboard</span>
        </a>
        
        <a href="#">
            <i class="lni lni-users"></i>
            <span>Users</span>
        </a>
        
        <a href="#" onclick="toggleDropdown(event)">
            <i class="lni lni-cog"></i>
            <span>Tours</span>
            <i class="lni lni-chevron-down ms-auto"></i>
        </a>

        <div class="dropdown-menu-custom collapse" id="settingsMenu">
            <a href="#"><i class="lni lni-user"></i>Add Category</a>
            <a href="#"><i class="lni lni-lock"></i> Add Tour</a>
        </div>



        <a href="#" onclick="toggleDropdown(event)">
            <i class="lni lni-cog"></i>
            <span>Settings</span>
            <i class="lni lni-chevron-down ms-auto"></i>
        </a>

        <div class="dropdown-menu-custom collapse" id="settingsMenu">
            <a href="#"><i class="lni lni-user"></i> Profile</a>
            <a href="#"><i class="lni lni-lock"></i> Security</a>
        </div>

        <a href="#">
            <i class="lni lni-exit"></i>
            <span>Logout</span>
        </a>

    </div>
    <div class="content">
        

        <h2 class="mt-3">Dashboard</h2>
        <p>.</p>
    </div>

</div>

<script src="{{ asset('js/admin.js') }}"></script>



</body>
</html>
