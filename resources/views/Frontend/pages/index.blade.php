<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dhaka College</title>

    <!-- bootstrap cdn -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <!-- fontawesome cdn -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('Frontend/css/styles.css') }} " type="text/css" />
  </head>
  <body>
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
          <img src="{{asset('Frontend/images/icons/logo.png')}}" alt="logo" />
          <div>
            <span class="institution_name">
              Welcome To
              <span>Dhaka College</span>
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

    <!-- carousel area -->
    <div
      id="carouselExampleIndicators"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="3"
          aria-label="Slide 4"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            class="d-block w-100"
            src="{{asset('Frontend/images/background/slider/1.png')}}"
            alt="First slide"
          />
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-100"
            src="{{asset('Frontend/images/background/slider/1.png')}}"
            alt="Second slide"
          />
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the Second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-100"
            src="{{asset('Frontend/images/background/slider/1.png')}}"
            alt="Third slide"
          />
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the Third slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-100"
            src="{{asset('Frontend/images/background/slider/1.png')}}"
            alt="Fourth slide"
          />
          <div class="carousel-caption d-none d-md-block">
            <h5>Fourth slide label</h5>
            <p>Some representative placeholder content for the Fourth slide.</p>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- /carousel area -->

    <!-- Welcome -->
    <div class="welcome container">
      <span class="welcome_to">Welcome To</span>
      <h1 class="mb-5">Dhaka College</h1>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam vero
        iste dolorem doloremque nobis in aut eum praesentium sed nulla excepturi
        fugiat unde nihil neque quia accusamus aliquid, a voluptas porro,
        quaerat, odio autem velit provident ad! Temporibus saepe, numquam minus,
        vel, dicta corporis nihil ut veritatis veniam exercitationem ipsum
        consequatur dolorum consequuntur! Earum molestias architecto minus
        numquam alias veniam maxime consequatur illo, dolor ea, quod aut
        asperiores sunt quaerat iure nihil hic voluptates, velit labore omnis
        molestiae a vero! Quibusdam alias sit sapiente dolorem mollitia rerum
        ipsum fugiat odit sequi? Ipsa dolor quibusdam harum? Obcaecati fugit
        cupiditate repellat explicabo?
      </p>
      <button class="btn btn-lg">Learn More</button>
    </div>
    <!-- /Welcome -->

    <!-- board row -->
    <div class="board">
      <div class="container">
        <div class="row">
          <!-- Notice Board -->
          <div class="col col-sm-6">
            <span>See Our</span>
            <h2>Notice Board</h2>

            <!-- card -->
            <div class="card mb-3" style="max-width: 100%">
              <div class="row g-0">
                <div class="col-md-3">
                  <div class="card-date-time">
                    <div class="date_month">
                      <div class="date">10</div>
                      <div class="month">Mar</div>
                    </div>
                    <div class="year">2022</div>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="card-body">
                    <h5 class="card-title">Notice Published for XI</h5>
                    <p class="card-text">
                      This is a wider card with supporting text below as a
                      natural lead-in to additional content. This content is a
                      little bit longer.
                    </p>
                    <p class="card-text">
                      <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- /card -->
            <a href="#" class="btn">See All Notices</a>
          </div>
          <!-- /Notice Board -->
          <!-- Result Board -->
          <div class="col col-sm-6">
            <span>See Our</span>
            <h2>Result Board</h2>

            <!-- card -->
            <div class="card mb-3" style="max-width: 100%">
              <div class="row g-0">
                <div class="col-md-3">
                  <div class="card-date-time">
                    <div class="date_month">
                      <div class="date">10</div>
                      <div class="month">Mar</div>
                    </div>
                    <div class="year">2022</div>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="card-body">
                    <h5 class="card-title">Notice Published for XI</h5>
                    <p class="card-text">
                      This is a wider card with supporting text below as a
                      natural lead-in to additional content. This content is a
                      little bit longer.
                    </p>
                    <p class="card-text">
                      <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- /card -->
            <a href="#" class="btn">See All Results</a>
          </div>
          <!-- /Result Board -->
        </div>
      </div>
    </div>
    <!-- /board row -->

    <!-- admission banner -->
    <div class="admission">
      <div class="container">
        <h2>Admission is Going on 2022-23</h2>
        <span>Help Line: </span>
        <span>01799958648, 01754854756</span><br />
        <a href="#" class="btn">Learn More</a>
      </div>
    </div>
    <!-- /admission banner -->
    <!-- why choose -->
    <div class="container">
      <div class="why_ row">
        <span>Why Study In</span>
        <h2>Dhaka College</h2>
        <div class="col-md-4">
          <!-- card -->
          <div class="card" style="width: 100%">
            <img
              src="{{asset('Frontend/images/icons/teacher.png')}}"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Experienced Teacher</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="btn">Read More</a>
            </div>
          </div>
          <!-- /card -->

          <div class="card" style="width: 100%">
            <img
              src="{{asset('Frontend/images/icons/library.png')}}"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Resourceful Library</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="btn">Read More</a>
            </div>
          </div>
          <!-- /card -->
        </div>
        <div class="col-md-4">
          <!-- card -->
          <div class="card" style="width: 100%">
            <img
              src="{{asset('Frontend/images/icons/laboratory.png')}}"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Modern Lab Equipment</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="btn">Read More</a>
            </div>
          </div>
          <!-- /card -->
          <div class="card" style="width: 100%">
            <img
              src="{{asset('Frontend/images/icons/bus.png')}}"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Transport Facilities</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="btn">Read More</a>
            </div>
          </div>
          <!-- /card -->
        </div>
        <div class="col-md-4">
          <!-- card -->
          <div class="card" style="width: 100%">
            <img
              src="{{asset('Frontend/images/icons/online-class.png')}}"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Online Class</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="btn">Read More</a>
            </div>
          </div>
          <!-- /card -->
          <div class="card" style="width: 100%">
            <img
              src="{{asset('Frontend/images/icons/tournament.png')}}"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title">Co-Curricular</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="btn">Read More</a>
            </div>
          </div>
          <!-- /card -->
        </div>
      </div>
    </div>
    <!-- /why choose -->

    <!-- footer -->
    <footer>
      <!-- footer top -->
      <div class="footer_top">
        <div class="container">
          <div class="row">
            <!-- college name and social area -->
            <div class="col-md-3">
              <h3 class="footer_name_logo">
                <img src="{{asset('Frontend/images/icons/logo.png')}}" alt="school" />
                Dhaka College
              </h3>
              <!-- social tab -->
              <div class="footer_social">
                <ul>
                  <li>
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li>
                    <a href=""><i class="fab fa-youtube"></i></a>
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
        <span>Copyright &copy; Dhaka College - 2022</span>
      </div>
      <!-- /copyright area -->
    </footer>
    <!-- /footer -->

    <!-- jquery cdn -->
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>

    <!-- bootstrap cdn -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <!-- custom js -->
    <script type="text/javascript" src="{{asset('Frontend/js/app.js')}}"></script>
  </body>
</html>
