<!DOCTYPE >
<head>
  <title>Natures club</title>
  <link
    rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous"
  />
  <link
    rel="stylesheet"
    href="https://silicon.ac.in/wp-content/themes/sit/assets/css/custom.css"
  />
  <link rel="stylesheet" href="css.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet"
  />
  <link
    rel="stylesheet"
    href="https://silicon.ac.in/wp-content/themes/sit/assets/css/owl.carousel.min.css"
  />
  <script type="text/javascript" src="javascript/project1.js"></script>
  
  <style>
    footer {
  width: 100%;
  background-color: #263238;
  min-height: 250px;
  padding: 10px 0px 25px 0px;
  
  
}
    img {
      width: 150px;
    }
  </style>
</head>
<body>
  <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Natures Club</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a
              class="nav-link"
              href="forms1_test.php"
              >Enroll <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Achievements</a>
          </li>
          <div class="dropdown">
            <div
              class="btn btn-secondary dropdown-toggle"
              type="button"
              data-toggle="dropdown"
              aria-expanded="true"
            >
              More
            </div>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="forms_project1.html">info</a>
              <a class="dropdown-item" href="forms_project1.html">Enroll</a>
              <a class="dropdown-item" href="forms_project1.html"
                >Something else here</a
              >
            </div>
          </div>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input
            class="form-control mr-sm-2"
            type="search"
            placeholder="Search"
            aria-label="Search"
          />
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
            Search
          </button>
        </form>
      </div>
    </nav>
  </div>
  <div style="background-image: url(n8.jpg);background-size: cover">
    <div>
</div>
  <div class="container">
    <br />
    <div class="card-deck">
      <div class="card">
        <img src="n1.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title">Sunshine and Greens</h5>
          <p class="card-text">
            This is a longer card with supporting text below as a natural
            lead-in to additional content. This content is a little bit longer.
          </p>
        </div>
      </div>
      <div class="card">
        <img src="n3.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title">Foggy Mountains</h5>
          <p class="card-text">
            This card has supporting text below as a natural lead-in to
            additional content.
          </p>
        </div>
      </div>
      <div class="card">
        <img src="n2.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title">Scary Forest</h5>
          <p class="card-text">
            This is a wider card with supporting text below as a natural lead-in
            to additional content. This card has even longer content.
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="content">
    <br />
    <div class="jumbotron">
      <h1 class="display-4">Go Green!</h1>
      <p class="lead">
        This club is completely dedicated to nature's peace. Join us to
        contribute!!
      </p>
      <hr class="my-4" />
      <p>Mail us at @naturesclub009@gmail.com</p>
      <a
        style="color: white;"
        class="btn btn-primary btn-lg"
        onclick="only_for_alert()"
        role="button"
        >Learn more</a
      >
    </div>
    <?php
  include 'footer.php'
  ?>
  </div>
  
</body>
