<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <ul class="navigation-left">



            <li class="nav-item">
                <a class="nav-item-hold {{ Route::currentRouteName()=='home' ? 'open' : '' }}" href="{{route('home')}}" href="#">
                    <i class="nav-icon i-Safe-Box1"></i>
                    <span class="nav-text">Home</span>
                </a>
                <div class="triangle"></div>
            </li>

            <li class="nav-item">
                <li class="nav-item {{ request()->is('starter/*') ? 'open' : '' }}" data-item="wallet">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Wallet"></i>
                    <span class="nav-text">Wallets</span>
                </a>
                <div class="triangle"></div>
            </li>

                        <li class="nav-item">
                <li class="nav-item {{ request()->is('starter/*') ? 'open' : '' }}" data-item="explorer">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Wallet"></i>
                    <span class="nav-text">Explorer</span>
                </a>
                <div class="triangle"></div>
            </li>

            <li class="nav-item">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-File-Clipboard-File--Text"></i>
                    <span class="nav-text">Batch Sender</span>
                </a>
                <div class="triangle"></div>
            </li>

            <li class="nav-item">
                <a class="nav-item-hold {{ Route::currentRouteName()=='generator' ? 'open' : '' }}" href="{{route('generator')}}" href="#">
                    <i class="nav-icon i-File-Horizontal-Text"></i>
                    <span class="nav-text">QAE Generator</span>
                </a>
                <div class="triangle"></div>
            </li>

            <li class="nav-item">
                <a class="nav-item-hold {{ Route::currentRouteName()=='qds' ? 'open' : '' }}" href="{{route('qds')}}" href="#">
                    <i class="nav-icon i-Safe-Box1"></i>
                    <span class="nav-text">QDS</span>
                </a>
                <div class="triangle"></div>
            </li>

            <li class="nav-item">
                <a class="nav-item-hold {{ Route::currentRouteName()=='documentation' ? 'open' : '' }}" href="{{route('documentation')}}" href="#">
                    <i class="nav-icon i-Safe-Box1"></i>
                    <span class="nav-text">Documentation</span>
                </a>
                <div class="triangle"></div>
            </li>

        </ul>
    </div>

    <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <!-- Submenu Dashboards -->

<!--=============== Wallet childNav ================-->

         <ul class="childNav" data-parent="wallet">

             <p class="text-small text-muted text-center">Select Wallet </p>
                         <li class="nav-item ">
                <a class="{{ Route::currentRouteName()=='testwallet' ? 'open' : '' }}" href="{{route('testwallet')}}">
                    <i class="nav-icon i-Wallet"></i>
                    <span class="item-name">QjmG1....ERsYk</span>
                </a>
            </li>
<div class="separator-breadcrumb border-top"></div>
            <li class="nav-item ">
                <a class="{{ Route::currentRouteName()=='dashboard' ? 'open' : '' }}" href="{{route('wallet')}}">
                    <i class="nav-icon i-Clock-3"></i><div>
                    <span class="item-name">Create Wallet</span></div>
                </a>
            </li>
            <li class="nav-item ">
                <a class="{{ Route::currentRouteName()=='dashboard' ? 'open' : '' }}" href="{{route('wallet')}}">
                    <i class="nav-icon i-Clock-3"></i>
                    <span class="item-name">Import Wallet</span>
                </a>
            </li>
                        <li class="nav-item ">
                <a class="{{ Route::currentRouteName()=='dashboard' ? 'open' : '' }}" href="{{route('wallet')}}">
                    <i class="nav-icon i-Clock-3"></i>
                    <span class="item-name">Rename Wallets</span>
                </a>
            </li>
                        <li class="nav-item ">
                <a class="{{ Route::currentRouteName()=='dashboard' ? 'open' : '' }}" href="{{route('wallet')}}">
                    <i class="nav-icon i-Clock-3"></i>
                    <span class="item-name">Delete Wallets</span>
                </a>
            </li>
                        <li class="nav-item ">
                <a class="{{ Route::currentRouteName()=='dashboard' ? 'open' : '' }}" href="{{route('wallet')}}">
                    <i class="nav-icon i-Clock-3"></i>
                    <span class="item-name">Log Out / Clear Cache</span>
                </a>
            </li>
        </ul>

<!--=============== Explorer childNav ================-->

        <ul class="childNav" data-parent="explorer">

            <li class="nav-item ">
                <a class="{{ Route::currentRouteName()=='dashboard' ? 'open' : '' }}" href="{{route('dashboard')}}">
                    <i class="nav-icon i-Clock-3"></i>
                    <span class="item-name">Transactions</span>
                </a>
            </li>

            <li class="nav-item ">
                <a class="{{ Route::currentRouteName()=='dashboard' ? 'open' : '' }}" href="{{route('dashboard')}}">
                    <i class="nav-icon i-Clock-3"></i>
                    <span class="item-name">Top Wallets</span>
                </a>
            </li>

            <li class="nav-item ">
                <a class="{{ Route::currentRouteName()=='dashboard' ? 'open' : '' }}" href="{{route('dashboard')}}">
                    <i class="nav-icon i-Clock-3"></i>
                    <span class="item-name">Delegate Monitor</span>
                </a>
            </li>

            <li class="nav-item ">
                <a class="{{ Route::currentRouteName()=='dashboard' ? 'open' : '' }}" href="{{route('dashboard')}}">
                    <i class="nav-icon i-Clock-3"></i>
                    <span class="item-name">QAE Overview</span>
                </a>
            </li>

        </ul>
    </div>
    <div class="sidebar-overlay"></div>
</div>
<!--=============== Left side End ================-->
