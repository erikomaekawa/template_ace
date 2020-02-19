  <!DOCTYPE html>

  <html lang="en">

  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="author" content="Eriko Maekawa">

      <title>Ace in the Hole Multisport Events</title>

      <link href="css/style.css" rel="stylesheet/less">

      <link href="css/navigation.css" rel="stylesheet" type="text/css">

      <link href="css/grid.css" rel="stylesheet" type="text/css">

      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">

      <link href="https://fonts.googleapis.com/css?family=Lato|Volkhov:400,700&display=swap" rel="stylesheet">

      <script src="http://cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js"></script>


  </head>

  <body>

      <div id="fb-root"></div>
      <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0"></script>

      <header>
          <section class="mob-header">
              <span class="logo"><a href="index.php">
                      <img onclick="homepageLink();" src="images/logo11.png" class="logo" alt="Ace in the Hole Multisport Events"></a></span>

              <a class="hamburger menu-btn" href="javascript:void(0)"><span></span></a>

              <div class="main-menu-wrap">

                  <nav class="main-menu">

                      <a href="index.php">
                          <li>Home</li>
                      </a>
                      <a href="events.php">
                          <li>Events</li>
                      </a>
                      <a href="register.php">
                          <li>Register</li>
                      </a>
                      <a href="contact.php">
                          <li>Contact</li>
                      </a>
                  </nav>
              </div>
          </section>

          <nav class="reg-menu">
              <ul>
                  <a href="index.php">
                      <li>Home</li>
                  </a>
                  <a href="events.php">
                      <li>Events</li>
                  </a>
                  <a href="register.php">
                      <li>Register</li>
                  </a>
                  <a href="contact.php">
                      <li>Contact</li>
                  </a>
              </ul>
          </nav>


      </header>

      <main>

          <section>
              <h1>Heading 1 (h1) </h1>
              <p>paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text </p>
          </section>

          <section>
              <div class="register">Registration form goes here</div>
          </section>
      </main>


      <footer>
          <section>
              <div class="social-media">

                  <a href="http://facebook.com" target="_blank" class="btn-social btn-outline"><i class="fab fa-facebook-square"></i></a>

                  <a href="http://twitter.com" target="_blank" class="btn-social btn-outline"><i class="fab fa-twitter-square"></i></a>
              </div>
          </section>


          <p class="copyright">Ace in the Hole Multisport Events &copy; 2020</p> <?php echo date("Y"); ?>



      </footer>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="scripts/script.js"></script>

  </body>

  </html>
