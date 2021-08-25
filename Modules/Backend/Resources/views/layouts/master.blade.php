
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Admin Page | Souvenir Shop</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('admin/css/vendor.css')}}">
        <link rel="stylesheet" href="{{asset('admin/css/app-green.css')}}">
        <link rel="stylesheet" href="{{asset('admin/fontawesome/css/all.min.css')}}" >
        <link rel="stylesheet" href="{{asset('admin/css/custom.css')}}" >
        <link rel="stylesheet" href="{{asset('admin/css/ownstyle.css')}}" >
        <!-- js chosen -->
        <link rel="stylesheet" href="{{asset('css/component-chosen.css')}}">
    </head>
    <body>
        <div class="main-wrapper">
            <div class="app" id="app">
                <header class="header">
                    <div class="header-block header-block-collapse d-lg-none d-xl-none">
                        <button class="collapse-btn" id="sidebar-collapse-btn">
                            <i class="fa fa-bars"></i>
                        </button>
                        
                    </div>
                    <div class="header-block header-block-search">
                        <h4>
                            <i class="fa fa-users"></i> {{Auth::user()->name}}
                        </h4>
                    </div>
                    <div class="header-block header-block-nav">
                        <ul class="nav-profile">
                            <li class="profile dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    
                                    <span class="name">{{Auth::user()->name}}</span>
                                </a>
                                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <a class="dropdown-item" href="{{url('backend/logout')}}">
                                        <i class="fa fa-power-off icon"></i> Logout </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </header>
                <aside class="sidebar">
                    <div class="sidebar-container">
                        <div class="sidebar-header">
                            <div class="brand">
                                <a href="{{url('backend')}}">
                                    Souvenir Shop Admin
                                </a>
                            </div>
                        </div>
                        <nav class="menu">
                            <ul class="sidebar-menu metismenu" id="sidebar-menu">
                                <li id='menu_dashboard'>
                                    <a href="{{url('backend')}}">
                                    <i class="fa fa-tachometer-alt"></i> Dashboard </a>
                                </li>
                                <li id='menu_company'>
                                    <a href="{{url('backend/product')}}">
                                    <i class="fa fa-shopping-basket"></i> Product </a>
                                </li>
                                <li id='menu_contact'>
                                    <a href="{{url('backend/contact')}}">
                                    <i class="fa fa-users"></i> Contact </a>
                                </li>
                                <li id='menu_category'>
                                    <a href="{{url('backend/category')}}">
                                    <i class="fa fa-cubes"></i> Category </a>
                                </li>
                                <li id='menu_location'>
                                    <a href="{{url('backend/tag')}}">
                                    <i class="fa fa-tags"></i> Tag </a>
                                </li>
                                <li id='menu_job'>
                                    <a href="{{url('backend/avibility')}}">
                                    <i class="fa fa-unlock"></i> Avilability </a>
                                </li>
                                <li id='menu_shift'>
                                    <a href="{{url('backend/size')}}">
                                    <i class="fa fa-suitcase"></i> Size </a>
                                </li>
                                <li id='menu_security'>
                                    <a href="#"><i class="fas fa-shield-alt"></i>
                                         Security<i class="fa arrow"></i> 
                                    </a>
                                    <ul class="sidebar-nav" id="security_collapse">
                                        <li id="menu_role">
                                            <a href="{{url('backend/role')}}"><i class="fa fa-arrow-right"></i> Role</a>
                                        </li>
                                        <li id="menu_user">
                                            <a href="{{url('backend/user')}}"><i class="fa fa-arrow-right"></i> User</a>
                                        </li>
                                        <!-- <li id="menu_page">
                                            <a href="{{url('backend/page')}}"><i class="fa fa-arrow-right"></i> Page</a>
                                        </li>
                                        <li id="menu_member">
                                            <a href="{{url('backend/member')}}"><i class="fa fa-arrow-right"></i> Member</a>
                                        </li> -->
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <footer class="sidebar-footer">
                        <ul class="sidebar-menu metismenu" id="customize-menu">
                            <li>
                                <a href="#">
                                    Copy&copy; {{date('Y M d')}} 
                                </a>
                            </li>
                        </ul>
                    </footer>
                </aside>
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content dashboard-page">
                    <section class="section">
                        @yield('content')
                    </section>
                   
                </article>
                <footer class="footer">
                    
                    <div class="footer-block author">
                        <ul>
                            
                        </ul>
                    </div>
                </footer>
               
            </div>
        </div>
               <!-- Reference block for JS -->
               <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>
        <script src="{{url('admin/js/vendor.js')}}"></script>
        <script src="{{url('admin/js/app.js')}}"></script>

        <!-- js chosen -->
        <script src="{{asset('js/chosen.jquery.min.js')}}"></script>
         <script src="{{asset('js/chosen.init.js')}}"></script>
         <script src="{{asset('js/init.js')}}"></script>
        @yield('js')
    </body>
</html>