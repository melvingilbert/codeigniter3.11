  <div class="load-nav">
    <nav class="navbar navbar-default navbar-fixed-top" id="focus_div">
      <div class="container-fluid">
        <ul class="nav navbar-nav">
          <li>
            <a class="navbar-brand" href="#" data-toggle="tooltip" title="Home"><span class="fa fa-home"></span></a>
          </li>
          <li><a href="#"><strong>COMPANY A</strong></a></li>        
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            HOME <span class="caret"></span></a>
            <ul class="dropdown-menu scrollable-menu" role="menu">
              <li class="active"> <a href="#">HOME</a></li>
            </ul>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right hover-primary" style="margin-right: 15px;">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tony Stark <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Edit Profile</a></li>
              <li class="divider"></li>
              <li><a href="#">xxxx</a></li>
              <li class="divider"></li>
              <li><a href="#">Admin</a></li>
            </ul>
          </li>
          <a class="btn btn-default" href="#" style="margin:8px 22px 0px 15px;">Logout</a>
        </ul>
      </div>
    </nav>  
  
    <!-- MENUBAR -->
    <div class="menubar" id="nav">
    <a class="nav menu selected" href="#">DASHBOARD</a>
    <a class="nav menu " href="#">INFO</a>
    </div>

    <!-- MENUBAR 2 -->
    <div class="menubar2" id="sub_menu_refrensi">
    <a class="nav menu" href="<?php echo config_item('base_url');?>users/">DASHBOARD</a>
    <a class="nav menu" href="<?php echo config_item('base_url');?>users/hire">HRD</a>
    <a class="nav menu" href="<?php echo config_item('base_url');?>users/fired">HISTORY</a>
    </div>
  </div>
  