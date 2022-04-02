@extends('Frontend.layout')
@section('title', env('INSTITUTION_NAME'))

@section('content')
    <!-- Welcome -->
    <div class="welcome container">
      <span class="welcome_to">Welcome To</span>
      <h1 class="mb-5">{{env('INSTITUTION_NAME')}}</h1>
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
        <h2>{{env('INSTITUTION_NAME')}}</h2>
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
@endsection