

<!DOCTYPE html>
<html>
   <head>
      <title>User Information</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="test.css">
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         <a class="navbar-brand" href="#">Home</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
               <!-- <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
               </li> -->
               <!-- <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
               </li> -->
              <!--  <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="#">Action</a>
                     <a class="dropdown-item" href="#">Another action</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#">Something else here</a>
                  </div>
               </li> -->
              <!--  <li class="nav-item">
                  <a class="nav-link disabled" href="#">Disabled</a>
               </li> -->
            </ul>
            <!-- <form class="form-inline my-2 my-lg-0">
               <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
               <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> --> 
         </div>
      </nav>
      <div class="jumbotron">
  <h1 class="display-4 container">Hello, User!</h1>
  <p class="container lead">Put your personal information so other users can find you easily...</p>
  
</div>
      <div class="container">
      <form role="form" action="yourinfoBackend.php" method="post" class="registration-form">
         <div>
            <h5>Gender</h5>
         </div>
         <div class="input-group mb-3">
            <div class="input-group-prepend">
               <label class="input-group-text" for="inputGroupSelect01">Sex</label>
            </div>
            <select class="custom-select" name="gender" id="gender">
               <option selected="">Choose...</option>
               <option value="Male">Male</option>
               <option value="Female">Female</option>
               <option value="Other">Other..</option>
            </select>
         </div>
         <div>
            <h5>Age</h5>
         </div>
         <div class="input-group mb-3">
            <select class="custom-select" name="age" id="age">
               <option selected="">Select Age</option>
               <option value="18">18</option>
               <option value="19">19</option>
               <option value="20">20</option>
               <option value="21">21</option>
               <option value="22">22</option>
               <option value="23">23</option>
               <option value="24">24</option>
               <option value="25">25</option>
               <option value="26">26</option>
               <option value="27">27</option>
               <option value="28">28</option>
               <option value="29">29</option>
               <option value="30">30</option>
               <option value="31">31</option>
               <option value="32">32</option>
               <option value="33">33</option>
               <option value="34">34</option>
            </select>
         </div>
         <div>
            <h5>Religion</h5>
         </div>
         <div class="input-group mb-3">
            <div class="input-group-prepend">
               <label class="input-group-text" for="inputGroupSelect01">Religion</label>
            </div>
            <select class="custom-select" name="religion" id="religion">
               <option selected="">Choose...</option>
               <option value="Muslim">Muslim</option>
               <option value="Hindu">Hindu</option>
               <option value="Buddha">Buddha</option>
               <option value="Others">Others</option>
            </select>
         </div>
         <div>
            <h5>Skin Color</h5>
         </div>
         <div class="input-group mb-3">
            <div class="input-group-prepend">
               <label class="input-group-text" for="inputGroupSelect01">Skin Color</label>
            </div>
            <select class="custom-select" name="skincolor" id="skincolor">
               <option selected="">Choose...</option>
               <option value="White">White</option>
               <option value="Brown">Brown</option>
               <option value="Black">Black</option>
            </select>
         </div>
         <div>
            <h5>Height</h5>
         </div>
         <div class="input-group mb-3">
            <select class="custom-select" name="feet" id="feet">
               <option selected="">Feet</option>
               <option value="3">3</option>
               <option value="4">4</option>
               <option value="5">5</option>
               <option value="6">6</option>
            </select>
            <select class="custom-select" name="inch" id="inch">
               <option selected="">Inch</option>
               <option value="1">01</option>
               <option value="2">02</option>
               <option value="3">03</option>
               <option value="4">04</option>
               <option value="5">05</option>
               <option value="6">06</option>
               <option value="7">07</option>
               <option value="8">08</option>
               <option value="9">09</option>
               <option value="10">10</option>
               <option value="11">11</option>
            </select>
         </div>
         <div>
            <h5>Location</h5>
         </div>
         <div class="input-group mb-3">
            <div class="input-group-prepend">
               <label class="input-group-text" for="inputGroupSelect01">Place You live</label>
            </div>
            <!-- <select class="form-group" id="inputGroupSelect01"> -->
               <input type="text" class="form-control" name="location" id="location" placeholder="Place">
            <!-- </select> -->
         </div>
         <div>
            <h5>Education</h5>
         </div>
         <div class="input-group mb-3">
            <div class="input-group-prepend">
               <label class="input-group-text" for="inputGroupSelect01">Education</label>
            </div>
            <select class="custom-select" name="education" id="education">
               <option selected="">Choose...</option>
               <option value="High School Graduate">High School Graduate</option>
               <option value="College Graduate">College Graduate</option>
               <option value="University Graduate">University Undergraduate</option>
               <option value="Post Graduate">Post Graduate</option>
            </select>
         </div>
          
         <div class="form-group">
         <label class="input-group-text" for="inputGroupSelect01">Select your profile photo..</label>
            <input type="file" class="form-control-file" name="photo" id="photo">
         </div>
         <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </div>
   </form>
   </body>
</html>

