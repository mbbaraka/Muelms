 <!-- Sidebar -->
    <?php 

    $menu_page = '/';
    $fname = $_SESSION['fname'];

    if ($_SESSION['staff-level'] == "") {

      $side_bar ='
        <div class="bg-secondary border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">
        <h5 class="text-capitalize"><a data-toggle="tooltip" title="Account Settings" href="account.php" class="text-light">Hello, '.$fname.'</a></h5>
      </div>
      <div class="list-group list-group-flush">
        <ul class="nav navbar-nav">
          <li><a href="/" class="nav-link nav-pills list-group-item pl-5 bg-secondary menu-items"><i class="fa fa-tachometer-alt mr-2"> </i>Dashboard</a></li>
          <li><a href="/?tab=1.1" class="nav-link nav-pills list-group-item pl-5 bg-secondary menu-items"><i class="fa fa-handshake mr-2"></i>Accepted Leaves</a></li>
          <li><a href="/?tab=1.2" class="nav-link nav-pills list-group-item pl-5 bg-secondary menu-items"><i class="fa fa-retweet mr-2"></i>Pending Leaves</a></li>
          <li><a href="/?tab=1.3" class="nav-link nav-pills list-group-item pl-5 bg-secondary menu-items"><i class="fa fa-times-circle mr-2"></i>Rejected Leaves</a></li>
          <li><a href="/?tab=1.4" class="nav-link nav-pills list-group-item pl-5 bg-secondary menu-items"><i class="fa fa-plus mr-2"></i>Apply for Leave</a></li>
          <li><a href="/?tab=1.5" class="nav-link nav-pills list-group-item pl-5 bg-secondary menu-items"><i class="fa fa-list-ul mr-2"></i>Leave History</a></li>
        </ul>
      </div>
    </div>
      ';
      echo $side_bar;
    }
    elseif ($_SESSION['staff-level'] == "hod") {

      $side_bar ='
        <div class="bg-secondary border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">
        <h5 class="text-capitalize"><a data-toggle="tooltip" title="Account Settings" href="account.php" class="text-light">Hello, '.$fname.'</a></h5>
      </div>
      <div class="list-group list-group-flush">
        <ul class="nav navbar-nav">
          <li><a href="/" class="nav-link nav-pills list-group-item pl-5 bg-secondary menu-items"><i class="fa fa-tachometer-alt mr-2"> </i>Dashboard</a></li>
          <li><a href="/?tab=1" class="nav-link nav-pills list-group-item pl-5 bg-secondary menu-items"><i class="fa fa-handshake mr-2"></i>Pending Leaves</a></li>
          <li><a href="/?tab=2" class="nav-link nav-pills list-group-item pl-5 bg-secondary menu-items"><i class="fa fa-retweet mr-2"></i>Accepted Leaves</a></li>
          <li><a href="/?tab=3" class="nav-link nav-pills list-group-item pl-5 bg-secondary menu-items"><i class="fa fa-times-circle mr-2"></i>Rejected Leaves</a></li>
          <li><a href="/?tab=4" class="nav-link nav-pills list-group-item pl-5 bg-secondary menu-items"><i class="fa fa-plus mr-2"></i>Track Leaves</a></li>
        </ul>
      </div>
    </div>
      ';
      echo $side_bar;
    }elseif ($_SESSION['staff-level'] == "hr") {

      $side_bar ='
        <div class="bg-secondary border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">
        <h5 class="text-capitalize"><a data-toggle="tooltip" title="Account Settings" href="account.php" class="text-light">Hello, '.$fname.'</a></h5>
      </div>
      <div class="list-group list-group-flush">
        <ul class="nav navbar-nav">
          <li><a href="/" class="nav-link nav-pills list-group-item pl-5 bg-secondary menu-items"><i class="fa fa-tachometer-alt mr-2"> </i>Dashboard</a></li>
          <li><a href="/?tab=2.1" class="nav-link nav-pills list-group-item pl-5 bg-secondary menu-items"><i class="fa fa-handshake mr-2"></i>Pending Leaves</a></li>
          <li><a href="/?tab=2.2" class="nav-link nav-pills list-group-item pl-5 bg-secondary menu-items"><i class="fa fa-retweet mr-2"></i>Accepted Leaves</a></li>
          <li><a href="/?tab=2.3" class="nav-link nav-pills list-group-item pl-5 bg-secondary menu-items"><i class="fa fa-times-circle mr-2"></i>Rejected Leaves</a></li>
        </ul>
      </div>
    </div>
      ';
      echo $side_bar;
    } elseif ($_SESSION['staff-level'] == "us") {

      $side_bar ='
        <div class="bg-secondary border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">
        <h5 class="text-capitalize"><a data-toggle="tooltip" title="Account Settings" href="account.php" class="text-light">Hello, '.$fname.'</a></h5>
      </div>
      <div class="list-group list-group-flush">
        <ul class="nav navbar-nav">
          <li><a href="/" class="nav-link nav-pills list-group-item pl-5 bg-secondary menu-items"><i class="fa fa-tachometer-alt mr-2"> </i>Dashboard</a></li>
          <li><a href="/?tab=3.1" class="nav-link nav-pills list-group-item pl-5 bg-secondary menu-items"><i class="fa fa-handshake mr-2"></i>Pending Leaves</a></li>
          <li><a href="/?tab=3.2" class="nav-link nav-pills list-group-item pl-5 bg-secondary menu-items"><i class="fa fa-retweet mr-2"></i>Accepted Leaves</a></li>
          <li><a href="/?tab=3.3" class="nav-link nav-pills list-group-item pl-5 bg-secondary menu-items"><i class="fa fa-times-circle mr-2"></i>Rejected Leaves</a></li>
        </ul>
      </div>
    </div>
      ';
      echo $side_bar;
    }
    else
    {
    echo '
    <div class="bg-secondary border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">
          <h5 class="text-capitalize"><a href="account.php" class="text-light"><i class="fa fa-user pr-2"></i>Hello, Baraka</a></h5>
        </div>
        <div class="list-group list-group-flush">
          <ul class="nav navbar-nav">
            <li>
              <a href="/admin" class="nav-link nav-pills list-group-item pl-5 bg-secondary menu-items"><i class="fa fa-home mr-2"> </i>Dashboard</a>
            </li>
            <li>
              <a href="/admin?tab=5" class="nav-link nav-pills list-group-item pl-5 bg-secondary menu-items"><i class="fa fa-list-alt mr-2"> </i>Leaves</a>
            </li>
            <li>
              <a href="/admin?tab=1" class="nav-link nav-pills list-group-item pl-5 bg-secondary menu-items"><i class="fa fa-users mr-2"> </i>New Users</a>
            </li>
            <li>
              <a href="/admin?tab=2" class="nav-link nav-pills list-group-item pl-5 bg-secondary menu-items"><i class="fa fa-tasks mr-2"> </i>Assign Roles</a>
            </li>
            <li>
              <a href="/admin?tab=3" class="nav-link nav-pills list-group-item pl-5 bg-secondary menu-items"><i class="fa fa-mail-bulk mr-2"> </i>Leave Applications</a>
            </li>
            <li>
              <a href="/admin?tab=4" class="nav-link nav-pills list-group-item pl-5 bg-secondary menu-items"><i class="fa fa-cog mr-2"> </i>Settings</a>
            </li>
          </ul>
        </div>
    </div>
    ';
      }
    ?>
    