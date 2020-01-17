<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <ul class="navigation-left">



            <li class="nav-item">
                <a class="nav-item-hold {{ Route::currentRouteName()=='home' ? 'open' : '' }}" href="{{route('home')}}" href="#">
                    <i class="nav-icon i-Home1"></i>
                    <span class="nav-text">Home</span>
                </a>
                <div class="triangle"></div>
            </li>

            <li class="nav-item">
                <li class="nav-item {{ request()->is('starter/*') ? 'open' : '' }}" data-item="wallet">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Wallet"></i>
                    <span class="nav-text">Web Wallet</span>
                </a>
                <div class="triangle"></div>
            </li>

            <li class="nav-item">
                <li class="nav-item {{ request()->is('starter/*') ? 'open' : '' }}" data-item="explorer">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Monitor-Analytics"></i>
                    <span class="nav-text">Explorer</span>
                </a>
                <div class="triangle"></div>
            </li>

            <li class="nav-item">
                <li class="nav-item {{ request()->is('starter/*') ? 'open' : '' }}" data-item="tools">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Coding"></i>
                    <span class="nav-text">Tools</span>
                </a>
                <div class="triangle"></div>
            </li>

             <li class="nav-item {{ request()->is('starter/*') ? 'open' : '' }}" data-item="documentation">
                <a class="nav-item-hold {{ Route::currentRouteName()=='documentation' ? 'open' : '' }}" href="{{route('documentation')}}" href="#">
                    <i class="nav-icon i-Folder-With-Document"></i>
                    <span class="nav-text">Documentation</span>
                </a>
                <div class="triangle"></div>
            </li>

            <li class="nav-item {{ request()->is('starter/*') ? 'open' : '' }}" data-item="exchanges">
                <a class="nav-item-hold {{ Route::currentRouteName()=='404' ? 'open' : '' }}" href="{{route('404')}}" href="#">
                    <i class="nav-icon i-Shop"></i>
                    <span class="nav-text">Exchanges</span>
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
                    <i class="nav-icon i-Arrow-Right-2"></i><div>
                    <span class="item-name">Create Wallet</span></div>
                </a>
            </li>
            <li class="nav-item ">
                <a class="{{ Route::currentRouteName()=='dashboard' ? 'open' : '' }}" href="{{route('wallet')}}">
                    <i class="nav-icon i-Arrow-Right-2"></i>
                    <span class="item-name">Import Wallet</span>
                </a>
            </li>
                        <li class="nav-item ">
                <a class="{{ Route::currentRouteName()=='dashboard' ? 'open' : '' }}" href="{{route('wallet')}}">
                    <i class="nav-icon i-Arrow-Right-2"></i>
                    <span class="item-name">Rename Wallets</span>
                </a>
            </li>
                        <li class="nav-item ">
                <a class="{{ Route::currentRouteName()=='dashboard' ? 'open' : '' }}" href="{{route('wallet')}}">
                    <i class="nav-icon i-Arrow-Right-2"></i>
                    <span class="item-name">Delete Wallets</span>
                </a>
            </li>
                        <li class="nav-item ">
                <a class="{{ Route::currentRouteName()=='dashboard' ? 'open' : '' }}" href="{{route('wallet')}}">
                    <i class="nav-icon i-Remove"></i>
                    <span class="item-name">Log Out / Clear Cache</span>
                </a>
            </li>

        </ul>

<!--=============== Explorer childNav ================-->

        <ul class="childNav" data-parent="explorer">

            <li class="nav-item ">
                <a class="{{ Route::currentRouteName()=='dashboard' ? 'open' : '' }}" href="{{route('dashboard')}}">
                    <i class="nav-icon i-Arrow-Right-2"></i>
                    <span class="item-name">Transactions</span>
                </a>
            </li>

            <li class="nav-item ">
                <a class="{{ Route::currentRouteName()=='dashboard' ? 'open' : '' }}" href="{{route('dashboard')}}">
                    <i class="nav-icon i-Arrow-Right-2"></i>
                    <span class="item-name">Top Wallets</span>
                </a>
            </li>

            <li class="nav-item ">
                <a class="{{ Route::currentRouteName()=='dashboard' ? 'open' : '' }}" href="{{route('dashboard')}}">
                    <i class="nav-icon i-Arrow-Right-2"></i>
                    <span class="item-name">Delegate Monitor</span>
                </a>
            </li>

            <li class="nav-item ">
                <a class="{{ Route::currentRouteName()=='dashboard' ? 'open' : '' }}" href="{{route('dashboard')}}">
                    <i class="nav-icon i-Arrow-Right-2"></i>
                    <span class="item-name">QAE Overview</span>
                </a>
            </li>

        </ul>

    <!--=============== Tools childNav ================-->

    <ul class="childNav" data-parent="tools">

                    <li class="nav-item ">
                <a class="{{ Route::currentRouteName()=='404' ? 'open' : '' }}" href="{{route('404')}}">
                    <i class="nav-icon i-Arrow-Right-2"></i>
                    <span class="item-name">Desktop App</span>
                </a>
            </li>

            <li class="nav-item ">
                <a class="{{ Route::currentRouteName()=='404' ? 'open' : '' }}" href="{{route('404')}}">
                    <i class="nav-icon i-Arrow-Right-2"></i>
                    <span class="item-name">Mobile App</span>
                </a>
            </li>
