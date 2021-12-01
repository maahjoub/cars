
 <?php include_once 'core/init.php' ?>
 <?php include_once 'includes/header.php' ?>
 <?php include_once 'includes/navbar.php' ?>
    <!-- start carosul -->
    <div class="container slider">
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
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="4"
            aria-label="Slide 5"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="layout/images/1.jpg" class="d-block w-100" alt="Car no 1" />
          </div>
          <div class="carousel-item">
            <img src="layout/images/2.jpg" class="d-block w-100" alt="Car no 2" />
          </div>
          <div class="carousel-item">
            <img src="layout/images/3.jpg" class="d-block w-100" alt="Car no 3" />
          </div>
          <div class="carousel-item">
            <img src="layout/images/4.jpg" class="d-block w-100" alt="Car no 4" />
          </div>
          <div class="carousel-item">
            <img src="layout/images/5.jpg" class="d-block w-100" alt="Car no 5" />
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
    </div>
    <!-- end carosul -->
    <!-- Start our serveses -->
    <h2 class="text-center mb-3">Our Servises</h2>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card" style="width: 18rem">
            <img src="layout/images/6.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="btn btn-primary">المزيد</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem">
            <img src="layout/images/7.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="btn btn-primary">المزيد</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem">
            <img src="layout/images/8.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="#" class="btn btn-primary">المزيد</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End our serveses -->
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div
      class="modal fade"
      id="LogIn"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Log In</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          
            <form >
              <div class="modal-body">
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">
                  Username or Email</span
                >
                <input
                  type="text"
                  class="form-control"
                  placeholder="Username"
                  aria-label="Username"
                  aria-describedby="basic-addon1"
                />
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">password</span>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Your Fullname"
                  aria-label="Fullname"
                  aria-describedby="basic-addon1"
                />
              </div>
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn btn-secondary"
                  data-bs-dismiss="modal"
                >
                  Close
                </button>
                <button type="submit" name="login" class="btn btn-primary">Log In</button>
              </div>
          </div>
          </form>
        </div>
      </div>
    </div>
    <div
      class="modal fade"
      id="Register"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">
              Registration Form
            </h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          
            <form >
              <div class="modal-body">
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"
                  >User Name</span
                >
                <input
                  type="text"
                  class="form-control"
                  placeholder="Username"
                  aria-label="Username"
                  aria-describedby="basic-addon1"
                />
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"
                  >Full Name</span
                >
                <input
                  type="text"
                  class="form-control"
                  placeholder="Your Fullname"
                  aria-label="Fullname"
                  aria-describedby="basic-addon1"
                />
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Email</span>
                <input
                  type="email"
                  class="form-control"
                  placeholder="Your Email"
                  aria-label="email"
                  aria-describedby="basic-addon1"
                />
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Password</span>
                <input
                  type="password"
                  class="form-control"
                  placeholder="Chose a Password"
                  aria-label="password"
                  aria-describedby="basic-addon1"
                />
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"
                  >confirm password</span
                >
                <input
                  type="password"
                  class="form-control"
                  placeholder="Re Type Your password"
                  aria-label="password"
                  aria-describedby="basic-addon1"
                />
              </div>
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn btn-secondary"
                  data-bs-dismiss="modal"
                >
                  Close
                </button>
                <button type="submit" name="register" class="btn btn-primary">Register</button>
              </div>
          </div>
          </form>
        </div>
      </div>
    </div>
<?php include_once 'includes/footer.php' ?>
