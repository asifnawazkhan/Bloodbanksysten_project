<?php
include('include/config.php');

if(isset($_GET['city']) && !empty($_GET['city']) && isset($_GET['blood_group']) && !empty($_GET['blood_group'])){
$city=$_GET['city'];
$blood_group=$_GET['blood_group'];

	$sql = "SELECT * FROM donate where city='$city' OR blood_group='$blood_group'";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
		if ($row['save_life_date'] == '0') {
			echo '
			<div class="col-md-3 col-sm-12 col-lg-3 donors_date">
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
				<div class="col-md-3 col-sm-12 col-lg-3 donors_date">
				<span class="name span1">' . $row['name'] . '</span>
				<span class="span1">' . $row['city'] . '</span>
				<span class="span1">' . $row['blood_group'] . '</span>
				<span class="span1">' . $row['gender'] . '</span>
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
}

?>
