 <aside id="sidebar" class="sidebar sidebar_img ">
     <ul class="sidebar-nav ul_hover " id="sidebar-nav">
         @if (Auth::user()->user_level === 1.0)
             <li class="nav-item">
                 <a class="nav-link {{ Request::is('institute/*') ? '' : 'collapsed' }}" data-bs-target="#instution"
                     data-bs-toggle="collapse" href="#">
                     <i class='bx bxs-school'></i><span>Instutition Management</span><i
                         class="bi bi-chevron-down ms-auto"></i>
                 </a>
                 <ul id="instution"
                     class="nav-content collapsed {{ Request::is('institute/*') ? 'show' : '' }} button_color"
                     data-bs-parent="#sidebar-nav">
                     <li>
                         <a href="#">
                             <i class="bi bi-circle"></i><span>Instutition Approval</span>
                         </a>
                     </li>
                     <li>
                         <a href="#">
                             <i class="bi bi-circle"></i><span>Manage Instutitions</span>
                         </a>
                     </li>
                     <li>
                         <a href="#">
                             <i class="bi bi-circle"></i><span>Send Notices</span>
                         </a>
                     </li>
                 </ul>
             </li>
             <li class="nav-item">
                 <a class="nav-link collapsed" data-bs-target="#administration" data-bs-toggle="collapse" href="#">
                     <i class='bx bxs-star'></i><span>Administration</span><i class="bi bi-chevron-down ms-auto"></i>
                 </a>
                 <ul id="administration" class="nav-content collapse button_color" data-bs-parent="#sidebar-nav">
                     <li>
                         <a href="#">
                             <i class="bi bi-circle"></i><span>Manage Admins</span>
                         </a>
                     </li>
                     <li>
                         <a href="#">
                             <i class="bi bi-circle"></i><span>Add New Admin</span>
                         </a>
                     </li>
                 </ul>
             </li>
             <li class="nav-item">
                 <a class="nav-link collapsed" data-bs-target="#page_controll" data-bs-toggle="collapse" href="#">
                     <i class='bx bx-file'></i><span>Page Controll</span><i class="bi bi-chevron-down ms-auto"></i>
                 </a>
                 <ul id="page_controll" class="nav-content collapse button_color " data-bs-parent="#sidebar-nav">
                     <li>
                         <a href="#">
                             <i class="bi bi-circle"></i><span>All Pages</span>
                         </a>
                     </li>
                     <li>
                         <a href="#">
                             <i class="bi bi-circle"></i><span>Add New Pages</span>
                         </a>
                     </li>
                 </ul>
             </li>
             <li class="nav-item">
                 <a class="nav-link">
                     <i class='bx bx-cog'></i><span>Settings</span>
                 </a>
             </li>
         @endif
         @if (Auth::user()->user_level === 2.0)
             <li class="nav-item active">
                 <a class="nav-link active" href="{{ route('noipunno') }}">
                     <i class="bi bi-grid "></i>
                     <span>Dashboard</span>
                 </a>
             </li><!-- End Dashboard Nav -->
             <li class="nav-item">
                 <a class="nav-link" href="{{ route('edit.institution', Auth::user()->institution_id) }}">
                     <i class='bx bxs-school'></i><span>Manage Institution Info</span>
                 </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link {{ Request::is('teacher/*') ? '' : 'collapsed' }}" data-bs-target="#teacher"
                     data-bs-toggle="collapse" href="#">
                     <i class='bx bxs-graduation'></i><span>Teacher Management</span><i
                         class="bi bi-chevron-down ms-auto"></i>
                 </a>
                 <ul id="teacher" class="nav-content collapse {{ Request::is('teacher/*') ? 'show' : '' }}"
                     data-bs-parent="#sidebar-nav">
                     <li>
                         <a href="{{ route('addTeacher') }}">
                             <i class="bi bi-circle"></i><span>Add Teacher</span>
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('manageTeacher') }}">
                             <i class="bi bi-circle"></i><span>Manage Teachers</span>
                         </a>
                     </li>
                 </ul>
             </li>
             <li class="nav-item">
                 <a class="nav-link {{ Request::is('student/*') ? '' : 'collapsed' }}" data-bs-target="#student"
                     data-bs-toggle="collapse" href="#">
                     <i class='bx bxs-school'></i><span>School Management</span><i
                         class="bi bi-chevron-down ms-auto"></i>
                 </a>
                 <ul id="student" class="nav-content collapse {{ Request::is('student/*') ? 'show' : '' }} "
                     data-bs-parent="#sidebar-nav">
                     <li>
                         <a href="{{ route('add_group') }}">
                             <i class="bi bi-circle"></i><span>Add Group Name</span>
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('add_student') }}">
                             <i class="bi bi-circle"></i><span>Add Student</span>
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('manageStudent') }}">
                             <i class="bi bi-circle"></i><span>Promotion Student</span>
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('manageStudent') }}">
                             <i class="bi bi-circle"></i><span>Manage Students</span>
                         </a>
                     </li>
                 </ul>
             </li>
             <li class="nav-item">
                 <a class="nav-link {{ Request::is('exam/*') ? '' : 'collapsed' }}" data-bs-target="#result"
                     data-bs-toggle="collapse" href="#">
                     <i class='bx bxs-badge-check'></i><span>Exam Management</span><i
                         class="bi bi-chevron-down ms-auto"></i>
                 </a>
                 <ul id="result" class="nav-content collapse {{ Request::is('exam/*') ? 'show' : '' }} "
                     data-bs-parent="#sidebar-nav">
                     <li>
                         <a href="{{ route('admit') }}">
                             <i class="bi bi-circle"></i><span>Manage Admit Card</span>
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('seatPlan') }}">
                             <i class="bi bi-circle"></i><span>Manage Seat Plan</span>
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('marks') }}">
                             <i class="bi bi-circle"></i><span>Manage Mark Entry</span>
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('searchResult') }}">
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
                             <i class="bi bi-circle"></i><span>Manage Results</span>
                         </a>
                     </li>
                 </ul>
             </li>
             <li class="nav-item">
                 <a class="nav-link collapsed" data-bs-target="#school_management" data-bs-toggle="collapse" href="#">
                     <i class='bx bx-book-reader'></i><span>Student Management</span><i
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
                 <a class="nav-link {{ Request::is('social-media/*') || Request::is('social-media') ? '' : 'collapsed' }}"
                     data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                     <i class='bx bxs-group'></i><span>Manage Social Media</span><i
                         class="bi bi-chevron-down ms-auto"></i>
                 </a>
                 <ul id="components-nav"
                     class="nav-content collapse {{ Request::is('social-media/*') || Request::is('social-media') ? 'show' : '' }}"
                     data-bs-parent="#sidebar-nav">
                     <li>
                         <a href="{{ route('social_media') }}">
                             <i class="bi bi-circle"></i><span>Add Social Media</span>
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('manage_social_media') }}">
                             <i class="bi bi-circle"></i><span>Manage Social Media</span>
                         </a>
                     </li>
                 </ul>
             </li>
         @endif

         <li class="nav-item">
             <a class="nav-link collapsed" data-bs-target="#user_management" data-bs-toggle="collapse" href="#">
                 <i class='bx bx-user'></i><span>Manage Users</span><i class="bi bi-chevron-down ms-auto"></i>
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

         @if (Auth::user()->user_level === 1.0)
         <li class="nav-item">
             <a class="nav-link {{ Request::is('search/*') ? '' : 'collapsed' }}" data-bs-target="#search_result"
                 data-bs-toggle="collapse" href="#">
                 <i class='bx bx-search-alt-2'></i><span>Search Result</span><i class="bi bi-chevron-down ms-auto"></i>
             </a>
             <ul id="search_result" class="nav-content collapse {{ Request::is('search/*') ? 'show' : '' }}"
                 data-bs-parent="#sidebar-nav">
                 <li>
                     <a href="{{ route('search.result') }}">
                         <i class="bi bi-circle"></i><span>Search Result</span>
                     </a>
                 </li>
             </ul>
         </li>
         @endif


         {{-- library management system --}}
         @if (Auth::user()->user_level === 4.2)
             <li class="nav-item">
                 <a class="nav-link {{ Request::is('library/*') || Request::is('library') ? '' : 'collapsed' }}"
                     data-bs-target="#library_management" data-bs-toggle="collapse" href="#">
                     <i class='bx bx-library'></i><span>Library Management</span><i
                         class="bi bi-chevron-down ms-auto"></i>
                 </a>
                 <ul id="library_management"
                     class="nav-content collapse {{ Request::is('library/*') || Request::is('library') ? 'show' : '' }}"
                     data-bs-parent="#sidebar-nav">
                     <li>
                         <a href="{{ route('library') }}">
                             <i class="bi bi-circle"></i><span>Overview</span>
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('add_book') }}">
                             <i class="bi bi-circle"></i><span>Add New Book(s)</span>
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('manage_books') }}">
                             <i class="bi bi-circle"></i><span>Manage All Books</span>
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('manage_category') }}">
                             <i class="bi bi-circle"></i><span>Manage Book Category</span>
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('issue_book') }}">
                             <i class="bi bi-circle"></i><span>Issue a Book</span>
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('manage_issued_books') }}">
                             <i class="bi bi-circle"></i><span>Manage Issued Books</span>
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('create_library_card') }}">
                             <i class="bi bi-circle"></i><span>Requests for Library Card</span>
                         </a>
                     </li>
                     <li>
                         <a href="{{ route('manage_library_card') }}">
                             <i class="bi bi-circle"></i><span>Manage Library Cards</span>
                         </a>
                     </li>
                 </ul>
             </li>
         @endif

     </ul>

 </aside>
