    <!-- navigation area -->
    <nav>
      <!-- top nav -->
      <div class="top_nav">
        <div class="container">
          <div class="top_nav_left">
            <span><i class="fa-solid fa-envelope"></i>info@school.edu.bd</span>
            <a href="tel:01999999954"
              ><i class="fa-solid fa-phone"></i>+8801999999954</a
            >
          </div>
          <div class="top_nav_right">
            <span>
              <i class="fa-solid fa-circle-check"></i>
              EIIN: <b>133965</b>
            </span>
            <a href="#">
              <i class="fa-solid fa-location-dot"></i>
              View Full Address
            </a>
          </div>
          <div class="top_nav_right pe-5">
            <a href="#">
              <i class="fa-solid fa-right-to-bracket"></i>
              Log In
            </a>
            <a href="#">
              <i class="fa-solid fa-user-plus"></i>
              Register
            </a>
          </div>
          <div style="clear: both"></div>
        </div>
      </div>
      <!-- /top nav -->
      <!-- main nav -->
      <div class="main_nav">
        <div class="container">
          <img src="{{asset('Global/images/logo.png')}}" alt="logo" />
          <div>
            <span class="institution_name">
              {{-- Welcome To --}}
              <span>{{env('INSTITUTION_NAME')}}</span>
            </span>
            <span class="institution_motto">Know Thyself</span>
          </div>
          <div style="clear: both"></div>
        </div>
      </div>
      <!-- /main nav -->
      <!-- bottom nav -->
      <div class="toggle">
        <label for="toggleTrigger" class="toggle_btn btn"><i class="fa-solid fa-bars"></i></label>
      </div>
      <input type="checkbox" id="toggleTrigger"/>
      <ul class="bottom_nav">
        <li><a href="#">Home</a></li>
        <li>
          <a href="#">College</a>
          <ul>
            <li><a href="#">About College</a></li>
            <li><a href="#">Why Study Here</a></li>
            <li><a href="#">At a Glance</a></li>
            <li><a href="#">Campus Tour</a></li>
            <li><a href="#">Events</a></li>
          </ul>
        </li>
        <li>
          <a href="#">Administration</a>
          <ul>
            <li><a href="#">Chairman's Message</a></li>
            <li><a href="#">Principal's Message</a></li>
            <li><a href="#">Governing Body</a></li>
            <li><a href="#">Administrative Information</a></li>
            <li><a href="#">Officer And Stuff</a></li>
          </ul>
        </li>
        <li>
          <a href="#">Academic</a>
          <ul>
            <li><a href="#">Teachers</a></li>
            <li><a href="#">Exams</a></li>
            <li><a href="#">Syllabus</a></li>
            <li><a href="#">Academic Calender</a></li>
            <li><a href="#">Rules And Regulation</a></li>
            <li><a href="#">Student Uniform</a></li>
            <li><a href="#">Clubs</a></li>
          </ul>
        </li>
        <li>
          <a href="#">Result</a>
          <ul>
            <li><a href="#">HSC Result</a></li>
            <li><a href="#">Academic Result</a></li>
          </ul>
        </li>
        <li>
          <a href="#">Admission</a>
          <ul>
            <li><a href="#">Admission Information</a></li>
            <li><a href="#">Course</a></li>
            <li><a href="#">Transfer Procedure(TC)</a></li>
            <li><a href="#">Prospectus</a></li>
            <li><a href="#">Fee and Payment</a></li>
          </ul>
        </li>
        <li>
          <a href="#">Facilities</a>
          <ul>
            <li><a href="#">Library</a></li>
            <li><a href="#">Lab</a></li>
            <li><a href="#">Scholarshipt</a></li>
            <li><a href="#">Transport</a></li>
            <li><a href="#">Online Class</a></li>
            <li><a href="#">Student Uniform</a></li>
            <li><a href="#">Clubs</a></li>
          </ul>
        </li>
        <li>
          <a href="#">Gallery</a>
          <ul>
            <li><a href="#">images</a></li>
            <li><a href="#">Videos</a></li>
          </ul>
        </li>
        <li>
          <a href="#">Career</a>
          <ul>
            <li><a href="#">Job Circular</a></li>
            <li><a href="#">Result of Recruitment Test</a></li>
          </ul>
        </li>
        <li><a href="#">Contact</a></li>
      </ul>
      <!-- /bottom nav -->
    </nav>
    <!-- /navigation area -->