<div class="separator-breadcrumb border-bottom"></div>

            <li class="nav-item ">
                <a class="{{ Route::currentRouteName()=='paperwallet' ? 'open' : '' }}" href="{{route('paperwallet')}}">
                    <i class="nav-icon i-Arrow-Right-2"></i>
                    <span class="item-name">Paper Wallet</span>
                </a>
            </li>


            <li class="nav-item ">
                <a class="{{ Route::currentRouteName()=='batch' ? 'open' : '' }}" href="{{route('batch')}}">
                    <i class="nav-icon i-Arrow-Right-2"></i>
                    <span class="item-name">Batch Sender</span>
                </a>
            </li>

            <li class="nav-item ">
                <a class="{{ Route::currentRouteName()=='generator' ? 'open' : '' }}" href="{{route('generator')}}">
                    <i class="nav-icon i-Arrow-Right-2"></i>
                    <span class="item-name">QAE JSON Generator</span>
                </a>
            </li>

            <li class="nav-item ">
                <a class="{{ Route::currentRouteName()=='qds' ? 'open' : '' }}" href="{{route('qds')}}">
                    <i class="nav-icon i-Arrow-Right-2"></i>
                    <span class="item-name">Qredit Data Server</span>
                </a>
            </li>

            <li class="nav-item ">
                <a class="{{ Route::currentRouteName()=='404' ? 'open' : '' }}" href="{{route('404')}}">
                    <i class="nav-icon i-Arrow-Right-2"></i>
                    <span class="item-name">Delegate Monitor</span>
                </a>
            </li>

            <li class="nav-item ">
                <a class="{{ Route::currentRouteName()=='404' ? 'open' : '' }}" href="{{route('404')}}">
                    <i class="nav-icon i-Arrow-Right-2"></i>
                    <span class="item-name">Voting Calculator</span>
                </a>
            </li>

  </ul>

    <!--=============== Documentation childNav ================-->

    <ul class="childNav" data-parent="documentation">

            <li class="nav-item ">
                <a class="{{ Route::currentRouteName()=='404' ? 'open' : '' }}" href="{{route('404')}}">
                    <i class="nav-icon i-Arrow-Right-2"></i>
                    <span class="item-name">Blockchain Parameters</span>
                </a>
            </li>

            <li class="nav-item ">
                <a class="{{ Route::currentRouteName()=='404' ? 'open' : '' }}" href="{{route('404')}}">
                    <i class="nav-icon i-Arrow-Right-2"></i>
                    <span class="item-name">Libraries</span>
                </a>
            </li>

            <li class="nav-item ">
                <a class="{{ Route::currentRouteName()=='404' ? 'open' : '' }}" href="{{route('404')}}">
                    <i class="nav-icon i-Arrow-Right-2"></i>
                    <span class="item-name">Exchange Integration</span>
                </a>
            </li>

            <li class="nav-item ">
                <a class="{{ Route::currentRouteName()=='404' ? 'open' : '' }}" href="{{route('404')}}">
                    <i class="nav-icon i-Arrow-Right-2"></i>
                    <span class="item-name">Node Management</span>
                </a>
            </li>

            <li class="nav-item ">
                <a class="{{ Route::currentRouteName()=='404' ? 'open' : '' }}" href="{{route('404')}}">
                    <i class="nav-icon i-Arrow-Right-2"></i>
                    <span class="item-name">QAE Integration</span>
                </a>
            </li>

            <li class="nav-item ">
                <a class="{{ Route::currentRouteName()=='404' ? 'open' : '' }}" href="{{route('404')}}">
                    <i class="nav-icon i-Arrow-Right-2"></i>
                    <span class="item-name">API Documentation</span>
                </a>
            </li>

            <li class="nav-item ">
                <a class="{{ Route::currentRouteName()=='404' ? 'open' : '' }}" href="{{route('404')}}">
                    <i class="nav-icon i-Arrow-Right-2"></i>
                    <span class="item-name">Delegates</span>
                </a>
            </li>
  </ul>



  </div>
    <div class="sidebar-overlay"></div>
</div>
<!--=============== Left side End ================-->
