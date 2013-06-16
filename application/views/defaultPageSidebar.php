 <div class="sidebar1">
    <ul class="nav">
        
      
      <li><a href="<?php base_url();?>/index.php">Home</a></li>
      <li><a href="<?php base_url();?>/index.php/staticPages/destination/aboutUsPage">About Us</a></li>
      <li><a href="<?php base_url();?>/index.php/staticPages/destination/servicesPage">Services</a></li>
      <li><a href="<?php base_url();?>/index.php/staticPages/destination/staffPage">Meet the Staff</a></li>
      <li><a href="<?php base_url();?>/index.php/staticPages/destination/officeHoursPage">Locations/Hours</a></li>
     <!-- <li><a href="<?php base_url();?>Vetgroup_FAQ.dwt.php">FAQ</a></li> -->
      
      <?php if ($this->session->userdata('logged_in')) {?>
      <li><a href="<?php base_url();?>/index.php/front_end/login/account">Account</a></li>
      <li><a href="<?php base_url();?>/index.php/front_end/login/login0">Logout</a></li>
          <?php } else { ?>
      <li><a href="<?php base_url();?>/index.php/front_end/login/login1">Login</a></li>
      <?php } ?>
    </ul>
    <p> The above links demonstrate a basic navigational structure using an unordered list styled with CSS. Use this as a starting point and modify the properties to produce your own unique look. If you require flyout menus, create your own using a Spry menu, a menu widget from Adobe's Exchange or a variety of other javascript or CSS solutions.</p>
    <p>If you would like the navigation along the top, simply move the ul.nav to the top of the page and recreate the styling.</p>
  <!-- end .sidebar1 --></div>