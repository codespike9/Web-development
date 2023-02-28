<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <title>Natures club</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css.css">
    <link
      rel="stylesheet"
      href="https://silicon.ac.in/wp-content/themes/sit/assets/css/custom.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css"
    />
    <link
      rel="stylesheet"
      href="https://static.fontawesome.com/css/fontawesome-app.css"
    />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.2.0/css/all.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    /> 
    
    <link rel="stylesheet" href="cards.css" />
    <script type="text/javascript" src="javascript/project1.js"></script>
    <style>
      .login-box {
        position: absolute;
        font-family: "Outfit", sans-serif;
        top: 55%;
        left: 50%;
        width: 1100px;
        padding: 50px;
        transform: translate(-50%, -50%);
        background: rgba(0, 0, 0, 0.5);
        box-sizing: border-box;
        border-radius: 10px;
      }
      
    </style>
  </head>
  <body >
    <header>
      <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-black">
          <a class="navbar-brand" href="#">Natures Club</a>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="forms1_test.php"
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
                  <div class="dropdown-menu">
                  <a class="dropdown-item" href="forms_project1.html">info</a>
                  <a class="dropdown-item" href="forms_project1.html">Enroll</a>
                  <a class="dropdown-item" href="forms_project1.html"
                    >Something else here</a
                  >
                </div>
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
              <button
                class="btn btn-outline-success my-2 my-sm-0"
                type="search"
              >
                Search
              </button>
            </form>
          </div>
        </nav>
      </div>
    </header>
    <main style="color: #172031">
      <div class="login-box">
        <div >
            <center>
                <h1 class="main" style="color: #ccc;">Photo Gallery</h1>
    </center>
    </div>
        <div class="options">
            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
          <div class="option " style="--optionBackground: url(n1.jpg)">
            <div class="shadow"></div>
            <div class="label">
              <div class="icon">
                <img src="n2.jpg" />
              </div>
              <div class="info">
                <div class="main" style="color:cornsilk">Forest</div>
                <div class="sub" style="color:white">Greenery and sunshine.</div>
              </div>
            </div>
          </div>
          <div class="option" style="--optionBackground: url(n3.jpg)">
            <div class="shadow"></div>
            <div class="label">
              <div class="icon">
                <img src="n10.png" />
              </div>
              <div class="info">
                <div class="main" style="color:cornsilk">Mountains</div>
                <div class="sub" style="color:cornsilk">Foggy mountains and forest.</div>
              </div>
            </div>
          </div>
          <div class="option active" style="--optionBackground: url(n4.jpg)">
            <div class="shadow"></div>
            <div class="label">
              <div class="icon">
                <img src="n5.jpg" />
              </div>
              <div class="info">
                <div class="main" style="color: white">Flowers</div>
                <div class="sub"></div>
              </div>
            </div>
          </div>
          <div class="option" style="--optionBackground: url(n6.jpg)">
            <div class="shadow"></div>
            <div class="label">
              <div class="icon">
                <img src="n7.jpg" />
              </div>
              <div class="info">
                <div class="main" style="color:cornsilk">Blue Daisy</div>
                <div class="sub" style="color:cornsilk">Fresh as a daisy!</div>
              </div>
            </div>
          </div>
          <div class="option" style="--optionBackground: url(n8.jpg)">
            <div class="shadow"></div>
            <div class="label">
              <div class="icon">
                <img src="n9.jpg" />
              </div>
              <div class="info">
                <div class="main" style="color:cornsilk">Blue Cheery Blossom</div>
                <div class="sub" style="color:cornsilk">Hana wa sakuragi</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script>
        $(".option").click(function () {
          $(".option").removeClass("active");
          $(this).addClass("active");
        });
      </script>
    </main>
    <div>
    <div class="footer">
        <div class=" col-sm-4 col-md col-sm-4  col-12 col">
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
      &nbsp;
    </div>
      <?php
  include 'footer.php'
  ?>
  </div>
  </body>
</html>
