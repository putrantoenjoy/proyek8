<!-- HEADER -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <header class="header">
        <div class="header__inner">

            <!-- Brand -->
            <div class="header__brand">
                <div class="brand-wrap">

                    <!-- Brand logo -->
                    <a href="index.html" class="brand-img stretched-link">
                        <img src="{{url('assets/img/logo.svg')}}" alt="Nifty Logo" class="Nifty logo" width="40" height="40">
                    </a>

                    <!-- Brand title -->
                    <div class="brand-title">Nifty</div>

                    <!-- You can also use IMG or SVG instead of a text element. -->

                </div>
            </div>
            <!-- End - Brand -->

            <div class="header__content">

                <!-- Content Header - Left Side: -->
                <div class="header__content-start">

                    <!-- Navigation Toggler -->
                    <button type="button" class="nav-toggler header__btn btn btn-icon btn-sm" aria-label="Nav Toggler">
                        <i class="demo-psi-view-list"></i>
                    </button>

                    <!-- Searchbox -->
                    {{-- <div class="header-searchbox">

                        <!-- Searchbox toggler for small devices -->
                        <label for="header-search-input" class="header__btn d-md-none btn btn-icon rounded-pill shadow-none border-0 btn-sm" type="button">
                            <i class="demo-psi-magnifi-glass"></i>
                        </label>

                        <!-- Searchbox input -->
                        <form class="searchbox searchbox--auto-expand searchbox--hide-btn input-group">
                            <input id="header-search-input" class="searchbox__input form-control bg-transparent" type="search" placeholder="Type for search . . ." aria-label="Search">
                            <div class="searchbox__backdrop">
                                <button class="searchbox__btn header__btn btn btn-icon rounded shadow-none border-0 btn-sm" type="button" id="button-addon2">
                                    <i class="demo-pli-magnifi-glass"></i>
                                </button>
                            </div>
                        </form>
                    </div> --}}
                </div>
                <!-- End - Content Header - Left Side -->

                <!-- Content Header - Right Side: -->
                <div class="header__content-end">

                    <!-- Mega Dropdown -->
                    <div class="dropdown">

                        <!-- Toggler -->
                        <button class="header__btn btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-label="Megamenu dropdown" aria-expanded="false">
                            <i class="demo-psi-layout-grid"></i>
                        </button>

                        <!-- Mega Dropdown Menu -->
                        <div class="dropdown-menu dropdown-menu-end p-3 mega-dropdown">
                            <div class="row">
                                <div class="col-md-3">

                                    <!-- Pages List Group -->
                                    <div class="list-group list-group-borderless">
                                        <div class="list-group-item d-flex align-items-center border-bottom mb-2">
                                            <div class="flex-shrink-0 me-2">
                                                <i class="demo-pli-file fs-4"></i>
                                            </div>
                                            <h5 class="flex-grow-1 m-0">Pages</h5>
                                        </div>
                                        <a href="#" class="list-group-item list-group-item-action">Profile</a>
                                        <a href="#" class="list-group-item list-group-item-action">Search Result</a>
                                        <a href="#" class="list-group-item list-group-item-action">FAQ</a>
                                        <a href="#" class="list-group-item list-group-item-action">Screen Lock</a>
                                        <a href="#" class="list-group-item list-group-item-action">Maintenance</a>
                                        <a href="#" class="list-group-item list-group-item-action">Invoices</a>
                                        <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Disabled Item</a>
                                    </div>

                                </div>
                                <div class="col-md-3">

                                    <!-- Mailbox list group -->
                                    <div class="list-group list-group-borderless mb-3">
                                        <div class="list-group-item d-flex align-items-center border-bottom mb-2">
                                            <div class="flex-shrink-0 me-2">
                                                <i class="demo-pli-mail fs-4"></i>
                                            </div>
                                            <h5 class="flex-grow-1 m-0">Mailbox</h5>
                                        </div>
                                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                            Inbox <span class="badge bg-danger rounded-pill">14</span>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">Read Messages</a>
                                        <a href="#" class="list-group-item list-group-item-action">Compose</a>
                                        <a href="#" class="list-group-item list-group-item-action">Template</a>
                                    </div>

                                    <!-- News -->
                                    <div class="list-group list-group-borderless">
                                        <div class="list-group-item d-flex align-items-center border-bottom">
                                            <div class="flex-shrink-0 me-2">
                                                <i class="demo-pli-calendar-4 fs-4"></i>
                                            </div>
                                            <h5 class="flex-grow-1 m-0">News</h5>
                                        </div>
                                        <small class="list-group-item">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic dolore unde autem, molestiae eum laborum aliquid at commodi cum? Blanditiis.
                                        </small>
                                    </div>

                                </div>
                                <div class="col-md-3">

                                    <!-- List Group -->
                                    <div class="list-group list-group-borderless">
                                        <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                            <div class="flex-shrink-0 me-3">
                                                <i class="demo-pli-data-settings fs-2"></i>
                                            </div>
                                            <div class="flex-grow-1 ">
                                                <div class="d-flex justify-content-between align-items-start">
                                                    <a href="#" class="h6 d-block mb-1 stretched-link text-decoration-none">Data Backup</a>
                                                    <span class="badge bg-success rounded-pill ms-auto">40%</span>
                                                </div>
                                                <small class="text-muted">Current usage of disks for backups.</small>
                                            </div>
                                        </div>

                                        <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                            <div class="flex-shrink-0 me-3">
                                                <i class="demo-pli-support fs-2"></i>
                                            </div>
                                            <div class="flex-grow-1 ">
                                                <a href="#" class="h6 d-block mb-1 stretched-link text-decoration-none">Support</a>
                                                <small class="text-muted">Have any questions ? please don't hesitate to ask.</small>
                                            </div>
                                        </div>

                                        <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                            <div class="flex-shrink-0 me-3">
                                                <i class="demo-pli-computer-secure fs-2"></i>
                                            </div>
                                            <div class="flex-grow-1 ">
                                                <a href="#" class="h6 d-block mb-1 stretched-link text-decoration-none">Security</a>
                                                <small class="text-muted">Our devices are secure and up-to-date.</small>
                                            </div>
                                        </div>

                                        <div class="list-group-item list-group-item-action d-flex align-items-start">
                                            <div class="flex-shrink-0 me-3">
                                                <i class="demo-pli-map-2 fs-2"></i>
                                            </div>
                                            <div class="flex-grow-1 ">
                                                <a href="#" class="h6 d-block mb-1 stretched-link text-decoration-none">Location</a>
                                                <small class="text-muted">From our location up here, we kept in close touch.</small>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-3">

                                    <!-- Simple gallery -->
                                    <div class="d-grid gap-2 ps-5 pe-2">
                                        <div class="row g-1 rounded-3 overflow-hidden">
                                            <div class="col-6 mt-0">
                                                <img class="img-fluid" src="assets/img/megamenu/img-1.jpg" alt="thumbnails" loading="lazy">
                                            </div>
                                            <div class="col-6 mt-0">
                                                <img class="img-fluid" src="assets/img/megamenu/img-3.jpg" alt="thumbnails" loading="lazy">
                                            </div>
                                            <div class="col-6">
                                                <img class="img-fluid" src="assets/img/megamenu/img-2.jpg" alt="thumbnails" loading="lazy">
                                            </div>
                                            <div class="col-6">
                                                <img class="img-fluid" src="assets/img/megamenu/img-4.jpg" alt="thumbnails" loading="lazy">
                                            </div>
                                            <div class="col-6">
                                                <img class="img-fluid" src="assets/img/megamenu/img-6.jpg" alt="thumbnails" loading="lazy">
                                            </div>
                                            <div class="col-6">
                                                <img class="img-fluid" src="assets/img/megamenu/img-5.jpg" alt="thumbnails" loading="lazy">
                                            </div>
                                        </div>
                                        <a href="#" class="btn btn-primary">Browse Gallery</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End - Mega Dropdown -->

                    <!-- Notification Dropdown -->
                    <div class="dropdown">

                        <!-- Toggler -->
                        <button class="header__btn btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-label="Notification dropdown" aria-expanded="false">
                            <span class="d-block position-relative">
                                <i class="demo-psi-bell"></i>
                                <span class="badge badge-super rounded bg-danger p-1">

                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </span>
                        </button>

                        <!-- Notification dropdown menu -->
                        <div class="dropdown-menu dropdown-menu-end w-md-300px">
                            <div class="border-bottom px-3 py-2 mb-3">
                                <h5>Notifications</h5>
                            </div>

                            <div class="list-group list-group-borderless">

                                <!-- List item -->
                                <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                    <div class="flex-shrink-0 me-3">
                                        <i class="demo-psi-data-settings text-muted fs-2"></i>
                                    </div>
                                    <div class="flex-grow-1 ">
                                        <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Your storage is full</a>
                                        <small class="text-muted">Local storage is nearly full.</small>
                                    </div>
                                </div>

                                <!-- List item -->
                                <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                    <div class="flex-shrink-0 me-3">
                                        <i class="demo-psi-file-edit text-blue-200 fs-2"></i>
                                    </div>
                                    <div class="flex-grow-1 ">
                                        <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Writing a New Article</a>
                                        <small class="text-muted">Wrote a news article for the John Mike</small>
                                    </div>
                                </div>

                                <!-- List item -->
                                <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                    <div class="flex-shrink-0 me-3">
                                        <i class="demo-psi-speech-bubble-7 text-green-300 fs-2"></i>
                                    </div>
                                    <div class="flex-grow-1 ">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <a href="#" class="h6 mb-0 stretched-link text-decoration-none">Comment sorting</a>
                                            <span class="badge bg-info rounded ms-auto">NEW</span>
                                        </div>
                                        <small class="text-muted">You have 1,256 unsorted comments.</small>
                                    </div>
                                </div>

                                <!-- List item -->
                                <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                    <div class="flex-shrink-0 me-3">
                                        <img class="img-xs rounded-circle" src="{{url('assets/img/profile-photos/7.png')}}" alt="Profile Picture" loading="lazy">
                                    </div>
                                    <div class="flex-grow-1 ">
                                        <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Lucy Sent you a message</a>
                                        <small class="text-muted">30 minutes ago</small>
                                    </div>
                                </div>

                                <!-- List item -->
                                <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                    <div class="flex-shrink-0 me-3">
                                        <img class="img-xs rounded-circle" src="{{url('assets/img/profile-photos/3.png')}}" alt="Profile Picture" loading="lazy">
                                    </div>
                                    <div class="flex-grow-1 ">
                                        <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Jackson Sent you a message</a>
                                        <small class="text-muted">1 hours ago</small>
                                    </div>
                                </div>

                                <div class="text-center mb-2">
                                    <a href="#" class="btn-link">Show all Notifications</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End - Notification dropdown -->

                    <!-- User dropdown -->
                    <div class="dropdown">

                        <!-- Toggler -->
                        <button class="header__btn btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-label="User dropdown" aria-expanded="false">
                            <i class="demo-psi-male"></i>
                        </button>

                        <!-- User dropdown menu -->
                        <div class="dropdown-menu dropdown-menu-end w-md-450px">

                            <!-- User dropdown header -->
                            <div class="d-flex align-items-center border-bottom px-3 py-2">
                                <div class="flex-shrink-0">
                                    <img class="img-sm rounded-circle" src="{{ url('assets/img/foto/profil/' . Auth::user()->image)}}" alt="Profile Picture" loading="lazy">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="mb-0">Aaron Chavez</h5>
                                    <span class="text-muted fst-italic"><a href="https://themeon.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2f4e4e5d4041704c474e594a556f4a574e425f434a014c4042">[email&#160;protected]</a></span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-7">

                                    <!-- Simple widget and reports -->
                                    <div class="list-group list-group-borderless mb-3">
                                        <div class="list-group-item text-center border-bottom mb-3">
                                            <p class="h1 display-1 text-green">17</p>
                                            <p class="h6 mb-0"><i class="demo-pli-basket-coins fs-3 me-2"></i> New orders</p>
                                            <small class="text-muted">You have new orders</small>
                                        </div>
                                        <div class="list-group-item py-0 d-flex justify-content-between align-items-center">
                                            Today Earning
                                            <small class="fw-bolder">$578</small>
                                        </div>
                                        <div class="list-group-item py-0 d-flex justify-content-between align-items-center">
                                            Tax
                                            <small class="fw-bolder text-danger">- $28</small>
                                        </div>
                                        <div class="list-group-item py-0 d-flex justify-content-between align-items-center">
                                            Total Earning
                                            <span class="fw-bold text-primary">$6,578</span>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-5">

                                    <!-- User menu link -->
                                    <div class="list-group list-group-borderless h-100 py-3">
                                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                            <span><i class="demo-pli-mail fs-5 me-2"></i> Messages</span>
                                            <span class="badge bg-danger rounded-pill">14</span>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <i class="demo-pli-male fs-5 me-2"></i> Profile
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <i class="demo-pli-gear fs-5 me-2"></i> Settings
                                        </a>

                                        <a href="#" class="list-group-item list-group-item-action mt-auto">
                                            <i class="demo-pli-computer-secure fs-5 me-2"></i> Lock screen
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <i class="demo-pli-unlock fs-5 me-2"></i> Logout
                                        </a>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End - User dropdown -->

                    <!-- Sidebar Toggler -->
                    <button class="sidebar-toggler header__btn btn btn-icon btn-sm" type="button" aria-label="Sidebar button">
                        <i class="demo-psi-dot-vertical"></i>
                    </button>

                </div>
            </div>
        </div>
    </header>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- END - HEADER -->

    <!-- MAIN NAVIGATION -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <nav id="mainnav-container" class="mainnav">
        <div class="mainnav__inner">

            <!-- Navigation menu -->
            <div class="mainnav__top-content scrollable-content pb-5">

                <!-- Profile Widget -->
                <div class="mainnav__profile mt-3 d-flex3">

                    <div class="mt-2 d-mn-max"></div>

                    <!-- Profile picture  -->
                    <div class="mininav-toggle text-center py-2">
                        <img class="mainnav__avatar img-md rounded-circle border" 
                        src="{{ (Auth::user()->image == null) ? url('assets/img/profile-photos/1.png') : url('assets/img/foto/profil/' . Auth::user()->image) }}"
                        alt="Profile Picture">
                    </div>

                    <div class="mininav-content collapse d-mn-max">
                        <div class="d-grid">

                            <!-- User name and position -->
                            <button class="d-block btn shadow-none p-2" data-bs-toggle="collapse" data-bs-target="#usernav" aria-expanded="false" aria-controls="usernav">
                                <span class="dropdown-toggle d-flex justify-content-center align-items-center">
                                    <h6 class="mb-0 me-3">{{ Auth::user()->first_name }}</h6>
                                </span>
                                <small class="text-muted">{{ Auth::user()->username }}</small>
                            </button>

                            <!-- Collapsed user menu -->
                            <div id="usernav" class="nav flex-column collapse">
                                <a href="#" class="nav-link d-flex justify-content-between align-items-center">
                                    <span><i class="demo-pli-mail fs-5 me-2"></i><span class="ms-1">Messages</span></span>
                                    <span class="badge bg-danger rounded-pill">14</span>
                                </a>
                                <a href="#" class="nav-link">
                                    <i class="demo-pli-male fs-5 me-2"></i>
                                    <span class="ms-1">Profile</span>
                                </a>
                                <a href="#" class="nav-link">
                                    <i class="demo-pli-gear fs-5 me-2"></i>
                                    <span class="ms-1">Settings</span>
                                </a>
                                <a href="#" class="nav-link">
                                    <i class="demo-pli-computer-secure fs-5 me-2"></i>
                                    <span class="ms-1">Lock screen</span>
                                </a>
                                <a href="#" class="nav-link">
                                    <i class="demo-pli-unlock fs-5 me-2"></i>
                                    <span class="ms-1">Logout</span>
                                </a>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- End - Profile widget -->

                <!-- Navigation Category -->
                <div class="mainnav__categoriy py-3">
                    <h6 class="mainnav__caption mt-0 px-3 fw-bold">Navigation</h6>
                    <ul class="mainnav__menu nav flex-column" id="myMenu">

                        <!-- Link with submenu -->
                        <li class="nav-item">

                            <a href="{{route('home')}}" class="mininav-toggle nav-link {{ Route::is('home') ? 'active' : ''  }}" id="menuDashboard"><i class="demo-pli-home fs-5 me-2"></i>
                                <span class="nav-label ms-1">Dashboard</span>
                            </a>

                            <!-- Dashboard submenu list -->
                            
                            <!-- END : Dashboard submenu list -->

                        </li>
                        @if(auth()->user()->hasRole('admin') || auth()->user()->hasRole('administrasi'))
                        <li class="nav-item">

                            <a href="{{route('form-index')}}" class="mininav-toggle nav-link {{ Route::is('form-index') ? 'active' : ''  }}" id="menuUser"><i class="bi bi-person fs-5 me-2"></i>
                                <span class="nav-label ms-1">User</span>
                            </a>

                            <!-- Dashboard submenu list -->
                            
                            <!-- END : Dashboard submenu list -->

                        </li>
                        @endif
                        <li class="nav-item">

                            <a href="{{ route('kategori-index') }}" class="mininav-toggle nav-link {{ Route::is('kategori-index') ? 'active' : ''  }}" id="menuKategori"><i class="bi bi-cart fs-5 me-2"></i>
                                <span class="nav-label ms-1">Kategori Produk</span>
                            </a>

                            <!-- Dashboard submenu list -->
                            
                            <!-- END : Dashboard submenu list -->

                        </li>
                        <li class="nav-item">

                            <a href="{{ route('satuan-index') }}" class="mininav-toggle nav-link {{ Route::is('satuan-index') ? 'active' : ''  }}" id="menuSatuan"><i class="bi bi-clipboard fs-5 me-2"></i>
                                <span class="nav-label ms-1">Satuan Produk</span>
                            </a>

                            <!-- Dashboard submenu list -->
                            
                            <!-- END : Dashboard submenu list -->

                        </li>
                        @role('admin')
                        <li class="nav-item">

                            <a href="{{ route('permission-index') }}" class="mininav-toggle nav-link {{ Route::is('permission-index') ? 'active' : ''  }}" id="menuPermission"><i class="bi bi-person-vcard fs-5 me-2"></i>
                                <span class="nav-label ms-1">Permission</span>
                            </a>

                            <!-- Dashboard submenu list -->
                            
                            <!-- END : Dashboard submenu list -->

                        </li>
                        <li class="nav-item">

                            <a href="{{ route('role-index') }}" class="mininav-toggle nav-link {{ Route::is('role-index') ? 'active' : ''  }}" id="menuRole"><i class="bi bi-gear fs-5 me-2"></i>
                                <span class="nav-label ms-1">Role</span>
                            </a>

                            <!-- Dashboard submenu list -->
                            
                            <!-- END : Dashboard submenu list -->

                        </li>
                        @endrole
                        <!-- END : Link with submenu -->

                        <!-- Link with submenu -->
                        {{-- <li class="nav-item has-sub">

                            <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-split-vertical-2 fs-5 me-2"></i>
                                <span class="nav-label ms-1">Layouts</span>
                            </a>

                            <!-- Layouts submenu list -->
                            <ul class="mininav-content nav collapse">
                                <li class="nav-item">
                                    <a href="layouts/minimal-navigation/index.html" class="nav-link">Mini Navigation</a>
                                </li>
                                <li class="nav-item">
                                    <a href="layouts/push-navigation/index.html" class="nav-link">Push Navigation</a>
                                </li>
                                <li class="nav-item">
                                    <a href="layouts/slide-navigation/index.html" class="nav-link">Slide Navigation</a>
                                </li>
                                <li class="nav-item">
                                    <a href="layouts/reveal-navigation/index.html" class="nav-link">Reveal Navigation</a>
                                </li>
                                <li class="nav-item">
                                    <a href="layouts/stuck-sidebar/index.html" class="nav-link">Stuck Sidebar</a>
                                </li>
                                <li class="nav-item">
                                    <a href="layouts/pinned-sidebar/index.html" class="nav-link">Pinned Sidebar</a>
                                </li>
                                <li class="nav-item">
                                    <a href="layouts/unite-sidebar/index.html" class="nav-link">Unite Sidebar</a>
                                </li>
                                <li class="nav-item">
                                    <a href="layouts/sticky-header/index.html" class="nav-link">Sticky Header</a>
                                </li>
                                <li class="nav-item">
                                    <a href="layouts/sticky-navigation/index.html" class="nav-link">Sticky Navigation</a>
                                </li>

                            </ul>
                            <!-- END : Layouts submenu list -->

                        </li> --}}
                        <!-- END : Link with submenu -->

                        <!-- Regular menu link -->
                        {{-- <li class="nav-item">
                            <a href="widgets/index.html" class="nav-link mininav-toggle"><i class="demo-pli-gear fs-5 me-2"></i>

                                <span class="nav-label mininav-content ms-1">Widgets</span>
                            </a>
                        </li> --}}
                        <!-- END : Regular menu link -->

                    </ul>
                </div>
                <!-- END : Navigation Category -->

                <!-- Components Category -->
                {{-- <div class="mainnav__categoriy py-3">
                    <h6 class="mainnav__caption mt-0 px-3 fw-bold">Components</h6>
                    <ul class="mainnav__menu nav flex-column">

                        <!-- Link with submenu -->
                        <li class="nav-item has-sub">

                            <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-boot-2 fs-5 me-2"></i>
                                <span class="nav-label ms-1">Ui Elements</span>
                            </a>

                            <!-- Ui Elements submenu list -->
                            <ul class="mininav-content nav collapse">
                                <li class="nav-item">
                                    <a href="ui-elements/buttons/index.html" class="nav-link">Buttons</a>
                                </li>
                                <li class="nav-item">
                                    <a href="ui-elements/cards/index.html" class="nav-link">Cards</a>
                                </li>
                                <li class="nav-item">
                                    <a href="ui-elements/dropdowns/index.html" class="nav-link">Dropdowns</a>
                                </li>
                                <li class="nav-item">
                                    <a href="ui-elements/typography/index.html" class="nav-link">Typography</a>
                                </li>
                                <li class="nav-item">
                                    <a href="ui-elements/list-group/index.html" class="nav-link">List Group</a>
                                </li>
                                <li class="nav-item">
                                    <a href="ui-elements/progress/index.html" class="nav-link">Progress</a>
                                </li>
                                <li class="nav-item">
                                    <a href="ui-elements/placeholders/index.html" class="nav-link d-flex align-items-center">Placeholders<span class="badge bg-danger ms-auto">NEW</span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="ui-elements/tabs-accordions/index.html" class="nav-link">Tabs &amp; Accordions</a>
                                </li>
                                <li class="nav-item">
                                    <a href="ui-elements/components/index.html" class="nav-link">Components</a>
                                </li>
                                <li class="nav-item">
                                    <a href="ui-elements/tooltips-popovers/index.html" class="nav-link">Tooltips &amp; Popover</a>
                                </li>

                            </ul>
                            <!-- END : Ui Elements submenu list -->

                        </li>
                        <!-- END : Link with submenu -->

                        <!-- Link with submenu -->
                        <li class="nav-item has-sub">

                            <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-pen-5 fs-5 me-2"></i>
                                <span class="nav-label ms-1">Forms</span>
                            </a>

                            <!-- Forms submenu list -->
                            <ul class="mininav-content nav collapse">
                                <li class="nav-item">
                                    <a href="{{route('form-index')}}" class="nav-link">General</a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms/tags/index.html" class="nav-link">Tags</a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms/date-time-picker/index.html" class="nav-link">Date Time Picker</a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms/validation/index.html" class="nav-link">Validation</a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms/wizard/index.html" class="nav-link">Wizard</a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms/file-uploads/index.html" class="nav-link">File Uploads</a>
                                </li>
                                <li class="nav-item">
                                    <a href="forms/text-editor/index.html" class="nav-link">Text Editor</a>
                                </li>

                            </ul>
                            <!-- END : Forms submenu list -->

                        </li>
                        <!-- END : Link with submenu -->

                        <!-- Link with submenu -->
                        <li class="nav-item has-sub">

                            <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-receipt-4 fs-5 me-2"></i>
                                <span class="nav-label ms-1">Tables</span>
                            </a>

                            <!-- Tables submenu list -->
                            <ul class="mininav-content nav collapse">
                                <li class="nav-item">
                                    <a href="tables/static-tables/index.html" class="nav-link">Static Tables</a>
                                </li>
                                <li class="nav-item">
                                    <a href="tables/gridjs/index.html" class="nav-link">Gridjs</a>
                                </li>
                                <li class="nav-item">
                                    <a href="tables/tabulator/index.html" class="nav-link">Tabulator</a>
                                </li>

                            </ul>
                            <!-- END : Tables submenu list -->

                        </li>
                        <!-- END : Link with submenu -->

                        <!-- Link with submenu -->
                        <li class="nav-item has-sub">

                            <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-bar-chart fs-5 me-2"></i>
                                <span class="nav-label ms-1">Charts</span>
                            </a>

                            <!-- Charts submenu list -->
                            <ul class="mininav-content nav collapse">
                                <li class="nav-item">
                                    <a href="charts/chart.js/index.html" class="nav-link">ChartJS</a>
                                </li>
                                <li class="nav-item">
                                    <a href="charts/charts.css/index.html" class="nav-link">ChartsCSS</a>
                                </li>
                                <li class="nav-item">
                                    <a href="charts/sparklines/index.html" class="nav-link">Sparklines</a>
                                </li>

                            </ul>
                            <!-- END : Charts submenu list -->

                        </li>
                        <!-- END : Link with submenu -->

                        <!-- Link with submenu -->
                        <li class="nav-item has-sub">

                            <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-repair fs-5 me-2"></i>
                                <span class="nav-label ms-1">Miscellaneous</span>
                            </a>

                            <!-- Miscellaneous submenu list -->
                            <ul class="mininav-content nav collapse">
                                <li class="nav-item">
                                    <a href="miscellaneous/timeline/index.html" class="nav-link">Timeline</a>
                                </li>
                                <li class="nav-item">
                                    <a href="miscellaneous/loader.css/index.html" class="nav-link">Loader.CSS</a>
                                </li>
                                <li class="nav-item">
                                    <a href="miscellaneous/spinkit/index.html" class="nav-link">Spinkit</a>
                                </li>
                                <li class="nav-item">
                                    <a href="miscellaneous/clipboard/index.html" class="nav-link">Clipboard</a>
                                </li>

                            </ul>
                            <!-- END : Miscellaneous submenu list -->

                        </li>
                        <!-- END : Link with submenu -->

                    </ul>
                </div> --}}
                <!-- END : Components Category -->

                <!-- More Category -->
                {{-- <div class="mainnav__categoriy py-3">
                    <h6 class="mainnav__caption mt-0 px-3 fw-bold">More</h6>
                    <ul class="mainnav__menu nav flex-column">

                        <!-- Link with submenu -->
                        <li class="nav-item has-sub">

                            <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-computer-secure fs-5 me-2"></i>
                                <span class="nav-label ms-1">App Views</span>
                            </a>

                            <!-- App Views submenu list -->
                            <ul class="mininav-content nav collapse">
                                <li class="nav-item">
                                    <a href="app-views/file-manager/index.html" class="nav-link">File Manager</a>
                                </li>
                                <li class="nav-item">
                                    <a href="app-views/users/index.html" class="nav-link">Users</a>
                                </li>
                                <li class="nav-item">
                                    <a href="app-views/users-2/index.html" class="nav-link">Users 2</a>
                                </li>
                                <li class="nav-item">
                                    <a href="app-views/profile/index.html" class="nav-link">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a href="app-views/calendar/index.html" class="nav-link">Calendar</a>
                                </li>
                                <li class="nav-item">
                                    <a href="app-views/taskboard/index.html" class="nav-link">Taskboard</a>
                                </li>
                                <li class="nav-item">
                                    <a href="app-views/chat/index.html" class="nav-link">Chat</a>
                                </li>
                                <li class="nav-item">
                                    <a href="app-views/contact-us/index.html" class="nav-link">Contact Us</a>
                                </li>

                            </ul>
                            <!-- END : App Views submenu list -->

                        </li>
                        <!-- END : Link with submenu -->

                        <!-- Link with submenu -->
                        <li class="nav-item has-sub">

                            <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-speech-bubble-5 fs-5 me-2"></i>
                                <span class="nav-label ms-1">Blog Apps</span>
                            </a>

                            <!-- Blog Apps submenu list -->
                            <ul class="mininav-content nav collapse">
                                <li class="nav-item">
                                    <a href="blog-apps/blog/index.html" class="nav-link">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-apps/blog-list/index.html" class="nav-link">Blog List</a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-apps/blog-list-2/index.html" class="nav-link">Blog List 2</a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-apps/blog-article/index.html" class="nav-link">Blog Article</a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-apps/manage-posts/index.html" class="nav-link">Manage Posts</a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-apps/add-edit-posts/index.html" class="nav-link">Add Edit Posts</a>
                                </li>

                            </ul>
                            <!-- END : Blog Apps submenu list -->

                        </li>
                        <!-- END : Link with submenu -->

                        <!-- Link with submenu -->
                        <li class="nav-item has-sub">

                            <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-mail fs-5 me-2"></i>
                                <span class="nav-label ms-1">Email</span>
                            </a>

                            <!-- Email submenu list -->
                            <ul class="mininav-content nav collapse">
                                <li class="nav-item">
                                    <a href="email/inbox/index.html" class="nav-link">Inbox</a>
                                </li>
                                <li class="nav-item">
                                    <a href="email/view-message/index.html" class="nav-link">View Message</a>
                                </li>
                                <li class="nav-item">
                                    <a href="email/compose-message/index.html" class="nav-link">Compose Message</a>
                                </li>

                            </ul>
                            <!-- END : Email submenu list -->

                        </li>
                        <!-- END : Link with submenu -->

                        <!-- Link with submenu -->
                        <li class="nav-item has-sub">

                            <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-file-html fs-5 me-2"></i>
                                <span class="nav-label ms-1">Other Pages</span>
                            </a>

                            <!-- Other Pages submenu list -->
                            <ul class="mininav-content nav collapse">
                                <li class="nav-item">
                                    <a href="other-pages/blank-page/index.html" class="nav-link">Blank Page</a>
                                </li>
                                <li class="nav-item">
                                    <a href="other-pages/invoice/index.html" class="nav-link">Invoice</a>
                                </li>
                                <li class="nav-item">
                                    <a href="other-pages/search-results/index.html" class="nav-link">Search Results</a>
                                </li>
                                <li class="nav-item">
                                    <a href="other-pages/faq/index.html" class="nav-link">FAQ</a>
                                </li>
                                <li class="nav-item">
                                    <a href="other-pages/pricing-tables/index.html" class="nav-link">Pricing Tables</a>
                                </li>
                                <li class="nav-item">
                                    <a href="other-pages/error-404/index.html" class="nav-link">Error 404</a>
                                </li>
                                <li class="nav-item">
                                    <a href="other-pages/error-500/index.html" class="nav-link">Error 500</a>
                                </li>

                            </ul>
                            <!-- END : Other Pages submenu list -->

                        </li>
                        <!-- END : Link with submenu -->

                        <!-- Link with submenu -->
                        <li class="nav-item has-sub">

                            <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-window-2 fs-5 me-2"></i>
                                <span class="nav-label ms-1">Front Pages</span>
                            </a>

                            <!-- Front Pages submenu list -->
                            <ul class="mininav-content nav collapse">
                                <li class="nav-item">
                                    <a href="front-pages/error-404/index.html" class="nav-link">Error 404</a>
                                </li>
                                <li class="nav-item">
                                    <a href="front-pages/error-500/index.html" class="nav-link">Error 500</a>
                                </li>
                                <li class="nav-item">
                                    <a href="front-pages/maintenance/index.html" class="nav-link">Maintenance</a>
                                </li>
                                <li class="nav-item">
                                    <a href="front-pages/login/index.html" class="nav-link">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a href="front-pages/register/index.html" class="nav-link">Register</a>
                                </li>
                                <li class="nav-item">
                                    <a href="front-pages/password-reminder/index.html" class="nav-link">Password Reminder</a>
                                </li>
                                <li class="nav-item">
                                    <a href="front-pages/lock-screen/index.html" class="nav-link">Lock Screen</a>
                                </li>

                            </ul>
                            <!-- END : Front Pages submenu list -->

                        </li>
                        <!-- END : Link with submenu -->

                        <!-- Link with submenu -->
                        <li class="nav-item has-sub">

                            <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-tactic fs-5 me-2"></i>
                                <span class="nav-label ms-1">Menu Levels</span>
                            </a>

                            <!-- Menu Levels submenu list -->
                            <ul class="mininav-content nav collapse">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Menu Link</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Menu Link</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Menu Link</a>
                                </li>
                                <li class="nav-item has-sub">
                                    <a href="#" class="mininav-toggle nav-link collapsed">Submenu</a>
                                    <ul class="mininav-content nav collapse">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Menu Link</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Menu Link</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Menu Link</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Menu Link</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item has-sub">
                                    <a href="#" class="mininav-toggle nav-link collapsed">Submenu</a>
                                    <ul class="mininav-content nav collapse">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Menu Link</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Menu Link</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Menu Link</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Menu Link</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- END : Menu Levels submenu list -->

                        </li>
                        <!-- END : Link with submenu -->

                    </ul>
                </div>
                <!-- END : More Category -->

                <!-- Extras Category -->
                <div class="mainnav__categoriy py-3">
                    <h6 class="mainnav__caption mt-0 px-3 fw-bold">Extras</h6>
                    <ul class="mainnav__menu nav flex-column">

                        <!-- Link with submenu -->
                        <li class="nav-item has-sub">

                            <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-happy fs-5 me-2"></i>
                                <span class="nav-label ms-1">Icons Pack</span>
                            </a>

                            <!-- Icons Pack submenu list -->
                            <ul class="mininav-content nav collapse">
                                <li class="nav-item">
                                    <a href="icons-pack/ionicons/index.html" class="nav-link">Ionicons</a>
                                </li>
                                <li class="nav-item">
                                    <a href="icons-pack/themify-icons/index.html" class="nav-link">Themify Icons</a>
                                </li>
                                <li class="nav-item">
                                    <a href="icons-pack/flag-icon-css/index.html" class="nav-link">Flag Icon CSS</a>
                                </li>
                                <li class="nav-item">
                                    <a href="icons-pack/weather-icons/index.html" class="nav-link">Weather Icons</a>
                                </li>

                            </ul>
                            <!-- END : Icons Pack submenu list -->

                        </li>
                        <!-- END : Link with submenu -->

                        <!-- Link with submenu -->
                        <li class="nav-item has-sub">

                            <a href="#" class="mininav-toggle nav-link collapsed"><i class="demo-pli-medal-2 fs-5 me-2"></i>
                                <span class="nav-label ms-1">Premium Icons</span>
                            </a>

                            <!-- Premium Icons submenu list -->
                            <ul class="mininav-content nav collapse">
                                <li class="nav-item">
                                    <a href="premium-icons/line-icons-pack/index.html" class="nav-link">Line Icons Pack</a>
                                </li>
                                <li class="nav-item">
                                    <a href="premium-icons/solid-icons-pack/index.html" class="nav-link">Solid Icons Pack</a>
                                </li>

                            </ul>
                            <!-- END : Premium Icons submenu list -->

                        </li>
                        <!-- END : Link with submenu -->

                    </ul>
                </div> --}}
                <!-- END : Extras Category -->

                <!-- Widget -->
                <div class="mainnav__profile">

                    <!-- Widget buttton form small navigation -->
                    <div class="mininav-toggle text-center py-2 d-mn-min">
                        <i class="demo-pli-monitor-2"></i>
                    </div>

                    <div class="d-mn-max mt-5"></div>

                    <!-- Widget content -->
                    {{-- <div class="mininav-content collapse d-mn-max">
                        <h6 class="mainnav__caption px-3 fw-bold">Server Status</h6>
                        <ul class="list-group list-group-borderless">
                            <li class="list-group-item text-reset">
                                <div class="d-flex justify-content-between align-items-start">
                                    <p class="mb-2 me-auto">CPU Usage</p>
                                    <span class="badge bg-info rounded">35%</span>
                                </div>
                                <div class="progress progress-md">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 35%" aria-label="CPU Progress" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="list-group-item text-reset">
                                <div class="d-flex justify-content-between align-items-start">
                                    <p class="mb-2 me-auto">Bandwidth</p>
                                    <span class="badge bg-warning rounded">73%</span>
                                </div>
                                <div class="progress progress-md">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 73%" aria-label="Bandwidth Progress" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                        </ul>
                        <div class="d-grid px-3 mt-3">
                            <a href="#" class="btn btn-sm btn-success">View Details</a>
                        </div>
                    </div> --}}
                </div>
                <!-- End - Profile widget -->

            </div>
            <!-- End - Navigation menu -->

            <!-- Bottom navigation menu -->
            <div class="mainnav__bottom-content border-top pb-2">
                <ul id="mainnav" class="mainnav__menu nav flex-column">
                    <li class="nav-item">
                        <a href="logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link mininav-toggle collapsed" aria-expanded="false">
                            <i class="demo-pli-unlock fs-5 me-2"></i>
                            <span class=" ms-1">Keluar</span>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </a>
                        {{-- <ul class="mininav-content nav flex-column collapse">
                            <li class="nav-item">
                                <a href="#" class="nav-link">This device only</a>
                            </li>
                            <li class="nav-item"><a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">All Devices</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Lock screen</a>
                            </li>
                        </ul> --}}
                    </li>
                </ul>
            </div>
            <!-- End - Bottom navigation menu -->

        </div>
    </nav>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- END - MAIN NAVIGATION -->

    <!-- SIDEBAR -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <aside class="sidebar">
        <div class="sidebar__inner scrollable-content">

            <!-- This element is only visible when sidebar Stick mode is active. -->
            <div class="sidebar__stuck align-item-center mb-3 px-4">
                <p class="m-0 text-danger">Close the sidebar =></p>
                <button type="button" class="sidebar-toggler btn-close btn-lg rounded-circle ms-auto" aria-label="Close"></button>
            </div>

            <!-- Sidebar tabs nav -->
            <div class="sidebar__wrap">
                <nav class="px-3">
                    <div class="nav nav-callout nav-fill flex-nowrap" id="nav-tab" role="tablist">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#nav-chat" type="button" role="tab" aria-controls="nav-chat" aria-selected="true">
                            <i class="d-block demo-pli-speech-bubble-5 fs-3 mb-2"></i>
                            <span>Chat</span>
                        </button>

                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-reports" type="button" role="tab" aria-controls="nav-reports" aria-selected="false">
                            <i class="d-block demo-pli-information fs-3 mb-2"></i>
                            <span>Reports</span>
                        </button>

                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-settings" type="button" role="tab" aria-controls="nav-settings" aria-selected="false">
                            <i class="d-block demo-pli-wrench fs-3 mb-2"></i>
                            <span>Settings</span>
                        </button>
                    </div>
                </nav>
            </div>
            <!-- End - Sidebar tabs nav -->

            <!-- Sideabar tabs content -->
            <div class="tab-content sidebar__wrap" id="nav-tabContent">

                <!-- Chat tab Content -->
                <div id="nav-chat" class="tab-pane fade py-4 show active" role="tabpanel" aria-labelledby="nav-chat-tab">

                    <!-- Family list group -->
                    <h5 class="px-3">Family</h5>
                    <div class="list-group list-group-borderless">

                        <div class="list-group-item list-group-item-action d-flex align-items-start mb-2">
                            <div class="flex-shrink-0 me-3">
                                <img class="img-xs rounded-circle" src="{{url('assets/img/profile-photos/2.png')}}" alt="Profile Picture" loading="lazy">
                            </div>
                            <div class="flex-grow-1 ">
                                <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Stephen Tran</a>
                                <small class="text-muted">Available</small>
                            </div>
                        </div>

                        <div class="list-group-item list-group-item-action d-flex align-items-start mb-2">
                            <div class="flex-shrink-0 me-3">
                                <img class="img-xs rounded-circle" src="{{url('assets/img/profile-photos/8.png')}}" alt="Profile Picture" loading="lazy">
                            </div>
                            <div class="flex-grow-1 ">
                                <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Betty Murphy</a>
                                <small class="text-muted">Iddle</small>
                            </div>
                        </div>

                        <div class="list-group-item list-group-item-action d-flex align-items-start mb-2">
                            <div class="flex-shrink-0 me-3">
                                <img class="img-xs rounded-circle" src="{{url('assets/img/profile-photos/7.png')}}" alt="Profile Picture" loading="lazy">
                            </div>
                            <div class="flex-grow-1 ">
                                <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Brittany Meyer</a>
                                <small class="text-muted">I think so!</small>
                            </div>
                        </div>

                        <div class="list-group-item list-group-item-action d-flex align-items-start mb-2">
                            <div class="flex-shrink-0 me-3">
                                <img class="img-xs rounded-circle" src="{{url('assets/img/profile-photos/4.png')}}" alt="Profile Picture" loading="lazy">
                            </div>
                            <div class="flex-grow-1 ">
                                <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Jack George</a>
                                <small class="text-muted">Last seen 2 hours ago</small>
                            </div>
                        </div>

                    </div>
                    <!-- End - Family list group -->

                    <!-- Friends Group -->
                    <h5 class="d-flex mt-5 px-3">Friends <span class="badge bg-success ms-auto">587 +</span></h5>
                    <div class="list-group list-group-borderless">
                        <a href="#" class="list-group-item list-group-item-action">
                            <span class="d-inline-block bg-success rounded-circle p-1"></span>
                            Joey K. Greyson
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <span class="d-inline-block bg-info rounded-circle p-1"></span>
                            Andrea Branden
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <span class="d-inline-block bg-warning rounded-circle p-1"></span>
                            Johny Juan
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <span class="d-inline-block bg-secondary rounded-circle p-1"></span>
                            Susan Sun
                        </a>
                    </div>
                    <!-- End - Friends Group -->

                    <!-- Simple news widget -->
                    <div class="px-3">
                        <h5 class="mt-5">News</h5>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui consequatur ipsum porro a repellat eaque exercitationem necessitatibus esse voluptate corporis.</p>
                        <small class="fst-italic">Last Update : Today 13:54</small>
                    </div>
                    <!-- End - Simple news widget -->

                </div>
                <!-- End - Chat tab content -->

                <!-- Reports tab content -->
                <div id="nav-reports" class="tab-pane fade py-4" role="tabpanel" aria-labelledby="nav-reports-tab">

                    <!-- Billing and Resports -->
                    <div class="px-3">
                        <h5 class="mb-3">Billing &amp Reports</h5>
                        <p>Get <span class="badge bg-danger">$15.00 off</span> your next bill by making sure your full payment reaches us before August 5th.</p>

                        <h5 class="mt-5 mb-0">Amount Due On</h5>
                        <p>August 17, 2028</p>
                        <p class="h1">$83.09</p>

                        <div class="d-grid">
                            <button class="btn btn-success" type="button">Pay now</button>
                        </div>
                    </div>
                    <!-- End - Billing and Resports -->

                    <!-- Additional actions nav -->
                    <h5 class="mt-5 px-3">Additional Actions</h5>
                    <div class="list-group list-group-borderless">
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="demo-pli-information me-2 fs-5"></i>
                            Services Information
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="demo-pli-mine me-2 fs-5"></i>
                            Usage
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="demo-pli-credit-card-2 me-2 fs-5"></i>
                            Payment Options
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="demo-pli-support me-2 fs-5"></i>
                            Messages Center
                        </a>
                    </div>
                    <!-- End - Additional actions nav -->

                    <!-- Contact widget -->
                    <div class="px-3 mt-5 text-center">
                        <div class="mb-3">
                            <i class="demo-pli-old-telephone display-4 text-primary"></i>
                        </div>
                        <p>Have a question ?</p>
                        <p class="h5 mb-0"> (415) 234-53454 </p>
                        <small><em>We are here 24/7</em></small>
                    </div>
                    <!-- End - Contact widget -->

                </div>
                <!-- End - Reports tab content -->

                <!-- Settings content -->
                <div id="nav-settings" class="tab-pane fade py-4" role="tabpanel" aria-labelledby="nav-settings-tab">

                    <!-- Account settings -->
                    <h5 class="px-3">Account Settings</h5>
                    <div class="list-group list-group-borderless">

                        <div class="list-group-item mb-1">
                            <div class="d-flex justify-content-between mb-1">
                                <label class="form-check-label" for="_dm-sbPersonalStatus">Show my personal status</label>
                                <div class="form-check form-switch">
                                    <input id="_dm-sbPersonalStatus" class="form-check-input" type="checkbox" checked>
                                </div>
                            </div>
                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small>
                        </div>

                        <div class="list-group-item mb-1">
                            <div class="d-flex justify-content-between mb-1">
                                <label class="form-check-label" for="_dm-sbOfflineContact">Show offline contact</label>
                                <div class="form-check form-switch">
                                    <input id="_dm-sbOfflineContact" class="form-check-input" type="checkbox">
                                </div>
                            </div>
                            <small class="text-muted">Aenean commodo ligula eget dolor. Aenean massa.</small>
                        </div>

                        <div class="list-group-item mb-1">
                            <div class="d-flex justify-content-between mb-1">
                                <label class="form-check-label" for="_dm-sbInvisibleMode">Invisible Mode</label>
                                <div class="form-check form-switch">
                                    <input id="_dm-sbInvisibleMode" class="form-check-input" type="checkbox">
                                </div>
                            </div>
                            <small class="text-muted">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</small>
                        </div>

                    </div>
                    <!-- End - Account settings -->

                    <!-- Public Settings -->
                    <h5 class="mt-5 px-3">Public Settings</h5>
                    <div class="list-group list-group-borderless">

                        <div class="list-group-item d-flex justify-content-between mb-1">
                            <label class="form-check-label" for="_dm-sbOnlineStatus">Online Status</label>
                            <div class="form-check form-switch">
                                <input id="_dm-sbOnlineStatus" class="form-check-input" type="checkbox" checked>
                            </div>
                        </div>

                        <div class="list-group-item d-flex justify-content-between mb-1">
                            <label class="form-check-label" for="_dm-sbMuteNotifications">Mute Notifications</label>
                            <div class="form-check form-switch">
                                <input id="_dm-sbMuteNotifications" class="form-check-input" type="checkbox" checked>
                            </div>
                        </div>

                        <div class="list-group-item d-flex justify-content-between mb-1">
                            <label class="form-check-label" for="_dm-sbMyDevicesName">Show my device name</label>
                            <div class="form-check form-switch">
                                <input id="_dm-sbMyDevicesName" class="form-check-input" type="checkbox" checked>
                            </div>
                        </div>

                    </div>
                    <!-- End - Public Settings -->

                </div>
                <!-- End - Settings content -->

            </div>
            <!-- End - Sidebar tabs content -->

        </div>
    </aside>
    
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- END - SIDEBAR -->