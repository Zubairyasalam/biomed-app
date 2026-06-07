<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - BioMed Summit 2027</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --admin-bg: #F7F9FC;
            --admin-sidebar: #112340;
            --admin-sidebar-hover: #1A365D;
            --admin-primary: #00A896;
            --admin-text: #555555;
            --admin-white: #ffffff;
            --admin-border: #E2E8F0;
            --admin-green: #A4C639;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: var(--admin-bg);
            color: var(--admin-text);
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 260px;
            background-color: var(--admin-sidebar);
            color: #94a3b8;
            display: flex;
            flex-direction: column;
            position: fixed;
            height: 100vh;
            z-index: 10;
        }

        .sidebar-header {
            padding: 20px;
            background-color: #0d1b33;
            display: flex;
            align-items: center;
            gap: 15px;
            color: #fff;
            font-weight: 700;
            font-size: 1.2rem;
        }

        .sidebar-header i {
            color: var(--admin-primary);
            font-size: 1.5rem;
        }

        .nav-links {
            list-style: none;
            padding: 20px 0;
            display: flex;
            flex-direction: column;
            gap: 5px;
            overflow-y: auto;
        }

        .nav-links li a {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 12px 25px;
            color: #cbd5e1;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.2s ease;
            font-size: 0.95rem;
        }

        .nav-links li a:hover, .nav-links li a.active {
            background-color: var(--admin-sidebar-hover);
            color: #fff;
            border-left: 4px solid var(--admin-primary);
        }

        .nav-links li a i {
            font-size: 1.2rem;
            width: 24px;
            text-align: center;
        }

        /* Main Content */
        .main-content {
            flex: 1;
            margin-left: 260px;
            display: flex;
            flex-direction: column;
            background-color: var(--admin-bg);
        }

        .topbar {
            background-color: var(--admin-white);
            height: 70px;
            padding: 0 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid var(--admin-border);
            box-shadow: 0 2px 5px rgba(0,0,0,0.02);
        }

        .topbar .title {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--admin-sidebar);
        }

        .content-area {
            padding: 30px;
            flex: 1;
            overflow-y: auto;
        }

        /* Card Styles */
        .card {
            background-color: var(--admin-white);
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.02);
            border: 1px solid var(--admin-border);
            padding: 25px;
            margin-bottom: 25px;
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            background-color: var(--admin-primary);
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
            font-size: 0.85rem;
            transition: background 0.2s;
            border: none;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #008a7a;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <i class="fa-solid fa-dna"></i>
            <span>BioMed Admin</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <i class="fa-solid fa-chart-pie"></i> Dashboard
                </a>
            </li>
            
            <li style="padding: 15px 25px 5px; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1px; font-weight: 700; color: #64748b; margin-top: 10px;">
                CRM Records
            </li>
            <li>
                <a href="{{ route('admin.registrations') }}" class="{{ request()->routeIs('admin.registrations') ? 'active' : '' }}">
                    <i class="fa-solid fa-users"></i> Registrations
                </a>
            </li>
            <li>
                <a href="{{ route('admin.submissions') }}" class="{{ request()->routeIs('admin.submissions') ? 'active' : '' }}">
                    <i class="fa-solid fa-file-lines"></i> Paper Submissions
                </a>
            </li>

            <li style="padding: 15px 25px 5px; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1px; font-weight: 700; color: #64748b; margin-top: 10px;">
                CMS Modules
            </li>
            <li>
                <a href="{{ route('admin.settings') }}" class="{{ request()->routeIs('admin.settings') ? 'active' : '' }}">
                    <i class="fa-solid fa-globe"></i> Global Settings
                </a>
            </li>
            <li>
                <a href="{{ route('admin.settings.registration') }}" class="{{ request()->routeIs('admin.settings.registration') ? 'active' : '' }}">
                    <i class="fa-solid fa-address-card"></i> Registration Form
                </a>
            </li>
            <li>
                <a href="{{ route('admin.homepage_sections') }}" class="{{ request()->routeIs('admin.homepage_sections') ? 'active' : '' }}">
                    <i class="fa-solid fa-layer-group"></i> Homepage Sections
                </a>
            </li>
            <li>
                <a href="{{ route('admin.abstracts_awards') }}" class="{{ request()->routeIs('admin.abstracts_awards') ? 'active' : '' }}">
                    <i class="fa-solid fa-award"></i> Abstracts & Awards
                </a>
            </li>
            <li>
                <a href="{{ route('admin.venue_settings') }}" class="{{ request()->routeIs('admin.venue_settings') ? 'active' : '' }}">
                    <i class="fa-solid fa-map-location-dot"></i> Venue Settings
                </a>
            </li>
            <li>
                <a href="{{ route('admin.deadlines') }}" class="{{ request()->routeIs('admin.deadlines') ? 'active' : '' }}">
                    <i class="fa-solid fa-calendar-check"></i> Timeline & Deadlines
                </a>
            </li>
            <li>
                <a href="{{ route('admin.fees') }}" class="{{ request()->routeIs('admin.fees') ? 'active' : '' }}">
                    <i class="fa-solid fa-tags"></i> Registration Fees
                </a>
            </li>
            <li>
                <a href="{{ route('admin.addons') }}" class="{{ request()->routeIs('admin.addons') ? 'active' : '' }}">
                    <i class="fa-solid fa-puzzle-piece"></i> Form Add-Ons
                </a>
            </li>
            <li>
                <a href="{{ route('admin.policies') }}" class="{{ request()->routeIs('admin.policies') ? 'active' : '' }}">
                    <i class="fa-solid fa-file-contract"></i> Policies / Accordions
                </a>
            </li>

            <li style="margin-top: auto; padding-top: 20px; border-top: 1px solid #1A365D;">
                <a href="/" target="_blank">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i> View Live Site
                </a>
            </li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <header class="topbar">
            <div class="title">@yield('header_title', 'Dashboard')</div>
            <div style="display: flex; align-items: center; gap: 20px;">
                <span style="font-weight: 600; color: var(--admin-text);">
                    <i class="fa-solid fa-circle-user" style="font-size: 1.5rem; vertical-align: middle; margin-right: 8px; color: var(--admin-sidebar);"></i> 
                    {{ auth()->user()->name ?? 'Administrator' }}
                </span>
                
                <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                    @csrf
                    <button type="submit" style="background: none; border: none; color: #ef4444; font-weight: 600; font-size: 0.9rem; cursor: pointer; display: flex; align-items: center; gap: 5px;">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i> Logout
                    </button>
                </form>
            </div>
        </header>

        <div class="content-area">
            @yield('content')
        </div>
    </main>

</body>
</html>
