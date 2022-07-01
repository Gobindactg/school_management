 <?php

    use App\Models\User;
    use App\Models\Jobs;


    $id = Auth::id();
    $institution_id = User::find($id)->institution_id;
    $teachers = Jobs::select('*')
        ->where('institution_id', $institution_id)
        ->where('job_role', 'teacher')
        ->where('status', 'pending')
        ->get();
    $teachersCount = count($teachers);
    ?>
 <aside id="sidebar" class="sidebar sidebar_img ">
     <ul class="sidebar-nav ul_hover " id="sidebar-nav">


         {{-- web application administrations/super users --}}
         @if (Auth::user()->user_level === 2.0)
         <li class="nav-item active">
             <a class="nav-link active" href="{{ route('noipunno') }}">
                 <i class="bi bi-grid "></i>
                 <span>Dashboard</span>
             </a>
         </li><!-- End Dashboard Nav -->

         <li class="nav-item">
             <a class="nav-link {{ Request::is('institute/*') ? '' : 'collapsed' }}" data-bs-target="#instution" data-bs-toggle="collapse" href="#">
                 <i class='bx bxs-school'></i><span>Instutition Management</span><i class="bi bi-chevron-down ms-auto"></i>
             </a>
             <ul id="instution" class="nav-content collapsed {{ Request::is('institute/*') ? 'show' : '' }} button_color" data-bs-parent="#sidebar-nav">

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
             <a class="nav-link" href="{{ route('edit.institution') }}">
                 <i class='bx bxs-school'></i><span>Manage Institution Info</span>
             </a>
         </li>
         <li class="nav-item">
             <a class="nav-link {{ Request::is('subject/*') ? '' : 'collapsed' }}" data-bs-target="#subject" data-bs-toggle="collapse" href="#">
                 <i class='bx bxs-book'></i><span>Subject Management</span><i class="bi bi-chevron-down ms-auto"></i>
             </a>
             <ul id="subject" class="nav-content collapse {{ Request::is('subject/*') ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
                 <li>
                     <a href="{{ route('addSubject') }}">
                         <i class="bi bi-circle"></i><span>Add Subject</span>
                     </a>
                 </li>
                 <li>
                     <a href="{{ route('manageSubject') }}">
                         <i class="bi bi-circle"></i><span>Manage Subjects</span>
                     </a>
                 </li>
             </ul>
         </li>

         <li class="nav-item">
             <a class="nav-link {{ Request::is('student/*') ? '' : 'collapsed' }}" data-bs-target="#student" data-bs-toggle="collapse" href="#">
                 <i class='bx bxs-school'></i><span>School Management</span><i class="bi bi-chevron-down ms-auto"></i>
             </a>
             <ul id="student" class="nav-content collapse {{ Request::is('student/*') ? 'show' : '' }} " data-bs-parent="#sidebar-nav">
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
                     <a href="{{ route('manage_routine') }}">
                         <i class="bi bi-circle"></i><span>Manage Routine</span>
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
             <a class="nav-link {{ Request::is('exam/*') ? '' : 'collapsed' }}" data-bs-target="#result" data-bs-toggle="collapse" href="#">
                 <i class='bx bxs-badge-check'></i><span>Exam Management</span><i class="bi bi-chevron-down ms-auto"></i>
             </a>
             <ul id="result" class="nav-content collapse {{ Request::is('exam/*') ? 'show' : '' }} " data-bs-parent="#sidebar-nav">
                 <li>
                     <a href="{{ route('search.admit') }}">
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
                 <li>
                     <a href="{{ route('publishResult')}}">
                         <i class="bi bi-circle"></i><span>Short Publish Result</span>
                     </a>
                 </li>
                 <li>
                     <a href="components-alerts.html">
                         <i class="bi bi-circle"></i><span>Total Student Result</span>
                     </a>
                 </li>
                 <li>
                     <a href="{{route('tabulation')}}">
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
                 <i class='bx bx-book-reader'></i><span>Student Management</span><i class="bi bi-chevron-down ms-auto"></i>
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
             <a class="nav-link {{ Request::is('social-media/*') || Request::is('social-media') ? '' : 'collapsed' }}" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                 <i class='bx bxs-group'></i><span>Manage Social Media</span><i class="bi bi-chevron-down ms-auto"></i>
             </a>
             <ul id="components-nav" class="nav-content collapse {{ Request::is('social-media/*') || Request::is('social-media') ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
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
     </ul>

 </aside>
 @endif