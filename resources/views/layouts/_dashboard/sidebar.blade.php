<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link {{ set_active(['dashboard.index']) }} collapsed" href="{{ route('dashboard.index') }}">
                <i class="bi bi-grid"></i>
                <span>{{ __('dashboard.link.dashboard') }}</span>
            </a>
        </li>
        <!-- End Dashboard Nav -->

        <li class="nav-heading">{{ __('dashboard.menu.master') }}</li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse"
                aria-expanded="false" href="#">
                <i class="bi bi-newspaper""></i><span>{{ __('dashboard.link.news.news') }}</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('newspost.index') }}"
                        class="{{ set_active(['newspost.index', 'newspost.create', 'newspost.edit', 'newspost.show']) }}">
                        <i class="bi bi-circle"></i><span>{{ __('dashboard.link.news.post') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('categories.index') }}"
                        class="{{ set_active(['categories.index', 'categories.create', 'categories.edit', 'categories.show']) }}">
                        <i class="bi bi-circle"></i><span>{{ __('dashboard.link.news.category') }}</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Components Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-faq.html">
                <i class="bi bi-bell"></i>
                <span>{{ __('dashboard.link.announcements') }}</span>
            </a>
        </li><!-- End Announcements Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-faq.html">
                <i class="bi bi-calendar-event"></i>
                <span>{{ __('dashboard.link.agenda') }}</span>
            </a>
        </li><!-- End Agenda Page Nav -->


        <li class="nav-heading">{{ __('dashboard.menu.user_permission') }}</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-faq.html">
                <i class="bi bi-person"></i>
                <span>{{ __('dashboard.link.users') }}</span>
            </a>
        </li><!-- End Users Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-faq.html">
                <i class="bi bi-hammer"></i>
                <span>{{ __('dashboard.link.roles') }}</span>
            </a>
        </li><!-- End Roles Page Nav -->


        <li class="nav-heading">{{ __('dashboard.menu.setting') }}</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('filemanager.index')}}">
                <i class="bi bi-files"></i>
                <span>{{ __('dashboard.link.file_manager') }}</span>
            </a>
        </li><!-- End File Manager Page Nav -->

    </ul>

</aside>
<!-- End Sidebar-->
