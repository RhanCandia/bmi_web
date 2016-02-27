<?php
  $user_info = $this->session->userdata('user');
  $user_info = $user_info[0];
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-collapse" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url(); ?>">ACRE-WEMTech</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="main-nav-collapse">

      <ul class="nav navbar-nav">
        <?php if ($this->session->userdata('logged')): ?>
          <?php if($user_info->user_group == 0): ?>
            <li class="<?php echo ($page_active == 'calculator') ? 'active' : '' ; ?>"><a href="<?php echo base_url(); ?>growth/bmi">BMI CALCULATOR</a></li>
          <?php endif; ?>
        <?php endif; ?>
        <li class="<?php echo ($page_active == 'workout') ? 'active' : '' ; ?>"><a href="<?php echo base_url(); ?>workout">WORKOUT</a></li>
        <!-- <li class="<?php echo ($page_active == 'home') ? 'active' : '' ; ?>"><a href="<?php echo base_url(); ?>">HOME</a></li> -->
        <li class="dropdown <?php echo (($page_active == 'chart_boys') || $page_active == 'chart_girls') ? 'active' : '' ; ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">GROWTH CHART <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="<?php echo ($page_active == 'chart_boys') ? 'active' : '' ; ?>"><a href="<?php echo base_url(); ?>growth/boys">BOYS</a></li>
            <li class="<?php echo ($page_active == 'chart_girls') ? 'active' : '' ; ?>"><a href="<?php echo base_url(); ?>growth/girls">GIRLS</a></li>
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
      <?php if ($this->session->userdata('logged')): ?>
        <?php if($user_info->user_group == 0): ?>
          <li class="<?php echo ($page_active == 'profile') ? 'active' : '' ; ?>"><a href="<?php echo base_url(); ?>user"><?php echo $user_info->fname . ' ' . $user_info->lname; ?></a></li>
        <?php else: ?>
          <li class="<?php echo ($page_active == 'reports') ? 'active' : '' ; ?>"><a href="<?php echo base_url(); ?>reports">REPORTS</a></li>
        <?php endif; ?>
        <li><a href="<?php echo base_url(); ?>user/signout">SIGN OUT</a></li>
      <?php else: ?>
        <li class="<?php echo ($page_active == 'signin') ? 'active' : '' ; ?>"><a href="<?php echo base_url(); ?>user/signin">SIGN IN</a></li>
        <li class="<?php echo ($page_active == 'signup') ? 'active' : '' ; ?>"><a href="<?php echo base_url(); ?>user/signup">SIGN UP</a></li>
      <?php endif; ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
