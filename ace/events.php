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

      <?php include 'includes/header.inc.php'; ?>

      <main>

          <section>
              <h1>Heading 1 (h1) </h1>
          </section>

          <section>
              <img src="images/placeholder-feature-image.jpg" id="mobile-img">
              <figcaption>Fig.1 - Image goes here</figcaption>
          </section>

          <section>

              <h2>Heading 2 (h2) </h2>
              <p>paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text </p>

          </section>

          <section>

              <h2>Heading 3 (h2) </h2>

              <div class="schedule">Schedule with table goes here</div>


          </section>

          <section>

              <h2>Heading 4 (h2) </h2>
              <p>paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text </p>

          </section>

          <section>

              <h2>Heading 5 (h2) </h2>
              <p>paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text </p>

          </section>

          <section>

              <h2>Heading 6 (h2) </h2>
              <p>paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text </p>

          </section>

          <section>

              <h2>Heading 7 (h2) </h2>
              <p>paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text </p>

          </section>

          <section>

              <h2>Heading 8 (h2) </h2>
              <p>paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text paragraph text </p>

              <button onclick="window.location.href = 'faq.php';" id="faq">This button or link goes to the FAQ page</button>
          </section>

          <section>
              <button onclick="window.location.href = 'register.php';" id="register-button">This button or link goes to the registration page</button>
          </section>


          <section id="weather">
              <a class="weatherwidget-io" href="https://forecast7.com/en/40d71n74d01/new-york/?unit=us" data-label_1="Portland" data-label_2="WEATHER" data-theme="original">Portland WEATHER</a>

              <script>
                  ! function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (!d.getElementById(id)) {
                          js = d.createElement(s);
                          js.id = id;
                          js.src = 'https://weatherwidget.io/js/widget.min.js';
                          fjs.parentNode.insertBefore(js, fjs);
                      }
                  }(document, 'script', 'weatherwidget-io-js');

              </script>
          </section>
      </main>

      <?php include 'includes/footer.inc.php'; ?>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="scripts/script.js"></script>

  </body>

  </html>
