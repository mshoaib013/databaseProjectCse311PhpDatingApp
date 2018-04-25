<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="cssHome.css">
    <script src="jsHome.js"></script>

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="home.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a> -->
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
<!--       <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</div>
</nav>
<div class="container">
<div class="row"> 
		<div class="col-lg-3"></div>		
		<div class="col-lg-6">
			<div class="feeds col-lg-6">
						<!-- <div class="feed">
						    <div class="feed-header">
						      <a class="feed-author-name">Steve</a>
						      <a class="feed-time">  &nbsp &nbsp &nbsp &nbsp &nbsp    3 hours ago..</a>
						    </div>
						    <div >
						      <img src="http://cdn1.sciencefiction.com/wp-content/uploads/2015/08/naruto.jpg" />
						    </div>
						    <div class="feed-body">Some creepy texts here....</div>
						    <div class="feed-footer">
						      <i class="fa fa-heart-o nx"></i>
						      <input type="text" class="ny" placeholder="Add a comment..."/>
						      <i class="fa fa-sort-down nz"></i>
						    </div>
			 			</div> -->
			 			<div class="feed">
						    <div class="feed-header">
						      <a class="feed-author-name">Steve</a>
						      <a class="feed-time">  &nbsp &nbsp &nbsp &nbsp &nbsp    3 hours ago..</a>
						    </div>
						    <div >
						      <img src="http://cdn1.sciencefiction.com/wp-content/uploads/2015/08/naruto.jpg" />
						    </div>
						    <div class="feed-body">Some creepy texts here....</div>
						    <div class="feed-footer">
						      <i class="fa fa-heart-o nx"></i>
						      <input type="text" class="ny" placeholder="Add a comment..."/>
						      <i class="fa fa-sort-down nz"></i>
						    </div>
			 			</div>
			 			<div class="feed">
						    <div class="feed-header">
						      <a class="feed-author-name">Steve</a>
						      <a class="feed-time">  &nbsp &nbsp &nbsp &nbsp &nbsp    3 hours ago..</a>
						    </div>
						    <div >
						      <img src="http://cdn1.sciencefiction.com/wp-content/uploads/2015/08/naruto.jpg" />
						    </div>
						    <div class="feed-body">Some creepy texts here....</div>
						    <div class="feed-footer">
						      <i class="fa fa-heart-o nx"></i>
						      <input type="text" class="ny" placeholder="Add a comment..."/>
						      <i class="fa fa-sort-down nz"></i>
						    </div>
			 			</div>
			</div>	
		</div>
		<div class="col-lg-3">
						        <h4 class="d-flex justify-content-between align-items-center mb-3">
						            <span class="text-muted">Take a Look</span>
						            <span class="badge badge-secondary badge-pill">3</span>
						        </h4>
						        <ul class="list-group mb-3">
						            <li class="list-group-item d-flex justify-content-between lh-condensed">
						              <div>
						                <h6 class="my-0">Follower</h6>
						                <small class="text-muted">People who are following you..</small>
						              </div>
						              <span class="text-muted">12</span>
						            </li>
						            <li class="list-group-item d-flex justify-content-between lh-condensed">
						              <div>
						                <h6 class="my-0">Following</h6>
						                <small class="text-muted">People you follow</small>
						              </div>
						              <span class="text-muted">8</span>
						            </li>
						            <li class="list-group-item d-flex justify-content-between lh-condensed">
						              <div>
						                <h6 class="my-0">Notifications</h6>
						                <small class="text-muted">Brief description</small>
						              </div>
						              <span class="text-muted">5</span>
						            </li>
						        </ul>
	
		</div>
</div>
</body>
</html>