<?php include 'header.php' 
?>
<div class="container mt-5">

    <?php include 'flashmessages.php'
     ?>
    <div class="card card-register">

    	<h4 class="card-header">Login</h4>

    	<div class="card-body">
	        <form action="." method="POST">

	          <input type="hidden" name="action" value="login"></input>

	          <div class="form-group">

	            <label for="email">Email</label>
	            <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email address">
	
	
		</div>

	          <div class="form-group">

	            <label for="last-name">Password</label>
	            <input type="password" class="form-control" id="password" name="password" placeholder="********">

	          </div>

	          <button type="submit" class="btn btn-primary btn-block">Login</button>

	        </form>
	    </div>
	<div>
</div>
<?php include 'footer.php'
 ?>
