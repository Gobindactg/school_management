    <!-- footer -->
    <footer>
      <!-- footer top -->
      <div class="footer_top">
        <div class="container">
          <div class="row">
            <!-- college name and social area -->
            <div class="col-md-3">
              <h3 class="footer_name_logo">
                <img src="{{asset('Global/images/logo.png')}}" alt="school" />
                {{env('INSTITUTION_NAME')}}
              </h3>
              <!-- social tab -->
              <div class="footer_social">
                <ul>
                  <li>
                    <a href="#"><i class="fab fa-facebook-f"></i> Facebook Page</a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-youtube"></i> Youtube Channel</a>
                  </li>
                </ul>
              </div>
              <!-- /social tab -->
            </div>
            <!-- /college name and social area -->

            <!-- important link area -->
            <div class="col-md-3">
              <h3>Important Links</h3>
              <ul>
                <li><a href="#">Ministry of Education</a></li>
                <li><a href="#">Secondary and Higher Education</a></li>
                <li><a href="#">Dhaka Education Board</a></li>
                <li><a href="#">Education Board Result</a></li>
                <li><a href="#">XI Class Admission</a></li>
              </ul>
            </div>
            <!-- /important link area -->

            <!-- sitemap -->
            <div class="col-md-3">
              <h3>Important Links</h3>
              <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Notice</a></li>
                <li><a href="#">Career</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Login</a></li>
              </ul>
            </div>
            <!-- /sitemap -->

            <!-- address -->
            <div class="address col-md-3">
              <h3>Address</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam,
                impedit. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet
                consectetur, adipisicing elit. Temporibus, voluptates.
              </p>
            </div>
            <!-- /address -->
          </div>
        </div>
      </div>
      <!-- /footer top -->
      <!-- copyright area -->
      <div class="copyright">
        <span>Copyright &copy; {{env('INSTITUTION_NAME')}} - 2022</span>
      </div>
      <!-- /copyright area -->
    </footer>
    <!-- /footer -->