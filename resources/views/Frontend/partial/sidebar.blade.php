<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{route('index')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#instution" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Instutition Management</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="instution" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('add_institution')}}">
                        <i class="bi bi-circle"></i><span>Add Instutition</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('manage_institution')}}">
                        <i class="bi bi-circle"></i><span>Management Instutition</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#teacher" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Teacher Management</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="teacher" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('addTeacher')}}">
                        <i class="bi bi-circle"></i><span>Add Teacher</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('manageTeacher')}}">
                        <i class="bi bi-circle"></i><span>Management Teacher</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#student" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>School Management</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="student" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('add_student')}}">
                        <i class="bi bi-circle"></i><span>Add Student</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('manageStudent')}}">
                        <i class="bi bi-circle"></i><span>Promotion Student</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('manageStudent')}}">
                        <i class="bi bi-circle"></i><span>Management Student</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#result" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Result Management</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="result" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('admit')}}">
                        <i class="bi bi-circle"></i><span>Manage Admit Card</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('seatPlan')}}">
                        <i class="bi bi-circle"></i><span>Manage Seat Plan</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('marks')}}">
                        <i class="bi bi-circle"></i><span>Manage Mark Entry</span>
                    </a>
                </li>
                <li>
                    <a href="components-alerts.html">
                        <i class="bi bi-circle"></i><span>Single Result</span>
                    </a>
                </li>
                <li>
                    <a href="components-alerts.html">
                        <i class="bi bi-circle"></i><span>Short Publish Result</span>
                    </a>
                </li>
                <li>
                    <a href="components-alerts.html">
                        <i class="bi bi-circle"></i><span>Total Student Result</span>
                    </a>
                </li>
                <li>
                    <a href="components-alerts.html">
                        <i class="bi bi-circle"></i><span>Manage Tabulation Sheet</span>
                    </a>
                </li>


                <li>
                    <a href="components-accordion.html">
                        <i class="bi bi-circle"></i><span>Management Result</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#school_management" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Student Management</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="school_management" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="components-alerts.html">
                        <i class="bi bi-circle"></i><span>Make Testimonial</span>
                    </a>
                </li>
                <li>
                    <a href="components-accordion.html">
                        <i class="bi bi-circle"></i><span>DR</span>
                    </a>
                </li>
                <li>
                    <a href="components-accordion.html">
                        <i class="bi bi-circle"></i><span>Student Stipen</span>
                    </a>
                </li>
                <li>
                    <a href="components-accordion.html">
                        <i class="bi bi-circle"></i><span>Book Register</span>
                    </a>
                </li>
                <li>
                    <a href="components-accordion.html">
                        <i class="bi bi-circle"></i><span>ID Card</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#user_management" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>User Management</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="user_management" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="components-alerts.html">
                        <i class="bi bi-circle"></i><span>User Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="components-accordion.html">
                        <i class="bi bi-circle"></i><span>User Profile Update</span>
                    </a>
                </li>

            </ul>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="components-alerts.html">
                        <i class="bi bi-circle"></i><span>Alerts</span>
                    </a>
                </li>
                <li>
                    <a href="components-accordion.html">
                        <i class="bi bi-circle"></i><span>Accordion</span>
                    </a>
                </li>
                <li>
                    <a href="components-badges.html">
                        <i class="bi bi-circle"></i><span>Badges</span>
                    </a>
                </li>
                <li>
                    <a href="components-breadcrumbs.html">
                        <i class="bi bi-circle"></i><span>Breadcrumbs</span>
                    </a>
                </li>
                <li>
                    <a href="components-buttons.html">
                        <i class="bi bi-circle"></i><span>Buttons</span>
                    </a>
                </li>
                <li>
                    <a href="components-cards.html">
                        <i class="bi bi-circle"></i><span>Cards</span>
                    </a>
                </li>
                <li>
                    <a href="components-carousel.html">
                        <i class="bi bi-circle"></i><span>Carousel</span>
                    </a>
                </li>
                <li>
                    <a href="components-list-group.html">
                        <i class="bi bi-circle"></i><span>List group</span>
                    </a>
                </li>
                <li>
                    <a href="components-modal.html">
                        <i class="bi bi-circle"></i><span>Modal</span>
                    </a>
                </li>
                <li>
                    <a href="components-tabs.html">
                        <i class="bi bi-circle"></i><span>Tabs</span>
                    </a>
                </li>
                <li>
                    <a href="components-pagination.html">
                        <i class="bi bi-circle"></i><span>Pagination</span>
                    </a>
                </li>
                <li>
                    <a href="components-progress.html">
                        <i class="bi bi-circle"></i><span>Progress</span>
                    </a>
                </li>
                <li>
                    <a href="components-spinners.html">
                        <i class="bi bi-circle"></i><span>Spinners</span>
                    </a>
                </li>
                <li>
                    <a href="components-tooltips.html">
                        <i class="bi bi-circle"></i><span>Tooltips</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="forms-elements.html">
                        <i class="bi bi-circle"></i><span>Form Elements</span>
                    </a>
                </li>
                <li>
                    <a href="forms-layouts.html">
                        <i class="bi bi-circle"></i><span>Form Layouts</span>
                    </a>
                </li>
                <li>
                    <a href="forms-editors.html">
                        <i class="bi bi-circle"></i><span>Form Editors</span>
                    </a>
                </li>
                <li>
                    <a href="forms-validation.html">
                        <i class="bi bi-circle"></i><span>Form Validation</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="tables-general.html">
                        <i class="bi bi-circle"></i><span>General Tables</span>
                    </a>
                </li>
                <li>
                    <a href="tables-data.html">
                        <i class="bi bi-circle"></i><span>Data Tables</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="charts-chartjs.html">
                        <i class="bi bi-circle"></i><span>Chart.js</span>
                    </a>
                </li>
                <li>
                    <a href="charts-apexcharts.html">
                        <i class="bi bi-circle"></i><span>ApexCharts</span>
                    </a>
                </li>
                <li>
                    <a href="charts-echarts.html">
                        <i class="bi bi-circle"></i><span>ECharts</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Charts Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="icons-bootstrap.html">
                        <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
                    </a>
                </li>
                <li>
                    <a href="icons-remix.html">
                        <i class="bi bi-circle"></i><span>Remix Icons</span>
                    </a>
                </li>
                <li>
                    <a href="icons-boxicons.html">
                        <i class="bi bi-circle"></i><span>Boxicons</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Icons Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>F.A.Q</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-contact.html">
                <i class="bi bi-envelope"></i>
                <span>Contact</span>
            </a>
        </li><!-- End Contact Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-register.html">
                <i class="bi bi-card-list"></i>
                <span>Register</span>
            </a>
        </li><!-- End Register Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-login.html">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Login</span>
            </a>
        </li><!-- End Login Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-error-404.html">
                <i class="bi bi-dash-circle"></i>
                <span>Error 404</span>
            </a>
        </li><!-- End Error 404 Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-blank.html">
                <i class="bi bi-file-earmark"></i>
                <span>Blank</span>
            </a>
        </li><!-- End Blank Page Nav --> --}}

    </ul>

</aside>