<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <br />
  <ul class="nav">

    <li class="nav-item">
      <a class="nav-link" href="./index.php">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#permissions" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon mdi mdi-content-copy"></i>
        <span class="menu-title">Cases</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="permissions">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="./pages/cases/firs.php">FIR</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./pages/cases/chargesheets.php">Chargesheet</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./pages/cases/cases.php">Cases</a>
          </li>

        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#documents" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon fa fa-folder-open"></i>
        <span class="menu-title">Permits</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="documents">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="./pages/permit/view.php">Arm Applications</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./pages/permit/viewapproved.php">Approved Arms Application</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./pages/permit/viewrejected.php">Rejected Arms Application</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#team" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon fa fa-user-plus"></i>
        <span class="menu-title">Police</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="team">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="./pages/police/officers.php">View Officers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./pages/police/add.php">Add Officer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./pages/police/remove.php">Remove Officer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./pages/police/transfer.php">Transfer Officer</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ps" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon fa fa-university"></i>
        <span class="menu-title">Police Stations</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ps">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="./pages/police/viewps.php">View PS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./pages/police/newps.php">New PS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./pages/police/removeps.php">Remove PS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./pages/police/transferps.php">Change Area</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#users" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon fa  fa-users"></i>
        <span class="menu-title">Citizens</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="users">
        <ul class="nav flex-column sub-menu">

          <li class="nav-item">
            <a class="nav-link" href="./pages/citizens/approval.php">Account Approvals</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./pages/citizens/accounts.php">Accounts Approved</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./pages/citizens/criminals.php">Criminals</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#profile" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon fa  fa-user"></i>
        <span class="menu-title">Profile</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="profile">
        <ul class="nav flex-column sub-menu">

          <li class="nav-item">
            <a class="nav-link" href="./pages/samples/updatepassword.php">Update Password</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./pages/auth/logout.php">Signout</a>
          </li>
        </ul>
      </div>
    </li>
      </ul>
</nav>