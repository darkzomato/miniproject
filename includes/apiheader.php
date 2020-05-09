<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-success fixed-top">
      <div class="container">
        
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-link" >
                          <a id="clock" style="font-size: 25px;font-weight: bold;background: #122233;color: orange;padding-left: 8px;padding-right: 8px;border-radius: 7px"></a>
                        </li>
           
			<li class="nav-link">
              <a href="mng.php" style="font-size: 25px;background:#123456;color:white;padding-left: 8px;padding-right: 8px;border-radius: 7px" title="manage">manage post</a>
            </li>

		<li class="nav-link">
              <a href="admin/userpost.php" style="font-size: 25px;background:#314321;color:white;padding-left: 8px;padding-right: 8px;border-radius: 7px" title="post">add post</a>
            </li>

             
           
		<li class="nav-link">
              <a href="userlogout.php" style="font-size: 25px;background:#332356;color:red;padding-left: 8px;padding-right: 8px;border-radius: 7px" title="logout">logout</a>
            </li>



<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 20px;background:#332356;color:red;padding-left: 8px;padding-right: 8px;border-radius: 4px">
          catogory
        </a>
        <div class="dropdown-menu" >
           <a href="sports.php" style="font-size: 25px;background:#314321;color:white;padding-left: 8px;padding-right: 8px;border-radius: 7px" title="post">sprt</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
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