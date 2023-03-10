    <!-- Teamwork / Footer-->
    <div class="footer" alt="link-5">
      <div id="footer" alt="link-5">
        <div class="container">
          <div class="row">
            <a href="index.php">
              <img
                class="hameenlinna-logo"
                src="pictures/hameenlinna-logo.png"
                width="60"
              />
            </a>
          </div>
          <div class="row">
            <div class="col-md-4 item">
              <h3>Contact information</h3>
              <p>
                Hämeenlinnan kaupunki<br />
                PL 84<br />
                13100 Hämeenlinna<br />
                Puh. 03 1264
                <a class="email" href="#footer"
                  ><br /><br />visamaki@visamaki.fi</a
                >
              </p>
              <p><a class="terms" href="#footer">Website terms of use</a></p>
            </div>
            <div class="col-md-4 item text-center">
              <div class="shortcuts">
                <h3>Shortcuts:</h3>
                <p>
                  <a class="nav-link" href="ex1.php"
                    ><b>Exercise 1<br /></b
                  ></a>
                </p>
                <p>
                  <a class="nav-link" href="ex2.php"
                    ><b>Exercise 2<br /></b
                  ></a>
                </p>
                <p>
                  <a class="nav-link" href="ex3.php"
                    ><b>Exercise 3<br /></b
                  ></a>
                </p>
                <p>
                  <a class="nav-link" href="controlflow.php"
                    ><b>Exercise 4<br /></b
                  ></a>
                </p>
                <p>
                  <a class="nav-link" href="array.php"
                    ><b>Exercise 5<br /></b
                  ></a>
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="social">
                <h3>Follow us</h3>
                <p>
                  <a
                    href="#"
                    target="_blank"
                  >
                    <img
                      src="pictures/facebook.png"
                      alt="facebook"
                      width="50"
                      height="50"
                  /></a>
                  <a
                    href="#"
                    target="_blank"
                  >
                    <img
                      src="pictures/insta.png"
                      alt="instagram"
                      width="50"
                      height="50"
                  /></a>
                </p>
                <p>
                  <a href="#" target="_blank">
                    <img
                      src="pictures/twitter.png"
                      alt="twitter"
                      width="50"
                      height="50"
                  /></a>
                  <a
                    href="#"
                    target="_blank"
                  >
                    <img
                      src="pictures/youtube.png"
                      alt="twitter"
                      width="50"
                      height="50"
                  /></a>
                </p>
              </div>
            </div>
          </div>
            <div class="row justify-content-center" id = "footer-center">
              <p class="copyright">Viktória Szabó © 2023<br></p>
              <p><?php
                // echo "Last modified on ".date("F d Y H:i:s.", getlastmod());
                //echo $_SERVER['PHP_SELF']; 

              $fname = basename($_SERVER['PHP_SELF']);
              $last_modified = filemtime($fname);
              echo "Last modified on: " . date('l jS \o\f F Y, h:i:s A', $last_modified); 
              ?></p>
            </div>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
