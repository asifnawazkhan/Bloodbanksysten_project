<?php 

	//include header file
	include ('include/header.php');

?>

<style>
.container-fluid{
	



}


.opecity{
	background-image: url("img/germ.jpg");
}
.row{
	margin-top:50px;
	
}
.card{
	background-color: transparent;



}

.red{
	color:white;
	
}

.header-img{
	margin-top:55px;
}
.text_color{
	color:white;
	font-family: 'Poppins';
  src: url('path/to/font.ttf') format('truetype');}

  .R_image:hover {
      animation: flip 0.8s linear 4;
      transform-style: preserve-3d;

    }
	.R_image{
		border: 4px solid white; /* Add border properties */
		padding:20px
	}

    @keyframes flip {
      0% {
        transform: rotateY(0deg);
      }
      25% {
        transform: rotateY(90deg);
      }
      50% {
        transform: rotateY(180deg);
      }
      75% {
        transform: rotateY(270deg);
      }
      100% {
        transform: rotateY(360deg);
      }
    }
.center{
	display: flex;
      justify-content: center;
      margin: 0;
}
.bg_color_rol {
  background: rgba(93, 3, 3, 0.76);
  height: 400px;
  display: flex;
  justify-content: center;
  margin-top: 2%;
  align-items: center;
}
h5 .Org_red{
	color:#880808;
	font-size:34px;
	font-weight:bold;
	
}
h5 .Target_blac{
	color:black;
	font-size:34px;
	font-weight:bold;
	margin-left:10px;

}
h5.text-center{
	margin-top:10%
}
.layout1{
	background: rgba(93, 3, 3, 0.76);
	justify-content:center;
	align-items:center;
	align-content:center;
}
.layout2{
	background: rgba(93, 3, 3, 0.76);
	justify-content:center;
	align-items:center;
	align-content:center;
	
}
.center_lay_1_2{
	justify-content:center;
	margin-top:140px;
  grid-gap: 20px;

}
.question {
			margin-bottom: 5px;
		
			cursor: pointer;
			color:white
		}
		
		.answer {
			margin-bottom: 20px;
			display: none;
			color:white;
			font-size:12px;
		}
		.question2 {
			margin-bottom: 5px;
		
			cursor: pointer;
			color:white
		}
		
		.answer2 {
			margin-bottom: 20px;
			display: none;
			color:white;
			font-size:12px;
		}
		hr {
    border: none;
    border-top: 1px dotted white;
  }
