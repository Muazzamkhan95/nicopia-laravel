<div class="sidebar-wrapper group">
    <div id="bodyOverlay" class="w-screen h-screen fixed top-0 bg-slate-900 bg-opacity-50 backdrop-blur-sm z-10 hidden">
    </div>
    <div class="logo-segment">
        <a class="flex items-center" href="index.html">
            <img src="{{ asset('frontend/img/Logo.png') }}" class="black_logo" alt="logo">
            <img src="{{ asset('frontend/img/Logo.png') }}" class="white_logo" alt="logo">
            <span class="ltr:ml-3 rtl:mr-3 text-xl font-Inter font-bold text-slate-900 dark:text-white"></span>
        </a>
        <!-- Sidebar Type Button -->
        <div id="sidebar_type" class="cursor-pointer text-slate-900 dark:text-white text-lg">
            <span class="sidebarDotIcon extend-icon cursor-pointer text-slate-900 dark:text-white text-2xl">
                <div
                    class="h-4 w-4 border-[1.5px] border-slate-900 dark:border-slate-700 rounded-full transition-all duration-150 ring-2 ring-inset ring-offset-4 ring-black-900 dark:ring-slate-400 bg-slate-900 dark:bg-slate-400 dark:ring-offset-slate-700">
                </div>
            </span>
            <span class="sidebarDotIcon collapsed-icon cursor-pointer text-slate-900 dark:text-white text-2xl">
                <div
                    class="h-4 w-4 border-[1.5px] border-slate-900 dark:border-slate-700 rounded-full transition-all duration-150">
                </div>
            </span>
        </div>
        <button class="sidebarCloseIcon text-2xl">
            <iconify-icon class="text-slate-900 dark:text-slate-200" icon="clarity:window-close-line"></iconify-icon>
        </button>
    </div>
    <div id="nav_shadow"
        class="nav_shadow h-[60px] absolute top-[80px] nav-shadow z-[1] w-full transition-all duration-200 pointer-events-none
    opacity-0">
    </div>
    <div class="sidebar-menus bg-white dark:bg-slate-800 py-2 px-4 h-[calc(100%-80px)] overflow-y-auto z-50"
        id="sidebar_menus">
        <ul class="sidebar-menu">
            <li class="sidebar-menu-title">MENY</li>
            {{-- <li class="">
          <a href="#" class="navItem">
            <span class="flex items-center">
          <iconify-icon class=" nav-icon" icon="heroicons-outline:home"></iconify-icon>
          <span>Dashboard</span>
            </span>
            <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
          </a>
          <ul class="sidebar-submenu">
            <li>
              <a href="index.html">Analytics Dashboard</a>
            </li>
            <li>
              <a href="ecommerce-dashboard.html">Ecommerce Dashboard
              </a>
            </li>
            <li>
              <a href="project-dashboard.html">Project Dashboard
              </a>
            </li>
            <li>
              <a href="crm-dashboard.html">CRM Dashboard
              </a>
            </li>
            <li>
              <a href="banking-dashboard.html">Banking Dashboard
              </a>
            </li>
          </ul>
        </li> --}}
            <!-- Apps Area -->
            {{-- <li class="sidebar-menu-title">APPS</li> --}}
            <li>
                <a href="{{ route('dashboard') }}" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="heroicons-outline:home"></iconify-icon>
                        <span>Dashbaord</span>
                    </span>
                </a>
            </li>
            <li class="">
                <a href="javascript:void(0)" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="heroicons-outline:document"></iconify-icon>
                        <span>Projekt</span>
                    </span>
                    <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('projects.index') }}">Projekt</a>
                    </li>
                    {{-- <li>
                        <a href="project-details.html">Project Details</a>
                    </li>
                    <li>
                        <a href="project-details.html">Project Gallery</a>
                    </li> --}}
                </ul>
            </li>
            <li class="">
                <a href="{{ route('services.index') }}" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="icons8:services"></iconify-icon>
                        <span>Tjänster</span>
                    </span>
                </a>
            </li>
            <li class="">
                <a href="javascript:void(0)" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="heroicons-outline:clipboard-check"></iconify-icon>
                        <span>Blogg</span>
                    </span>
                    <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('blogs.index') }}">Blogs</a>
                    </li>
                    <li>
                        <a href="{{ route('categories.index') }}">Blogg Kategori</a>
                    </li>
                </ul>
            </li>

            <li class="">
                <a href="{{ route('sliders.index') }}" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="heroicons-outline:view-boards"></iconify-icon>
                        <span>Skjutreglage</span>
                    </span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('brands.index') }}" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="heroicons-outline:view-boards"></iconify-icon>
                        <span>Våra Samarbetspartners</span>
                    </span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('testimonials.index') }}" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="heroicons-outline:clipboard-check"></iconify-icon>
                        <span>Testinmal</span>
                    </span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('teams.index') }}" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="ri:team-fill"></iconify-icon>
                        <span>Team</span>
                    </span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('policies.index') }}" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="ri:team-fill"></iconify-icon>
                        <span>Policies</span>
                    </span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('pages.index') }}" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="ri:team-fill"></iconify-icon>
                        <span>Pages</span>
                    </span>
                </a>
            </li>
            <li class="">
                <a href="javascript:void(0)" class="navItem">
                    <span class="flex items-center">
                        <iconify-icon class=" nav-icon" icon="tabler:section"></iconify-icon>
                        <span>Utseende</span>
                    </span>
                    <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                </a>
                <ul class="sidebar-submenu">
                    <li>
                        <a href="{{ route('section-settings.index') }}">Inställningar för avsnitt</a>
                    </li>
                    {{-- <li>
                        <a href="{{ route('menus.index') }}">Menu Settings</a>
                    </li> --}}
                    <li>
                        <a href="{{ route('headers.index') }}">Inställningar för sidhuvud</a>
                    </li>
                    <li>
                        <a href="{{ route('footers.index') }}">Inställningar för sidfot</a>
                    </li>
                </ul>
            </li>

            <!-- Pages Area -->
            {{-- <li class="sidebar-menu-title">PAGES</li> --}}
            <!-- Authentication -->
            {{-- <li class="">
          <a href="javascript:void(0)" class="navItem">
            <span class="flex items-center">
          <iconify-icon class=" nav-icon" icon="heroicons-outline:lock-closed"></iconify-icon>
          <span>Authentication</span>
            </span>
            <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
          </a>
          <ul class="sidebar-submenu">
            <li>
              <a href="signin-one.html">Signin One</a>
            </li>
            <li>
              <a href="signin-two.html">Signin Two</a>
            </li>
            <li>
              <a href="signin-three.html">Signin Three</a>
            </li>
            <li>
              <a href="signup-one.html">Signup One</a>
            </li>
            <li>
              <a href="signup-two.html">Signup Two</a>
            </li>
            <li>
              <a href="signup-three.html">Signup Three</a>
            </li>
            <li>
              <a href="forget-password-one.html">Forget Password One</a>
            </li>
            <li>
              <a href="forget-password-two.html">Forget Password Two</a>
            </li>
            <li>
              <a href="forget-password-three.html">Forget Password Three</a>
            </li>
            <li>
              <a href="lock-screen-one.html">Lock Screen One</a>
            </li>
            <li>
              <a href="lock-screen-two.html">Lock Screen Two</a>
            </li>
            <li>
              <a href="lock-screen-three.html">Lock Screen Three</a>
            </li>
          </ul>
        </li> --}}
            <!-- Utility -->
            {{-- <li class="">
          <a href="javascript:void(0)" class="navItem">
            <span class="flex items-center">
          <iconify-icon class=" nav-icon" icon="heroicons-outline:view-boards"></iconify-icon>
          <span>Utility</span>
            </span>
            <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
          </a>
          <ul class="sidebar-submenu">
            <li>
              <a href="invoice.html">Invoice</a>
            </li>
            <li>
              <a href="pricing.html">Pricing</a>
            </li>
            <li>
              <a href="blog.html">Blog</a>
            </li>
            <li>
              <a href="blank-page.html">Blank Page</a>
            </li>
            <li>
              <a href="settings.html">Settings</a>
            </li>
            <li>
              <a href="profile.html">Profile</a>
            </li>
            <li>
              <a href="404.html">404 Page</a>
            </li>
            <li>
              <a href="comming-soon.html">Coming Soon</a>
            </li>
            <li>
              <a href="under-maintanance.html">Under Maintanance</a>
            </li>
          </ul>
        </li> --}}
            <!-- Elements Area -->
            {{-- <li class="sidebar-menu-title">ELEMENTS</li> --}}
            <!-- Widgets -->
            {{-- <li class="">
          <a href="javascript:void(0)" class="navItem">
            <span class="flex items-center">
          <iconify-icon class=" nav-icon" icon="heroicons-outline:view-grid-add"></iconify-icon>
          <span>Widgets</span>
            </span>
            <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
          </a>
          <ul class="sidebar-submenu">
            <li>
              <a href="basic-widgets.html">Basic</a>
            </li>
            <li>
              <a href="statistics-widgets.html">Statistic</a>
            </li>
          </ul>
        </li> --}}
            <!-- Components -->
            {{-- <li>
          <a href="javascript:void(0)" class="navItem">
            <span class="flex items-center">
          <iconify-icon class=" nav-icon" icon="heroicons-outline:collection"></iconify-icon>
          <span>Components</span>
            </span>
            <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
          </a>
          <ul class="sidebar-submenu">
            <li>
              <a href="typography.html">Typography</a>
            </li>
            <li>
              <a href="colors.html">Colors</a>
            </li>
            <li>
              <a href="alert.html">Alert</a>
            </li>
            <li>
              <a href="buttons.html">Button</a>
            </li>
            <li>
              <a href="card.html">Card</a>
            </li>
            <li>
              <a href="carousel.html">Carousel</a>
            </li>
            <li>
              <a href="dropdown.html">Dropdown</a>
            </li>
            <li>
              <a href="image.html">Image</a>
            </li>
            <li>
              <a href="modal.html">Modal</a>
            </li>
            <li>
              <a href="progressbar.html">Progress bar</a>
            </li>
            <li>
              <a href="placeholder.html">Placeholder</a>
            </li>
            <li>
              <a href="tab-accordion.html">Tab & Accordion</a>
            </li>
            <li>
              <a href="badges.html">Badges</a>
            </li>
            <li>
              <a href="pagination.html">Pagination</a>
            </li>
            <li>
              <a href="video.html">Video</a>
            </li>
            <li>
              <a href="tooltip-popover.html">Tooltip & Popover</a>
            </li>
          </ul>
        </li> --}}
            <!-- Forms -->
            {{-- <li class="">
          <a href="javascript:void(0)" class="navItem">
            <span class="flex items-center">
          <iconify-icon class=" nav-icon" icon="heroicons-outline:clipboard-list"></iconify-icon>
          <span>Forms</span>
            </span>
            <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
          </a>
          <ul class="sidebar-submenu">
            <li>
              <a href="input.html">Input</a>
            </li>
            <li>
              <a href="input-group.html">Input group</a>
            </li>
            <li>
              <a href="input-layout.html">Input layout</a>
            </li>
            <li>
              <a href="form-validation.html">Form validation</a>
            </li>
            <li>
              <a href="wizard.html">Wizard</a>
            </li>
            <li>
              <a href="input-mask.html">Input mask</a>
            </li>
            <li>
              <a href="file-input.html">File input</a>
            </li>
            <li>
              <a href="form-repeater.html">Form repeater</a>
            </li>
            <li>
              <a href="textarea.html">Textarea</a>
            </li>
            <li>
              <a href="checkbox.html">Checkbox</a>
            </li>
            <li>
              <a href="radio.html">Radio button</a>
            </li>
            <li>
              <a href="switch.html">Switch</a>
            </li>
            <li>
              <a href="select.html">Select</a>
            </li>
            <li>
              <a href="date-picker.html">Date time picker</a>
            </li>
          </ul>
        </li> --}}
            <!-- Tables -->
            {{-- <li class="">
          <a href="javascript:void(0)" class="navItem">
            <span class="flex items-center">
          <iconify-icon class=" nav-icon" icon="heroicons-outline:table"></iconify-icon>
          <span>Tables</span>
            </span>
            <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
          </a>
          <ul class="sidebar-submenu">
            <li>
              <a href="basic-table.html">Basic table</a>
            </li>
            <li>
              <a href="advance-table.html">Advanced table</a>
            </li>
          </ul>
        </li> --}}
            <!-- Charts -->
            {{-- <li class="">
          <a href="javascript:void(0)" class="navItem">
            <span class="flex items-center">
          <iconify-icon class=" nav-icon" icon="heroicons-outline:chart-bar"></iconify-icon>
          <span>Chart</span>
            </span>
            <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
          </a>
          <ul class="sidebar-submenu">
            <li>
              <a href="apex-chart.html">Apex chart</a>
            </li>
            <li>
              <a href="chartjs.html">Chart js</a>
            </li>
          </ul>
        </li> --}}
            <!-- Map -->
            {{-- <li class="">
          <a href="map.html" class="navItem">
            <span class="flex items-center">
          <iconify-icon class=" nav-icon" icon="heroicons-outline:map"></iconify-icon>
          <span>Map</span>
            </span>
          </a>
        </li> --}}
            <!-- Icons -->
            {{-- <li class="">
          <a href="icons.html" class="navItem">
            <span class="flex items-center">
          <iconify-icon class=" nav-icon" icon="heroicons-outline:emoji-happy"></iconify-icon>
          <span>Icons</span>
            </span>
          </a>
        </li> --}}
        </ul>

    </div>
</div>
