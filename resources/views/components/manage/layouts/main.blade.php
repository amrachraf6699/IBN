@php
$settings = settings();
@endphp
<!DOCTYPE html>
<html lang="zxx" dir="rtl" class="light">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title>{{ $settings->name }} - {{ $title }}</title>
  <link rel="icon" type="image/png" href="{{ asset('assets') }}/images/logo/favicon.svg">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">  
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Changa:wght@200..800&display=swap" rel="stylesheet">
  <!-- BEGIN: Theme CSS-->
  <link rel="stylesheet" href="{{ asset('assets') }}/css/rt-plugins.css">
  <link rel="stylesheet" href="{{ asset('assets') }}/css/app.css">
  <!-- End : Theme CSS-->
  <script src="{{ asset('assets') }}/js/settings.js" sync></script>
  <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/44.2.1/ckeditor5.css">
  <script>
    window.config = {
        CKEDITOR_LICENSE_KEY: "{{ env('CKEDITOR_LICENSE_KEY') }}",
        CKEDITOR_CLOUD_SERVICES_TOKEN_URL: "{{ env('CKEDITOR_CLOUD_SERVICES_TOKEN_URL') }}"
    };
  </script>
</head>

<body class=" font-inter {{ $settings->name }}-app" id="body_class">
  <main class="app-wrapper">
    <!-- BEGIN: Sidebar -->
    <!-- BEGIN: Sidebar -->
    <div class="sidebar-wrapper group">
      <div id="bodyOverlay" class="w-screen h-screen fixed top-0 bg-slate-900 bg-opacity-50 backdrop-blur-sm z-10 hidden"></div>
      <div class="logo-segment">
        <a class="flex items-center" href="{{ Route::currentRouteName() == "manage.home" ? 'javascript:void(0)' : route('manage.home') }}">
          <img src="{{ asset('images/dark_logo.png') }}" class="black_logo w-16 h-16" alt="logo">
          <img src="{{ asset('images/white_logo.png') }}" class="white_logo w-16 h-16" alt="logo">
          <span class="ltr:ml-3 rtl:mr-3 text-xl font-Inter font-bold text-slate-900 dark:text-white">{{ $settings->name }}</span>
        </a>
        <!-- Sidebar Type Button -->
        <div id="sidebar_type" class="cursor-pointer text-slate-900 dark:text-white text-lg">
          <span class="sidebarDotIcon extend-icon cursor-pointer text-slate-900 dark:text-white text-2xl">
        <div class="h-4 w-4 border-[1.5px] border-slate-900 dark:border-slate-700 rounded-full transition-all duration-150 ring-2 ring-inset ring-offset-4 ring-black-900 dark:ring-slate-400 bg-slate-900 dark:bg-slate-400 dark:ring-offset-slate-700"></div>
      </span>
          <span class="sidebarDotIcon collapsed-icon cursor-pointer text-slate-900 dark:text-white text-2xl">
        <div class="h-4 w-4 border-[1.5px] border-slate-900 dark:border-slate-700 rounded-full transition-all duration-150"></div>
      </span>
        </div>
        <button class="sidebarCloseIcon text-2xl">
          <iconify-icon class="text-slate-900 dark:text-slate-200" icon="clarity:window-close-line"></iconify-icon>
        </button>
      </div>
      <div id="nav_shadow" class="nav_shadow h-[60px] absolute top-[80px] nav-shadow z-[1] w-full transition-all duration-200 pointer-events-none
      opacity-0"></div>
      <div class="sidebar-menus bg-white dark:bg-slate-800 py-2 px-4 h-[calc(100%-80px)] overflow-y-auto z-50" id="sidebar_menus">
        <ul class="sidebar-menu">
            <li class="{{ Route::currentRouteName() == "manage.home" ? 'active' : '' }}">
                <a href="{{ Route::currentRouteName() == "manage.home" ? 'javascript:void(0)' : route('manage.home') }}" class="navItem">
                  <span class="flex items-center">
                <iconify-icon class=" nav-icon" icon="heroicons-outline:home"></iconify-icon>
                <span>{{ __('dashboard.home') }}</span>
                  </span>
                </a>
            </li>
            <li class="{{ Route::currentRouteName() == "manage.settings" ? 'active' : '' }}">
                <a href="{{ Route::currentRouteName() == "manage.settings" ? 'javascript:void(0)' : route('manage.settings') }}" class="navItem">
                  <span class="flex items-center">
                <iconify-icon class=" nav-icon" icon="heroicons-outline:cog-6-tooth"></iconify-icon>
                <span>{{ __('dashboard.website_settings') }}</span>
                  </span>
                </a>
            </li>
            
            <li class="{{ request()->routeIs('manage.categories.*') ? 'active' : '' }}">
                <a href="{{ request()->routeIs('manage.categories.index') ? 'javascript:void(0)' : route('manage.categories.index') }}" class="navItem">
                  <span class="flex items-center">
                <iconify-icon class=" nav-icon" icon="heroicons-outline:tag"></iconify-icon>
                <span>{{ __('dashboard.categories') }}</span>
                  </span>
                </a>
            </li>
            
            <li class="{{ request()->routeIs('manage.jobs.*') ? 'active' : '' }}">
                <a href="{{ request()->routeIs('manage.jobs.*') ? 'javascript:void(0)' : route('manage.jobs.index') }}" class="navItem">
                  <span class="flex items-center">
                <iconify-icon class=" nav-icon" icon="heroicons-outline:briefcase"></iconify-icon>
                <span>{{ __('dashboard.jobs') }}</span>
                  </span>
                </a>
            </li>
            <li class="{{ request()->routeIs('manage.contact.*') ? 'active' : '' }}">
                <a href="{{ request()->routeIs('manage.contact.*') ? 'javascript:void(0)' : route('manage.contact.index') }}" class="navItem">
                  <span class="flex items-center">
                <iconify-icon class=" nav-icon" icon="heroicons-outline:envelope-open"></iconify-icon>
                <span>{{ __('dashboard.contact_messages') }}</span>
                  </span>
                </a>
            </li>
          <!-- Media Center -->
          <li class="sidebar-menu-title">{{ __('dashboard.media_center') }}</li>
          <li class="">
            <a href="javascript:void(0)" class="navItem {{ Route::currentRouteName() == "manage.blogs.*" ? 'active' : '' }}">
              <span class="flex items-center">
            <iconify-icon class=" nav-icon" icon="heroicons-outline:document-text"></iconify-icon>
            <span>{{ __('dashboard.blogs') }}</span>
              </span>
              <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
            </a>
            <ul class="sidebar-submenu">
              <li>
                <a class="{{ Route::currentRouteName() == "manage.blogs.index" ? 'active' : '' }}" href="{{ route('manage.blogs.index') }}">{{ __('dashboard.all') }}</a>
              </li>
              <li>
                <a class="{{ Route::currentRouteName() == "manage.blogs.create" ? 'active' : '' }}" href="{{ route('manage.blogs.create') }}">{{ __('dashboard.create') }}</a>
              </li>
            </ul>
          </li>
          <li class="">
            <a href="javascript:void(0)" class="navItem {{ Route::currentRouteName() == "manage.clients.*" ? 'active' : '' }}">
              <span class="flex items-center">
            <iconify-icon class=" nav-icon" icon="heroicons-outline:user-group"></iconify-icon>
            <span>{{ __('dashboard.clients') }}</span>
              </span>
              <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
            </a>
            <ul class="sidebar-submenu">
              <li>
                <a class="{{ Route::currentRouteName() == "manage.clients.index" ? 'active' : '' }}" href="{{ route('manage.clients.index') }}">{{ __('dashboard.all') }}</a>
              </li>
              <li>
                <a class="{{ Route::currentRouteName() == "manage.clients.create" ? 'active' : '' }}" href="{{ route('manage.clients.create') }}">{{ __('dashboard.create') }}</a>
              </li>
            </ul>
          </li>
          <li class="">
            <a href="javascript:void(0)" class="navItem {{ Route::currentRouteName() == "manage.sliders.*" ? 'active' : '' }}">
              <span class="flex items-center">
            <iconify-icon class=" nav-icon" icon="heroicons-outline:photograph"></iconify-icon>
            <span>{{ __('dashboard.sliders') }}</span>
              </span>
              <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
            </a>
            <ul class="sidebar-submenu">
              <li>
                <a class="{{ Route::currentRouteName() == "manage.sliders.index" ? 'active' : '' }}" href="{{ route('manage.sliders.index') }}">{{ __('dashboard.all') }}</a>
              </li>
              <li>
                <a class="{{ Route::currentRouteName() == "manage.sliders.create" ? 'active' : '' }}" href="{{ route('manage.sliders.create') }}">{{ __('dashboard.create') }}</a>
              </li>
            </ul>
          </li>
          <li class="">
            <a href="javascript:void(0)" class="navItem {{ Route::currentRouteName() == "manage.news.*" ? 'active' : '' }}">
              <span class="flex items-center">
            <iconify-icon class=" nav-icon" icon="ci:planet"></iconify-icon>
            <span>{{ __('dashboard.news') }}</span>
              </span>
              <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
            </a>
            <ul class="sidebar-submenu">
              <li>
                <a class="{{ Route::currentRouteName() == "manage.news.index" ? 'active' : '' }}" href="{{ route('manage.news.index') }}">{{ __('dashboard.all') }}</a>
              </li>
              <li>
                <a class="{{ Route::currentRouteName() == "manage.news.create" ? 'active' : '' }}" href="{{ route('manage.news.create') }}">{{ __('dashboard.create') }}</a>
              </li>
            </ul>
          </li>
          <li class="">
            <a href="javascript:void(0)" class="navItem {{ Route::currentRouteName() == "manage.projects.*" ? 'active' : '' }}">
              <span class="flex items-center">
            <iconify-icon class=" nav-icon" icon="heroicons-outline:folder-open"></iconify-icon>
            <span>{{ __('dashboard.projects') }}</span>
              </span>
              <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
            </a>
            <ul class="sidebar-submenu">
              <li>
                <a class="{{ Route::currentRouteName() == "manage.projects.index" ? 'active' : '' }}" href="{{ route('manage.projects.index') }}">{{ __('dashboard.all') }}</a>
              </li>
              <li>
                <a class="{{ Route::currentRouteName() == "manage.projects.create" ? 'active' : '' }}" href="{{ route('manage.projects.create') }}">{{ __('dashboard.create') }}</a>
              </li>
            </ul>
          </li>
          <li class="">
            <a href="javascript:void(0)" class="navItem {{ Route::currentRouteName() == "manage.services.*" ? 'active' : '' }}">
              <span class="flex items-center">
            <iconify-icon class=" nav-icon" icon="heroicons-outline:briefcase"></iconify-icon>
            <span>{{ __('dashboard.services') }}</span>
              </span>
              <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
            </a>
            <ul class="sidebar-submenu">
              <li>
                <a class="{{ Route::currentRouteName() == "manage.services.index" ? 'active' : '' }}" href="{{ route('manage.services.index') }}">{{ __('dashboard.all') }}</a>
              </li>
              <li>
                <a class="{{ Route::currentRouteName() == "manage.services.create" ? 'active' : '' }}" href="{{ route('manage.services.create') }}">{{ __('dashboard.create') }}</a>
              </li>
            </ul>
          </li>
          <li class="">
            <a href="javascript:void(0)" class="navItem {{ Route::currentRouteName() == "manage.team.*" ? 'active' : '' }}">
              <span class="flex items-center">
            <iconify-icon class=" nav-icon" icon="heroicons-outline:user"></iconify-icon>
            <span>{{ __('dashboard.team') }}</span>
              </span>
              <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
            </a>
            <ul class="sidebar-submenu">
              <li>
                <a class="{{ Route::currentRouteName() == "manage.team.index" ? 'active' : '' }}" href="{{ route('manage.team.index') }}">{{ __('dashboard.all') }}</a>
              </li>
              <li>
                <a class="{{ Route::currentRouteName() == "manage.team.create" ? 'active' : '' }}" href="{{ route('manage.team.create') }}">{{ __('dashboard.create') }}</a>
              </li>
            </ul>
          </li>
          <!-- Media Center END -->
          <!--Managment -->
          <li class="sidebar-menu-title">{{ __('dashboard.managers') }}</li>
          <li class="">
            <a href="javascript:void(0)" class="navItem {{ Route::currentRouteName() == "manage.admins.*" ? 'active' : '' }}">
              <span class="flex items-center">
            <iconify-icon class=" nav-icon" icon="heroicons-outline:user-circle"></iconify-icon>
            <span>{{ __('dashboard.admins') }}</span>
              </span>
              <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
            </a>
            <ul class="sidebar-submenu">
              <li>
                <a class="{{ Route::currentRouteName() == "manage.admins.index" ? 'active' : '' }}" href="{{ route('manage.admins.index') }}">{{ __('dashboard.all') }}</a>
              </li>
              <li>
                <a class="{{ Route::currentRouteName() == "manage.admins.create" ? 'active' : '' }}" href="{{ route('manage.admins.create') }}">{{ __('dashboard.create') }}</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <!-- End: Sidebar -->
    <!-- End: Sidebar -->
    <!-- BEGIN: Settings -->

    <!-- BEGIN: Settings -->
    <!-- Settings Toggle Button -->
    <button class="fixed ltr:md:right-[-29px] ltr:right-0 rtl:left-0 rtl:md:left-[-29px] top-1/2 z-[888] translate-y-1/2 bg-slate-800 text-slate-50 dark:bg-slate-700 dark:text-slate-300 cursor-pointer transform rotate-90 flex items-center text-sm font-medium px-2 py-2 shadow-deep ltr:rounded-b rtl:rounded-t" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas">
      <iconify-icon class="text-slate-50 text-lg animate-spin" icon="material-symbols:settings-outline-rounded"></iconify-icon>
      <span class="hidden md:inline-block ltr:ml-2 rtl:mr-2">Settings</span>
    </button>

    <!-- BEGIN: Settings Modal -->
    <div class="offcanvas offcanvas-end fixed bottom-0 flex flex-col max-w-full bg-white dark:bg-slate-800 invisible bg-clip-padding shadow-sm outline-none transition duration-300 ease-in-out text-gray-700 top-0 ltr:right-0 rtl:left-0 border-none w-96" tabindex="-1" id="offcanvas" aria-labelledby="offcanvas">
      <div class="offcanvas-header flex items-center justify-between p-4 pt-3 border-b border-b-slate-300">
        <div>
          <h3 class="block text-xl font-Inter text-slate-900 font-medium dark:text-[#eee]">
            Theme customizer
          </h3>
          <p class="block text-sm font-Inter font-light text-[#68768A] dark:text-[#eee]">Customize & Preview in Real Time</p>
        </div>
        <button type="button" class="box-content text-2xl w-4 h-4 p-2 pt-0 -my-5 -mr-2 text-black dark:text-white border-none rounded-none opacity-100 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" data-bs-dismiss="offcanvas"><iconify-icon icon="line-md:close"></iconify-icon></button>
      </div>
      <div class="offcanvas-body flex-grow overflow-y-auto">
        <div class="settings-modal">
          <div class="p-6">

            <h3 class="mt-4">Theme</h3>
            <form class="input-area flex items-center space-x-8 rtl:space-x-reverse" id="themeChanger">
              <div class="input-group flex items-center">
                <input type="radio" id="light" name="theme" value="light" class="themeCustomization-checkInput">
                <label for="light" class="themeCustomization-checkInput-label">Light</label>
              </div>
              <div class="input-group flex items-center">
                <input type="radio" id="dark" name="theme" value="dark" class="themeCustomization-checkInput">
                <label for="dark" class="themeCustomization-checkInput-label">Dark</label>
              </div>
              <div class="input-group flex items-center">
                <input type="radio" id="semiDark" name="theme" value="semiDark" class="themeCustomization-checkInput">
                <label for="semiDark" class="themeCustomization-checkInput-label">Semi Dark</label>
              </div>
            </form>
          </div>
          <div class="divider"></div>
          <div class="p-6">

            <div class="flex items-center justify-between mt-5">
              <h3 class="!mb-0">Rtl</h3>
              <label id="rtl_ltr" class="relative inline-flex h-6 w-[46px] items-center rounded-full transition-all duration-150 cursor-pointer">
                <input type="checkbox" value="" class="sr-only peer">
                <span class="w-11 h-6 bg-gray-200 peer-focus:outline-none ring-0 rounded-full peer dark:bg-gray-900 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-black-600"></span>
              </label>
            </div>
          </div>
          <div class="divider"></div>
          <div class="p-6">
            <h3>Content Width</h3>
            <div class="input-area flex items-center space-x-8 rtl:space-x-reverse">
              <div class="input-group flex items-center">
                <input type="radio" id="fullWidth" name="content-width" value="fullWidth" class="themeCustomization-checkInput">
                <label for="fullWidth" class="themeCustomization-checkInput-label ">Full Width</label>
              </div>
              <div class="input-group flex items-center">
                <input type="radio" id="boxed" name="content-width" value="boxed" class="themeCustomization-checkInput">
                <label for="boxed" class="themeCustomization-checkInput-label ">Boxed</label>
              </div>
            </div>
            <h3 class="mt-4">Menu Layout</h3>
            <div class="input-area flex items-center space-x-8 rtl:space-x-reverse">
              <div class="input-group flex items-center">
                <input type="radio" id="vertical_menu" name="menu_layout" value="vertical" class="themeCustomization-checkInput">
                <label for="vertical_menu" class="themeCustomization-checkInput-label ">Vertical</label>
              </div>
              <div class="input-group flex items-center">
                <input type="radio" id="horizontal_menu" name="menu_layout" value="horizontal" class="themeCustomization-checkInput">
                <label for="horizontal_menu" class="themeCustomization-checkInput-label ">Horizontal</label>
              </div>
            </div>
            <div id="menuCollapse" class="flex items-center justify-between mt-5">
              <h3 class="!mb-0">Menu Collapsed</h3>
              <label class="relative inline-flex h-6 w-[46px] items-center rounded-full transition-all duration-150 cursor-pointer">
                <input type="checkbox" value="" class="sr-only peer">
                <span class="w-11 h-6 bg-gray-200 peer-focus:outline-none ring-0 rounded-full peer dark:bg-gray-900 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-black-500"></span>
              </label>
            </div>
            <div id="menuHidden" class="!flex items-center justify-between mt-5">
              <h3 class="!mb-0">Menu Hidden</h3>
              <label id="menuHide" class="relative inline-flex h-6 w-[46px] items-center rounded-full transition-all duration-150 cursor-pointer">
                <input type="checkbox" value="" class="sr-only peer">
                <span class="w-11 h-6 bg-gray-200 peer-focus:outline-none ring-0 rounded-full peer dark:bg-gray-900 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-black-500"></span>
              </label>
            </div>
          </div>
          <div class="divider"></div>
          <div class="p-6">
            <h3>Navbar Type</h3>
            <div class="input-area flex flex-wrap items-center space-x-4 rtl:space-x-reverse">
              <div class="input-group flex items-center">
                <input type="radio" id="nav_floating" name="navbarType" value="floating" class="themeCustomization-checkInput">
                <label for="nav_floating" class="themeCustomization-checkInput-label ">Floating</label>
              </div>
              <div class="input-group flex items-center">
                <input type="radio" id="nav_sticky" name="navbarType" value="sticky" class="themeCustomization-checkInput">
                <label for="nav_sticky" class="themeCustomization-checkInput-label ">Sticky</label>
              </div>
              <div class="input-group flex items-center">
                <input type="radio" id="nav_static" name="navbarType" value="static" class="themeCustomization-checkInput">
                <label for="nav_static" class="themeCustomization-checkInput-label ">Static</label>
              </div>
              <div class="input-group flex items-center">
                <input type="radio" id="nav_hidden" name="navbarType" value="hidden" class="themeCustomization-checkInput">
                <label for="nav_hidden" class="themeCustomization-checkInput-label ">Hidden</label>
              </div>
            </div>
            <h3 class="mt-4">Footer Type</h3>
            <div class="input-area flex items-center space-x-4 rtl:space-x-reverse">
              <div class="input-group flex items-center">
                <input type="radio" id="footer_sticky" name="footerType" value="sticky" class="themeCustomization-checkInput">
                <label for="footer_sticky" class="themeCustomization-checkInput-label ">Sticky</label>
              </div>
              <div class="input-group flex items-center">
                <input type="radio" id="footer_static" name="footerType" value="static" class="themeCustomization-checkInput">
                <label for="footer_static" class="themeCustomization-checkInput-label ">Static</label>
              </div>
              <div class="input-group flex items-center">
                <input type="radio" id="footer_hidden" name="footerType" value="hidden" class="themeCustomization-checkInput">
                <label for="footer_hidden" class="themeCustomization-checkInput-label ">Hidden</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END: Settings Modal -->
    <!-- END: Settings -->

    <!-- End: Settings -->
    <div class="flex flex-col justify-between min-h-screen">
      <div>
        <!-- BEGIN: Header -->
        <!-- BEGIN: Header -->
        <div class="z-[9]" id="app_header">
          <div class="app-header z-[999] ltr:ml-[248px] rtl:mr-[248px] bg-white dark:bg-slate-800 shadow-sm dark:shadow-slate-700">
            <div class="flex justify-between items-center h-full">
              <div class="flex items-center md:space-x-4 space-x-2 xl:space-x-0 rtl:space-x-reverse vertical-box">
                <a href="{{ Route::currentRouteName() == "manage.home" ? 'javascript:void(0)' : route('manage.home') }}" class="mobile-logo xl:hidden inline-block">
                  <img src="{{ asset('images/dark_logo.png') }}" class="black_logo w-16 h-16" alt="logo">
                  <img src="{{ asset('images/white_logo.png') }}" class="white_logo w-16 h-16" alt="logo">
                </a>
                <button class="smallDeviceMenuController hidden md:inline-block xl:hidden">
                  <iconify-icon class="leading-none bg-transparent relative text-xl top-[2px] text-slate-900 dark:text-white" icon="heroicons-outline:menu-alt-3"></iconify-icon>
                </button>
                <button class="flex items-center xl:text-sm text-lg xl:text-slate-400 text-slate-800 dark:text-slate-300 px-1
        rtl:space-x-reverse search-modal" data-bs-toggle="modal" data-bs-target="#searchModal">
                  <iconify-icon icon="heroicons-outline:search"></iconify-icon>
                  <span class="xl:inline-block hidden ml-3">Search...
    </span>
                </button>

              </div>
              <!-- end vertcial -->
              <div class="items-center space-x-4 rtl:space-x-reverse horizental-box">
                <a href="{{ Route::currentRouteName() == "manage.home" ? 'javascript:void(0)' : route('manage.home') }}">
                  <span class="xl:inline-block hidden">
        <img src="{{ asset('images/dark_logo.png') }}" class="black_logo w-16 h-16" alt="logo">
        <img src="{{ asset('images/white_logo.png') }}" class="white_logo w-16 h-16" alt="logo">
    </span>
                  <span class="xl:hidden inline-block">
        <img src="{{ asset('images/dark_logo.png') }}" class="black_logo w-16 h-16 " alt="logo">
        <img src="{{ asset('images/white_logo.png') }}" class="white_logo w-16 h-16 " alt="logo">
    </span>
                </a>
                <button class="smallDeviceMenuController  open-sdiebar-controller xl:hidden inline-block">
                  <iconify-icon class="leading-none bg-transparent relative text-xl top-[2px] text-slate-900 dark:text-white" icon="heroicons-outline:menu-alt-3"></iconify-icon>
                </button>

              </div>
              <!-- end top menu -->
              <div class="nav-tools flex items-center lg:space-x-5 space-x-3 rtl:space-x-reverse leading-0">

                <!-- BEGIN: Language Dropdown  -->
                <div class="relative">
                <!-- Language Switcher Button -->
                <button class="text-slate-800 dark:text-white focus:ring-0 focus:outline-none font-medium rounded-lg text-sm text-center inline-flex items-center"
                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    @if(app()->getLocale() == 'ar')
                    <iconify-icon icon="circle-flags:sa" class="mr-0 md:mr-2 rtl:ml-2 text-xl"></iconify-icon>
                    <span class="text-sm md:block hidden font-medium text-slate-600 dark:text-slate-300">عربي</span>
                    @else
                    <iconify-icon icon="circle-flags:gb" class="mr-0 md:mr-2 rtl:ml-2 text-xl"></iconify-icon>
                    <span class="text-sm md:block hidden font-medium text-slate-600 dark:text-slate-300">English</span>
                    @endif
                </button>

                <!-- Language Dropdown Menu -->
                <div class="dropdown-menu z-10 hidden bg-white divide-y divide-slate-100 shadow w-44 dark:bg-slate-800 border dark:border-slate-900 !top-[25px] rounded-md overflow-hidden">
                    <ul class="py-1 text-sm text-slate-800 dark:text-slate-200">
                    <li>
                        <a href="{{ route('lang.switch', 'en') }}" class="flex items-center px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                        <iconify-icon icon="circle-flags:gb" class="ltr:mr-2 rtl:ml-2 text-xl"></iconify-icon>
                        <span class="font-medium">{{ __('dashboard.english') }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('lang.switch', 'ar') }}" class="flex items-center px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                        <iconify-icon icon="circle-flags:sa" class="ltr:mr-2 rtl:ml-2 text-xl"></iconify-icon>
                        <span class="font-medium">{{ __('dashboard.arabic') }}</span>
                        </a>
                    </li>
                    </ul>
                </div>
                </div>
                <!-- END: Language Dropdown -->

                <!-- BEGIN: Toggle Theme -->
                <div>
                  <button id="themeMood" class="h-[28px] w-[28px] lg:h-[32px] lg:w-[32px] lg:bg-gray-500-f7 bg-slate-50 dark:bg-slate-900 lg:dark:bg-slate-900 dark:text-white text-slate-900 cursor-pointer rounded-full text-[20px] flex flex-col items-center justify-center">
                    <iconify-icon class="text-slate-800 dark:text-white text-xl dark:block hidden" id="moonIcon" icon="line-md:sunny-outline-to-moon-alt-loop-transition"></iconify-icon>
                    <iconify-icon class="text-slate-800 dark:text-white text-xl dark:hidden block" id="sunIcon" icon="line-md:moon-filled-to-sunny-filled-loop-transition"></iconify-icon>
                  </button>
                </div>
                <!-- END: TOggle Theme -->
                <!-- BEGIN: Notification Dropdown -->
                <!-- Notifications Dropdown area -->
                <div class="relative md:block hidden">
                  <button class="lg:h-[32px] lg:w-[32px] lg:bg-slate-100 lg:dark:bg-slate-900 dark:text-white text-slate-900 cursor-pointer
      rounded-full text-[20px] flex flex-col items-center justify-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <iconify-icon class="animate-tada text-slate-800 dark:text-white text-xl" icon="heroicons-outline:bell"></iconify-icon>
                    <span class="absolute -right-1 lg:top-0 -top-[6px] h-4 w-4 bg-red-500 text-[8px] font-semibold flex flex-col items-center
        justify-center rounded-full text-white z-[99]">
      4</span>
                  </button>
                  <!-- Notifications Dropdown -->
                  <div class="dropdown-menu z-10 hidden bg-white shadow w-[335px]
      dark:bg-slate-800 border dark:border-slate-700 !top-[23px] rounded-md overflow-hidden lrt:origin-top-right rtl:origin-top-left">
                    <div class="flex items-center justify-between py-4 px-4">
                      <h3 class="text-sm font-Inter font-medium text-slate-700 dark:text-white">Notifications</h3>
                      <a class="text-xs font-Inter font-normal underline text-slate-500 dark:text-white" href="#">See All</a>
                    </div>
                    <div class="" role="none">
                      <div class="bg-slate-100 dark:bg-slate-700 dark:bg-opacity-70 text-slate-800 block w-full px-4 py-2 text-sm relative">
                        <div class="flex ltr:text-left rtl:text-right">
                          <div class="flex-none ltr:mr-3 rtl:ml-3">
                            <div class="h-8 w-8 bg-white rounded-full">
                              <img src="{{ asset('images/dark_logo.png') }}" alt="user" class="border-white block w-full h-full object-cover rounded-full border">
                            </div>
                          </div>
                          <div class="flex-1">
                            <a href="#" class="text-slate-600 dark:text-slate-300 text-sm font-medium mb-1 before:w-full before:h-full before:absolute
                before:top-0 before:left-0">
                              Your order is placed</a>
                            <div class="text-slate-500 dark:text-slate-200 text-xs leading-4">Amet minim mollit non deser unt ullamco est sit
                              aliqua.</div>
                            <div class="text-slate-400 dark:text-slate-400 text-xs mt-1">
                              3 min ago
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="text-slate-600 dark:text-slate-300 block w-full px-4 py-2 text-sm">
                        <div class="flex ltr:text-left rtl:text-right relative">
                          <div class="flex-none ltr:mr-3 rtl:ml-3">
                            <div class="h-8 w-8 bg-white rounded-full">
                              <img src="/assets/images/all-img/user2.png" alt="user" class="border-transparent block w-full h-full object-cover rounded-full border">
                            </div>
                          </div>
                          <div class="flex-1">
                            <a href="#" class="text-slate-600 dark:text-slate-300 text-sm font-medium mb-1 before:w-full before:h-full before:absolute
                before:top-0 before:left-0">
                              Congratulations Darlene 🎉</a>
                            <div class="text-slate-600 dark:text-slate-300 text-xs leading-4">Won the monthly best seller badge</div>
                            3 min ago
                          </div>
                        </div>
                        <div class="flex-0">
                          <span class="h-[10px] w-[10px] bg-danger-500 border border-white dark:border-slate-400 rounded-full inline-block"></span>
                        </div>
                      </div>
                    </div>
                    <div class="text-slate-600 dark:text-slate-300 block w-full px-4 py-2 text-sm">
                      <div class="flex ltr:text-left rtl:text-right relative">
                        <div class="flex-none ltr:mr-3 rtl:ml-3">
                          <div class="h-8 w-8 bg-white rounded-full">
                            <img src="/assets/images/all-img/user3.png" alt="user" class="border-transparent block w-full h-full object-cover rounded-full border">
                          </div>
                        </div>
                        <div class="flex-1">
                          <a href="#" class="text-slate-600 dark:text-slate-300 text-sm font-medium mb-1 before:w-full before:h-full before:absolute
              before:top-0 before:left-0">
                            Revised Order 👋</a>
                          <div class="text-slate-600 dark:text-slate-300 text-xs leading-4">Won the monthly best seller badge</div>
                          <div class="text-slate-400 dark:text-slate-400 text-xs mt-1">3 min ago</div>
                        </div>
                      </div>
                    </div>
                    <div class="text-slate-600 dark:text-slate-300 block w-full px-4 py-2 text-sm">
                      <div class="flex ltr:text-left rtl:text-right relative">
                        <div class="flex-none ltr:mr-3 rtl:ml-3">
                          <div class="h-8 w-8 bg-white rounded-full">
                            <img src="/assets/images/all-img/user4.png" alt="user" class="border-transparent block w-full h-full object-cover rounded-full border">
                          </div>
                        </div>
                        <div class="flex-1">
                          <a href="#" class="text-slate-600 dark:text-slate-300 text-sm font-medium mb-1 before:w-full before:h-full before:absolute
              before:top-0 before:left-0">
                            Brooklyn Simmons</a>
                          <div class="text-slate-600 dark:text-slate-300 text-xs leading-4">Added you to Top Secret Project group...</div>
                          <div class="text-slate-400 dark:text-slate-400 text-xs mt-1">
                            3 min ago
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END: Notification Dropdown -->

                <!-- BEGIN: Profile Dropdown -->
                <!-- Profile DropDown Area -->
                <div class="md:block hidden w-full">
                  <button class="text-slate-800 dark:text-white focus:ring-0 focus:outline-none font-medium rounded-lg text-sm text-center
      inline-flex items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="lg:h-8 lg:w-8 h-7 w-7 rounded-full flex-1 ltr:mr-[10px] rtl:ml-[10px]">
                      <img src="{{ asset('images/dark_logo.png') }}" alt="user" class="block w-full h-full object-cover rounded-full">
                    </div>
                    <span class="flex-none text-slate-600 dark:text-white text-sm font-normal items-center lg:flex hidden overflow-hidden text-ellipsis whitespace-nowrap">{{ auth()->user()->name }}</span>
                    <svg class="w-[16px] h-[16px] dark:text-white hidden lg:inline-block text-base inline-block ml-[10px] rtl:mr-[10px]" aria-hidden="true" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </button>
                  <!-- Dropdown menu -->
                  <div class="dropdown-menu z-10 hidden bg-white divide-y divide-slate-100 shadow w-44 dark:bg-slate-800 border dark:border-slate-700 !top-[23px] rounded-md
      overflow-hidden">
                    <ul class="py-1 text-sm text-slate-800 dark:text-slate-200">
                      <li>
                        <a href="#" class="block px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white font-inter text-sm text-slate-600
            dark:text-white font-normal">
                          <iconify-icon icon="heroicons-outline:login" class="relative top-[2px] text-lg ltr:mr-1 rtl:ml-1"></iconify-icon>
                          <span class="font-Inter">Logout</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- END: Header -->
                <button class="smallDeviceMenuController md:hidden block leading-0">
                  <iconify-icon class="cursor-pointer text-slate-900 dark:text-white text-2xl" icon="heroicons-outline:menu-alt-3"></iconify-icon>
                </button>
                <!-- end mobile menu -->
              </div>
              <!-- end nav tools -->
            </div>
          </div>
        </div>

        <!-- BEGIN: Search Modal -->
        <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
          <div class="modal-dialog relative w-auto pointer-events-none top-1/4">
            <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white dark:bg-slate-900 bg-clip-padding rounded-md outline-none text-current">
              <form>
                <div class="relative">
                  <input type="text" class="form-control !py-3 !pr-12" placeholder="Search">
                  <button class="absolute right-0 top-1/2 -translate-y-1/2 w-9 h-full border-l text-xl border-l-slate-200 dark:border-l-slate-600 dark:text-slate-300 flex items-center justify-center">
                    <iconify-icon icon="heroicons-solid:search"></iconify-icon>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- END: Search Modal -->
        <!-- END: Header -->
        <!-- END: Header -->
        <div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]" id="content_wrapper">
          <div class="page-content">
            <div class="transition-all duration-150 container-fluid" id="page_layout">
              <div id="content_layout">
                <!-- END: BreadCrumb -->
                <div class=" space-y-5">
                  {{ $slot }}
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- BEGIN: Footer For Desktop and tab -->
      <footer class="md:block hidden" id="footer">
        <div class="site-footer px-6 bg-white dark:bg-slate-800 text-slate-500 dark:text-slate-300 py-4 ltr:ml-[248px] rtl:mr-[248px]">
          <div class="grid md:grid-cols-2 grid-cols-1 md:gap-5">
            <div class="text-center ltr:md:text-start rtl:md:text-right text-sm">
              {{ __('dashboard.copyright' , ['attribute' => $settings->name]) }}
            </div>
            <div class="ltr:md:text-right rtl:md:text-end text-center text-sm">
                {!! __('dashboard.powered_by') !!}
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <!-- scripts -->
  <script src="{{ asset('assets') }}/js/jquery-3.6.0.min.js"></script>
  <script src="{{ asset('assets') }}/js/rt-plugins.js"></script>
  <script src="{{ asset('assets') }}/js/app.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/44.2.1/ckeditor5.umd.js"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5-premium-features/44.2.1/ckeditor5-premium-features.umd.js" crossorigin></script>
  <script src="{{ asset('assets/js/ckeditor.js') }}"></script>
  <script>
    //Init Notyf
    const notyf = new Notyf({
      duration: 3000,
      position: {
        x: 'center',
        y: 'top'
      },
      types: [
        {
            type: 'success',
            background: '#38A169',
            dismissible: true,
            ripple: true,
        },
        {
            type: 'error',
            background: '#E53E3E',
            dismissible: true,
            ripple: true,
        }
      ]
    });

    // Show success notification
    @if(session('success'))
      notyf.success('{{ session('success') }}');
    @endif

    // Show error notification
    @if(session('error'))
      notyf.error('{{ session('error') }}');
    @endif
  </script>
</body>
</html>