<?php 
// include header file
include('include/header.php');

if(isset($_POST['SignIn'])){
	if (isset($_POST['email']) && !empty($_POST['email'])) {
		$email = $_POST['email'];
	} else {
		$emailerror = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Please fill in your email field.</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>';
	}
	
	if (isset($_POST['password']) && !empty($_POST['password'])) {
		$password = $_POST['password'];
		
	} else {
		$passworderror = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Please fill in your password field.</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>';
	}
	
	// Password checking
	if (isset($email) && isset($password)) { 
		$sql = "SELECT * FROM donate WHERE password = '$password' AND email = '$email'";
		$result = mysqli_query($connection, $sql);
		
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				$_SESSION['user_id'] = $row['id'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['save_life_date'] = $row['save_life_date'];
				header('Location: user/index.php');
			}
		} else {
			$submiterror = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Sorry! No record found. Please enter a valid email and password.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>';
		}
	}
}
?>

<style>
.size {
		padding: 0 0 70px 0;
	}
	h1{
		color: white;
	}
	.form-group{
		text-align: left;
	}
	h3{
		color: #880808;
		text-align: center;
	}
	.red-bar{
		width: 25%;
	}
	.form-container{
		background-color: white;
		border: .5px solid #eee;
		border-radius: 10px;
		padding: 20px 10px 20px 30px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(93, 3, 3, 0.76);;
-moz-box-shadow: 0px 2px 5px -2px rgba(93, 3, 3, 0.76);
box-shadow: 0px 40px 60px -2px rgba(93, 3, 3, 0.76);
	}
</style>
 <div class="container-fluid size">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center">SignIn</h1>
		</div>
	</div>
</div>
<div class="conatiner size ">
	<div class="row">
		<div class="col-md-6 offset-md-3 form-container">
		<h3>SignIn</h3>
		<hr class="red-bar">
		<?php if(isset($submiterror)) echo $submiterror; ?>
		
		<!-- Erorr Messages -->

			<form action="" method="post" >
				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" name="email" class="form-control" placeholder="Email">
				</div>
				<?php if(isset($emailerror)) echo $emailerror; ?>

				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" placeholder="Password"  class="form-control">
				</div>
				<?php if(isset($passworderror)) echo $passworderror; ?>
				<div class="form-group">
					<button class="btn btn-danger btn-lg center-aligned" style="background-color:#880808" type="submit" name="SignIn">SignIn</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php include 'include/footer.php' ?>