</style>
<div class="container-fluid header-img">
				<div class="row">
				
				<div class="col-md-6 offset-md-3">

						<div class="header">
							
						<p class="text-center">Donate the blood to help the others.</p>
						</div>


						<h1 class="text-center">Search The Donors</h1>
						<hr class="white-bar text-center">

						<form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center justify-content-center">
							
								<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
	<option value="">-- Select --</option><optgroup title="Azad Jammu and Kashmir (Azad Kashmir)" label="&raquo; Azad Jammu and Kashmir (Azad Kashmir)"></optgroup><option value="Bagh" >Bagh</option><option value="Bhimber" >Bhimber</option><option value="Kotli" >Kotli</option><option value="Mirpur" >Mirpur</option><option value="Muzaffarabad" >Muzaffarabad</option><option value="Neelum" >Neelum</option><option value="Poonch" >Poonch</option><option value="Sudhnati" >Sudhnati</option><optgroup title="Balochistan" label="&raquo; Balochistan"></optgroup><option value="Awaran" >Awaran</option><option value="Barkhan" >Barkhan</option><option value="Bolan" >Bolan</option><option value="Chagai" >Chagai</option><option value="Dera Bugti" >Dera Bugti</option><option value="Gwadar" >Gwadar</option><option value="Jafarabad" >Jafarabad</option><option value="Jhal Magsi" >Jhal Magsi</option><option value="Kalat" >Kalat</option><option value="Kech" >Kech</option><option value="Kharan" >Kharan</option><option value="Khuzdar" >Khuzdar</option><option value="Kohlu" >Kohlu</option><option value="Lasbela" >Lasbela</option><option value="Loralai" >Loralai</option><option value="Mastung" >Mastung</option><option value="Musakhel" >Musakhel</option><option value="Naseerabad" >Naseerabad</option><option value="Nushki" >Nushki</option><option value="Panjgur" >Panjgur</option><option value="Pishin" >Pishin</option><option value="Qilla Abdullah" >Qilla Abdullah</option><option value="Qilla Saifullah" >Qilla Saifullah</option><option value="Quetta" >Quetta</option><option value="Sibi" >Sibi</option><option value="Zhob" >Zhob</option><option value="Ziarat" >Ziarat</option><optgroup title="Federally Administered Tribal Areas (FATA" label="&raquo; Federally Administered Tribal Areas (FATA"></optgroup><option value="Bajaur Agency" >Bajaur Agency</option><option value="Khyber Agency" >Khyber Agency</option><option value="Kurram Agency" >Kurram Agency</option><option value="Mohmand Agency" >Mohmand Agency</option><option value="North Waziristan Agency" >North Waziristan Agency</option><option value="Orakzai Agency" >Orakzai Agency</option><option value="South Waziristan Agency" >South Waziristan Agency</option><optgroup title="Islamabad Capital" label="&raquo; Islamabad Capital"></optgroup><option value="Islamabad" >Islamabad</option><optgroup title="North-West Frontier Province (NWFP)" label="&raquo; North-West Frontier Province (NWFP)"></optgroup><option value="Abbottabad" >Abbottabad</option><option value="Bannu" >Bannu</option><option value="Batagram" >Batagram</option><option value="Buner" >Buner</option><option value="Charsadda" >Charsadda</option><option value="Chitral" >Chitral</option><option value="Dera Ismail Khan" >Dera Ismail Khan</option><option value="Dir Lower" >Dir Lower</option><option value="Dir Upper" >Dir Upper</option><option value="Hangu" >Hangu</option><option value="Haripur" >Haripur</option><option value="Karak" >Karak</option><option value="Kohat" >Kohat</option><option value="Kohistan" >Kohistan</option><option value="Lakki Marwat" >Lakki Marwat</option><option value="Malakand" >Malakand</option><option value="Mansehra" >Mansehra</option><option value="Mardan" >Mardan</option><option value="Nowshera" >Nowshera</option><option value="Peshawar" >Peshawar</option><option value="Shangla" >Shangla</option><option value="Swabi" >Swabi</option><option value="Swat" >Swat</option><option value="Tank" >Tank</option><optgroup title="Punjab" label="&raquo; Punjab"></optgroup><option value="Alipur" >Alipur</option><option value="Attock" >Attock</option><option value="Bahawalnagar" >Bahawalnagar</option><option value="Bahawalpur" >Bahawalpur</option><option value="Bhakkar" >Bhakkar</option><option value="Chakwal" >Chakwal</option><option value="Chiniot" >Chiniot</option><option value="Dera Ghazi Khan" >Dera Ghazi Khan</option><option value="Faisalabad" >Faisalabad</option><option value="Gujranwala" >Gujranwala</option><option value="Gujrat" >Gujrat</option><option value="Hafizabad" >Hafizabad</option><option value="Jhang" >Jhang</option><option value="Jhelum" >Jhelum</option><option value="Kasur" >Kasur</option><option value="Khanewal" >Khanewal</option><option value="Khushab" >Khushab</option><option value="Lahore" >Lahore</option><option value="Layyah" >Layyah</option><option value="Lodhran" >Lodhran</option><option value="Mandi Bahauddin" >Mandi Bahauddin</option><option value="Mianwali" >Mianwali</option><option value="Multan" >Multan</option><option value="Muzaffargarh" >Muzaffargarh</option><option value="Nankana Sahib" >Nankana Sahib</option><option value="Narowal" >Narowal</option><option value="Okara" >Okara</option><option value="Pakpattan" >Pakpattan</option><option value="Rahim Yar Khan" >Rahim Yar Khan</option><option value="Rajanpur" >Rajanpur</option><option value="Rawalpindi" >Rawalpindi</option><option value="Sahiwal" >Sahiwal</option><option value="Sargodha" >Sargodha</option><option value="Sheikhupura" >Sheikhupura</option><option value="Shekhupura" >Shekhupura</option><option value="Sialkot" >Sialkot</option><option value="Toba Tek Singh" >Toba Tek Singh</option><option value="Vehari" >Vehari</option><optgroup title="Sindh" label="&raquo; Sindh"></optgroup><option value="Badin" >Badin</option><option value="Dadu" >Dadu</option><option value="Ghotki" >Ghotki</option><option value="Hyderabad" >Hyderabad</option><option value="Jacobabad" >Jacobabad</option><option value="Jamshoro" >Jamshoro</option><option value="Karachi" >Karachi</option><option value="Kashmore" >Kashmore</option><option value="Khairpur" >Khairpur</option><option value="Larkana" >Larkana</option><option value="Matiari" >Matiari</option><option value="Mirpur Khas" >Mirpur Khas</option><option value="Naushahro Feroze" >Naushahro Feroze</option><option value="Nawabshah" >Nawabshah</option><option value="Qambar Shahdadkot" >Qambar Shahdadkot</option><option value="Sanghar" >Sanghar</option><option value="Shikarpur" >Shikarpur</option><option value="Sukkur" >Sukkur</option><option value="Tando Allahyar" >Tando Allahyar</option><option value="Tando Muhammad Khan" >Tando Muhammad Khan</option><option value="Tharparkar" >Tharparkar</option><option value="Thatta" >Thatta</option><option value="Umerkot" >Umerkot</option></select>
							</div>
							<div class="form-group center-aligned">
								<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">
									
									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O-</option>
									<option value="O-">O+</option>

								</select>
							</div>
							<div class="form-group center-aligned">
								<button type="submit" class="btn btn-lg btn-danger" style="background-color:#880808">Search</button>
							</div>
						</form>
					</div>
				</div>
