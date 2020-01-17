<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <ul class="navigation-left">
            <li class="nav-item {{ request()->is('starter/*') ? 'active' : '' }}" data-item="starter">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Windows-2"></i>
                    <span class="nav-text">Home</span>
                </a>
                <div class="triangle"></div>
            </li>

            <li class="nav-item">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Wallet"></i>
                    <span class="nav-text">QAE Wallet</span>
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
                <a class="nav-item-hold" href="#">
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
        </ul>
    </div>

    <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <!-- Submenu Dashboards -->
        <ul class="childNav" data-parent="starter">
            <li class="nav-item ">
                <a class="{{ Route::currentRouteName()=='dashboard' ? 'open' : '' }}" href="{{route('dashboard')}}">
                    <i class="nav-icon i-Clock-3"></i>
                    <span class="item-name">Dashboard</span>
                </a>
            </li>
            <li class="nav-item ">
                <a class="{{ Route::currentRouteName()=='dashboard' ? 'open' : '' }}" href="{{route('dashboard')}}">
                    <i class="nav-icon i-Clock-3"></i>
                    <span class="item-name">Dashboard</span>
                </a>
            </li>
        </ul>

    </div>
    <div class="sidebar-overlay"></div>
</div>
<!--=============== Left side End ================-->
