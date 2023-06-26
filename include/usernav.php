<style>
  
  .navbar-brand {
    margin-left: 10px;
  }
  .navbar {
    background-color: #880808;
  }
 
  .nav-item{
    margin-top:40px;
  }
  .sp_class{
    color:white;
   font-size:15px;
   margin-right:26px;
margin-bottom:-1000px
  }
  .sp_class2{
  color:white;
  font-size:15px;
  margin-right:26px;
   margin-bottom:-22px;

  }

  body{
    background-image: url("img/db_donation.jpg");
    background-color:white
  }
.flex{
  margin-left:10px
}




</style>

<body>
<!-- Navigation starts -->
<nav id="mainNav" class="navbar fixed-top navbar-expand-lg">
  <div class="flex">
  <img src="img/3.png" alt="Our Vission" class="img img-responsive" style="width:70px;margin-top:2px">
  <a class="navbar-brand" href="./index.php" ><span style="color:white; font-size:13px; margin-bottom:-200px;margin-top:40px">DONATE THE BLOOD<br><center>save the life</center></span></a>
  </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation" style="color:yellow; background-color:gold">
    <span class="navbar-toggler-icon custom-toggler-icon"></span>
</button>



  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      
    </ul>
    
    <ul class="navbar-nav form-inline my-2 my-lg-0">
    <li class="nav-item">
  <a class="nav-link"  href="index.php"><p class="sp_class">Home</p></a>
</li>


      <li class="nav-item">
        <a class="nav-link" href="donate.php"><p class="sp_class">Donate</p></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="donor.php"><p class="sp_class">Donors</p></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="search.php"><p class="sp_class">Search</p></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="signin.php"><p class="sp_class">Signin</p></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="about.php"><p class="sp_class">About Us</p></a>
      </li>
      <li class="nav-item dropdown sp_class2" >
      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white !important;">
    <?php if(isset($_SESSION['name'])) echo $_SESSION['name']; ?>
</a>


        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" >
          
          <a class="dropdown-item" href="user/index.php"><i class="fa fa-user" aria-hidden="true"></i>Profile</a>

          <a class="dropdown-item" href="user/update.php"><i class="fa fa-edit" aria-hidden="true"></i>
Update Profile</a>

          <a class="dropdown-item" href="user/include/logout.php">
          <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>

Logout</a>
          </div>
      </li>
    </ul>
  </div>
</nav>
      
        
      </body>