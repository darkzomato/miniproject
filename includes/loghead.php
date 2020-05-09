<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="images/lg1.jfif" height="50" title="Home"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-link" >
                          <a id="clock" style="font-size: 25px;font-weight: bold;background: #545454;color: orange;padding-left: 8px;padding-right: 8px;border-radius: 7px"></a>
                        </li>
            <li class="nav-link">
              <a href="about-us.php" style="font-size: 25px;background:#545454;color:white;padding-left: 8px;padding-right: 8px;border-radius: 7px" title="Know about us">About</a>
            </li>
		
            <li class="nav-link">
              <a href="subscribers.php" style="font-size: 25px;background:#545454;color:green;padding-left: 8px;padding-right: 8px;border-radius: 7px" title="Subscribe to our offline weekly">signup</a>
            </li>
            <li class="nav-link">
              <a href="contact-us.php" style="font-size: 25px;background:#545454;color:white;padding-left: 8px;padding-right: 8px;border-radius: 7px" title="Contact Us">Contact Us</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    <script type="text/javascript">
      (function () {
            var clockElement = document.getElementById( "clock" );
            function updateClock ( clock ) {
            clock.innerHTML = new Date().toLocaleTimeString();
            }
            setInterval(function () {
             updateClock( clockElement );
            }, 1000);
            }());

    </script>