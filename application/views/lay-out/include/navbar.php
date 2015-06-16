      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>">TheGamePlace</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
            <?php if( !($this->session->userdata('logged_in'))) : ?>
                <li><a href="<?php echo base_url(); ?>users/register">Create Account</a></li>
            <?php endif; ?>
            
            <li><a href="<?php echo base_url(); ?>users/contact">Contact</a></li>
          </ul>
          <?php if( ! ($this->session->userdata('logged_in'))): ?>
		   <form method="post" action="<?php base_url(); ?>users/login" class="navbar-form navbar-right">
            <div class="form-group">
<input name="username" type="text" class="form-control" placeholder="Enter Username">
			</div>
            <div class="form-group">
<input name="password" type="password" class="form-control" placeholder="Enter Password">
            </div>
        <button name="submit" type="submit" class="btn btn-default">Login</button>
      </form>
       <?php else : ?>
           <form class="navbar-form navbar-right" method="post" action="<?php echo base_url(); ?>users/logout">
               <button name="submit" type="submit" class="btn btn-default">Logout</button>
           </form>
       <?php endif; ?>
        </div><!--/.nav-collapse -->
      </div>