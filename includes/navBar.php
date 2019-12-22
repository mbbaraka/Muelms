   
     <nav class="navbar navbar-expand-lg navbar-secondary bg-secondary border-bottom">
        <button class="btn btn-default" id="menu-toggle"><i class="fa fa-bars text-light"></i></button>
        <!--- Current Page Heading --->
        <h5 class="pl-3 text-light">Site Title</h5>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars text-light"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
             <li class="nav-item navbar-menu text-light">
                <a class="nav-link text-light" href="./switch.php" data-toggle="tooltip" title="Swith to your staff Account">Switch Account</a>
              </li>
              <li class="nav-item navbar-menu dropdown text-light">
                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-user text-light"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="account.php">Settings</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
              </li>
          </ul>
        </div>
      </nav>