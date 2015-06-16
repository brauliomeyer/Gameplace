<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>  

<div class="panel-body">
    <form name="form" role="form" method="post" action="<?php echo base_url(); ?>users/register">
    <div class="form-group">
	    <label for="first_name">First Name</label>*
<input type="text" class="form-control" name="first_name" placeholder="Enter Your First Name">
	</div>
    <div class="form-group">
	    <label for="last_name">Last Name</label>*
<input type="text" class="form-control" name="last_name" placeholder="Enter Your Last Name">
    </div>
	<div class="form-group">
	    <label for="email">Email</label>*
<input type="email" class="form-control" name="email" placeholder="Enter Your Email Address">
    </div>
    <div class="form-group">
	    <label for="email2">Re-enter Email</label>*
<input type="email" class="form-control" name="email2" placeholder="Enter Your Email Address">
    </div>
	<div class="form-group">
	    <label for="username">Username</label>*
<input type="text" class="form-control" name="username" placeholder="Create A Username">
    </div>
	<div class="form-group">
	    <label for="password">Password</label>*
<input type="password" class="form-control" name="password" placeholder="Enter A Password">
    </div>
	<div class="form-group">
	    <label for="password2">Confirm Password</label>*
<input type="password" class="form-control" name="password2" placeholder="Enter Password Again">
    </div>					
	<div class="form-group">
	    <button name="submit" type="submit" class="btn btn-primary">Register</button>
        <button name="reset" type="reset" class="btn btn-primary">Cancel</button>
    </div>
    </form>		
</div>