</div>
			<!-- header ends -->

			<!-- donate section -->
			<div class="container-fluid red-background opecity" >
				<div class="row" id="back_color_donated">
					<div class="col-md-12" >
						<h1 class="text-center"  style="color: black; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
						<hr class="white-bar">
						<p class="text-center pera-text" style="color: dark">
						Donate the Blood: Saving Lives, One Drop at a Time. Join our mission to make a difference by donating blood and giving hope to those in need. Your generous contribution can be the lifeline that transforms lives and brings smiles to faces. Together, let's create a healthier and stronger community.
						"Every donation counts towards building a resilient society, where compassion and solidarity flow through our veins. Join our blood donation community today and be a hero in someone's story."
						</p>
						<a href="#" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
					</div>
				</div>
			</div>
			<!-- end doante section -->
			
			<h5 class="text-center red"><span class="Org_red">Organization</span> <span class="Target_blac">Target</span></h5>	
			<div class="container-fluid" >
				<div class="row bg_color_rol">
					
    				<div class="col">
    					<div class="card">
     						
								
								<a href="Vision.php" class="center"><img src="img/b-p.png" alt="Our Vission" class="img img-responsive R_image" width="128" height="128"></a>	
								<h5 class="text-center red">Our Vission</h5>	
						</div>
    				</div>
    				
    				<div class="col">
    					<div class="card">
      							
								
								<a href="Goal.php" class="center"><img src="img/leader.png" alt="Our Goal" class="img img-responsive R_image" width="128" height="128"></a>	
								<h5 class="text-center red">Our Goal</h5>
						</div>
    				</div>
    			
    				<div class="col">
    					<div class="card">
      						
							  <a href="Mission.php" class="center"><img src="img/mission.png" alt="Our Vission" class="img img-responsive R_image" width="128" height="128"></a>	
							  <h5 class="text-center red">Our Mission</h5>
							</div>
   			 		</div>
 			</div>
 		</div>

			<!-- end aboutus section -->
			<div class="container-fluid" >
				<div class="row center_lay_1_2">
            <div class="col-lg-4 layout1">
			<h3 style="color:white; margin-top:40px;margin-bottom:20px;">Frequently Asked Questions</h3>
			<div class="question">&bull; How can I donate blood?</div>
