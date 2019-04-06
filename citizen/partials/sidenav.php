<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <br />
  <ul class="nav">

    <li class="nav-item">
      <a class="nav-link" href="../../index.php">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#permissions" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon mdi mdi-content-copy"></i>
        <span class="menu-title">E-FIR</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="permissions">
        <ul class="nav flex-column sub-menu">

          <li class="nav-item">
            <a class="nav-link" href="../cases/firs.php">View FIR</a>
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
            <a class="nav-link" href="../permit/apply.php">Apply For Arms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../permit/view.php">Application Status</a>
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
            <a class="nav-link" href="../samples/updatepassword.php">Update Password</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../auth/logout.php">Signout</a>
          </li>
        </ul>
      </div>
    </li>

  </ul>
</nav>
