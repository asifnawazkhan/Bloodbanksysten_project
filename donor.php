<?php	
	
	include ('include/header.php'); 

?>

<style>
	.size {
		min-height: 0px;
		padding: 10px 0 0px 0;
	}
	.loader {
		display: none;
		width: 69px;
		height: 89px;
		position: absolute;
		top: 25%;
		left: 50%;
		padding: 2px;
		z-index: 1;
	}
	.loader .fa {
		color: #e74c3c;
		font-size: 52px !important;
	}
	.form-group {
		text-align: left;
	}
	h1 {
		color: white;
	}
	h3 {
		color: #e74c3c;
		text-align: center;
	}
	.red-bar {
		width: 25%;
	}
	.white-bar{
		background-color:#880808;
	}
	.span1 {
		display: block;
	}
	.name {
		color: #e74c3c;
		font-size: 22px;
		font-weight: 700;
		margin-bottom: 5px;
	}
	.name2 {
		color: green;
		font-size: 22px;
		font-weight: 700;
		margin-bottom: 5px;
	}
	.donors_data {
		background-color: white;
		border-radius: 5px;
		margin: 20px 5px 0px 5px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
		-moz-box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
		box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
		padding: 20px;
		transition: transform 0.3s ease;
		border:2px solid #880808;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(93, 3, 3, 0.76);;
-moz-box-shadow: 0px 2px 5px -2px rgba(93, 3, 3, 0.76);
box-shadow: 0px 40px 60px -2px rgba(93, 3, 3, 0.76);

	}
	.row_data {
		display: flex;
  flex-wrap: wrap;

	
}
.span1{
	width: 100.33%; /* Each block takes up 33.33% of the container width */
  box-sizing: border-box;
}


	.donors_data:hover {
		transform: translateY(-5px);
	}
</style>

<div class="container-fluid size">
	<div class="row">
		<div class="col-md-6 offset-md-3" style="margin-top:50px">
			<h1 class="text-center" style="margin-top:40px; color:#880808">Donors</h1>
			<hr class="white-bar">
		</div>
	</div>
</div>


	<!--<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Are you delete this record?</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <form target="" method="post">
                <br>
                <input type="hidden" name="delId" value="">
                <button type="submit" name="delete" class="btn btn-danger">Yes</button>

                <button type="button" class="btn btn-info" data-dismiss="alert">
                <span aria-hidden="true">Oops! No </span>
                </button>      
            </form>
     </div>

     <br>

     <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Message</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
-->
<div class="container" style="padding: 60px 0;">
	<div class="row_data" style=" justify-content:center;">
	<?php
$sql = "SELECT * FROM donate";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
		if ($row['save_life_date'] == '0') {
			echo '
			<div class="col-md-3 col-sm-12 col-lg-5 donors_data">
			<span class="name span1">' . $row['name'] . '</span>
			<span class="span1">City: ' . $row['city'] . '</span>
			<span class="span1">Blood Group: ' . $row['blood_group'] . '</span>
			<span class="span1">Gender: ' . $row['gender'] . '</span>
			<span class="span1">Contact No: ' . $row['contact_no'] . '</span>
			<h3 class="name2 text-center">Available</h3>
		</div>
			';
		} else {
			echo '
			<div class="col-md-3 col-sm-12 col-lg-5 donors_data">
			<span class="name span1">' . $row['name'] . '</span>
			<span class="span1">City: ' . $row['city'] . '</span>
			<span class="span1">Blood Group: ' . $row['blood_group'] . '</span>
			<span class="span1">Gender: ' . $row['gender'] . '</span>
			
			<h3 class="name text-center">Donated</h3>
		</div>
			';
		}
		
    }
} else {
    echo '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data is not available</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    ';
}
?>



	</div>
</div>
<div class="loader" id="wait">
	<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>
</div>