<div class="answer">To donate blood, you can visit your local blood donation center or a mobile blood drive. Ensure that you meet the eligibility criteria and follow the necessary steps for donation.</div>
<hr style="color:white">
<div class="question">&bull; Can I be a regular donor?</div>
<div class="answer">Yes, if you meet the requirements for blood donation, you can become a regular donor. Regular blood donation is important to maintain a steady supply of blood for those in need.</div>
<hr>
<div class="question">&bull; How are platelets prepared?</div>
<div class="answer">Platelets are prepared through a process called apheresis, where blood is drawn from the donor, passed through a machine that separates platelets, and then returns the remaining blood components back to the donor.</div>
<hr>
<div class="question">&bull; What is blood? How much blood does a person have?</div>
<div class="answer">Blood is a vital fluid in the body that carries oxygen, nutrients, hormones, and waste products. An average adult has about 4.5 to 5.5 liters of blood circulating in their body.</div>
<hr>
<div class="question" style="margin-bottom:30px">&bull; What is blood composition?</div>
<div class="answer">Blood is composed of red blood cells, white blood cells, platelets, and plasma. Red blood cells carry oxygen, white blood cells help fight infections, platelets aid in blood clotting, and plasma is the liquid portion that carries the blood components.</div>

			</div>
			<div class="col-lg-4 layout2">
			<h3 style="color:white; margin-top:40px;margin-bottom:20px;">Achievements and Awards</h3>
			<div class="question2">&bull; Regional Blood Center at Multan</div>
<div class="answer2">To donate blood, you can visit your local blood donation center or a mobile blood drive. Ensure that you meet the eligibility criteria and follow the necessary steps for donation.</div>
<hr style="color:white">
<div class="question2">&bull; Regional Blood Center at Bahawalpur</div>
<div class="answer2">Yes, if you meet the requirements for blood donation, you can become a regular donor. Regular blood donation is important to maintain a steady supply of blood for those in need.</div>
<hr>
<div class="question2">&bull;Service Hospital Gynae Blood Bank</div>
<div class="answer2">Platelets are prepared through a process called apheresis, where blood is drawn from the donor, passed through a machine that separates platelets, and then returns the remaining blood components back to the donor.</div>
<hr>
<div class="question2">&bull; Blood Bank at Shahbaz Sharif Hospital Multan</div>
<div class="answer2">Blood is a vital fluid in the body that carries oxygen, nutrients, hormones, and waste products. An average adult has about 4.5 to 5.5 liters of blood circulating in their body.</div>
<hr>
<div class="question2" style="margin-bottom:30px">&bull; What is blood composition?</div>
<div class="answer2">Blood is composed of red blood cells, white blood cells, platelets, and plasma. Red blood cells carry oxygen, white blood cells help fight infections, platelets aid in blood clotting, and plasma is the liquid portion that carries the blood components.</div>

			</div>

				</div><!--row div-->		
			</div><!--Container div-->		

<!--script file-->
<script>
		window.addEventListener('DOMContentLoaded', function() {
			var questions = document.querySelectorAll('.question');
			
			questions.forEach(function(question) {
				question.addEventListener('click', function() {
					var answer = this.nextElementSibling;
					answer.style.display = answer.style.display === 'none' ? 'block' : 'none';
				});
			});
		});



		//for Question and answer 2
		window.addEventListener('DOMContentLoaded', function() {
			var questions = document.querySelectorAll('.question2');
			
			questions.forEach(function(question) {
				question.addEventListener('click', function() {
					var answer = this.nextElementSibling;
					answer.style.display = answer.style.display === 'none' ? 'block' : 'none';
				});
			});
		});
	</script>

<?php
//include footer file
include ('include/footer.php');
 ?>

