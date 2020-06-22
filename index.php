
<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap 4 Example</title>
  <?php
  include 'Links/links.php';
  include 'CSS/style.php';
  ?>



  <script type="text/javascript">
	
	function func(){
	       $.get("https://api.covid19api.com/summary",
               
               function(data){
               	// console.log(data['Countries'].length);

               	var tbval=document.getElementById('tbval');
               	var i;
               	for( i=1;i < (data['Countries'].length);i++){

               		var x=tbval.insertRow();
               		x.insertCell(0);
               		tbval.rows[i].cells[0].innerHTML= data['Countries'][i-1]['Country'];
               		tbval.rows[i].cells[0].style.background="#7a4a91";
               	    tbval.rows[i].cells[0].style.color="white";
               	    x.insertCell(1)
               	    tbval.rows[i].cells[1].innerHTML= data['Countries'][i-1]['TotalConfirmed'];
               		tbval.rows[i].cells[1].style.background="#7a4a91";
                    
                    x.insertCell(2);
               		tbval.rows[i].cells[2].innerHTML= data['Countries'][i-1]['TotalRecovered'];
               		tbval.rows[i].cells[2].style.background="#7a4a91";
                   
                    x.insertCell(3);
               		tbval.rows[i].cells[3].innerHTML= data['Countries'][i-1]['TotalDeaths'];
               		tbval.rows[i].cells[3].style.background="#7a4a91";

                    x.insertCell(4);
               		tbval.rows[i].cells[4].innerHTML= data['Countries'][i-1]['NewConfirmed'];
               		tbval.rows[i].cells[4].style.background="#7a4a91";
               		
               		x.insertCell(5);
               		tbval.rows[i].cells[5].innerHTML= data['Countries'][i-1]['NewRecovered'];
               		tbval.rows[i].cells[5].style.background="#7a4a91";

                    x.insertCell(6);
               		tbval.rows[i].cells[6].innerHTML= data['Countries'][i-1]['NewDeaths'];
               		tbval.rows[i].cells[6].style.background="#7a4a91";	
               	}

               }
	       	);
	}
</script>
</head>


<body onload="func()">


<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">Covid-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sectionid">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      
    </ul>
    
  </div>
</nav>

<div class="main_header">
	<div class="row r-100 w-100">
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 
		order-2 mt-3">
			<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
				<img src="images/5.jpg" width="300" height="300">
			</div>
		</div>
		<div class="col-lg-7 col-md-7 col-12 order-lg-2
		order-1">
			<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
            <h1>
            	Let's Stay Safe and Fight Together Against Cor
            	<span class="corona_rotate "> 
                 <img src="images/2.png">
            	</span>ona Virus
            </h1>
			</div>
		</div>
	</div>
</div>
<!-- **************** corona latest  updates **************** -->
<br>
<br><br>
<section class="container-fluid corona_update">
	
	<div class="mb-3">
		<h3 class="text-uppercase  text-center">covid-10 updates</h3>


		<div class=" table-responsive">

			<table class=" table table-bordered table-stripped text-center " id="tbval">
			<tr>
					<th>Country</th>
					<th>TotalConfirmed</th>
					<th>TotalRecovered</th>
					<th>TotalDeaths</th>
					<th>NewConfirmed</th>
					<th>NewRecovered</th>
					<th>NewDeaths</th>
				</tr>
			</table>
			
		</div>
		<!-- <div class="d-flex justify-content-around align-items-center">
			<div>
				<h1 class="count">123344</h1>
				<p> Passengera scrrened at airport</p>
			</div>
			<div>
				<h1 class="count">512</h1>
				<p> Active Covid-19 cases</p>
			</div>
			<div>
				<h1 class="count">123344</h1>
				<p> Cured/ Discahrged</p>
			</div>
			<div>
				<h1 class="count">123344</h1>
				<p> Death</p>
			</div>
		</div> -->
		
	</div>
</section>


<!-- ****************** about section *************** -->

<div class="container-fluid sub_section pt-5 pb-5 id="sectionid">
	<div class="section_header text-center mb-5 mt-4">
		<h1> About Covid-19</h1>
	</div>

	<div class="row pt-5">
		<div class="col-lg-5 col-md-6 col-12 ml-5 ">
			<img src="images/1.jpg" <!-- class="img-fluid" -->>
		</div>

	<div class="col-lg-6 col-md-6 col-12">
		<h2> What is COVID-19 (Corona - Virus ) </h2>
		<p>
			Covid-19 is the infectiosknsn
			n,xn,,xmnzsssssss ssssssssssssssss nnnnnn
		</p>
		<p>
			qwert wert rtyu yhvbjd bbcghgg hhhhhh jjj iiiiii ooooo  jjjjjjjjjj jjjjj j ooooo pppp aaaaa
		</p>
		
	</div>
</div>
</div>
<!-- ***************************corona symptoms********** -->
<div class="container-fluid  pt-5 pb-5 id="aboutid">
	<div class="section_header text-center mb-5 mt-4">
		<h1> Corona Symptoms</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5" >
				<figure class="text-center">
				<img src="images/4.jpg" class="img-fluid" width="120" height="120">
				<figcaption>Cough</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5" >
				<figure class="text-center">
				<img src="images/4.jpg" class="img-fluid" width="120" height="120">
				<figcaption>Cough</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5" >
				<figure class="text-center">
				<img src="images/4.jpg" class="img-fluid" width="120" height="120">
				<figcaption>Cough</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5" >
				<figure class="text-center">
				<img src="images/4.jpg" class="img-fluid" width="120" height="120">
				<figcaption>Cough</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5" >
				<figure class="text-center">
				<img src="images/4.jpg" class="img-fluid" width="120" height="120">
				<figcaption>Cough</figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5" >
				<figure class="text-center">
				<img src="images/4.jpg" class="img-fluid" width="120" height="120">
				<figcaption>Cough</figcaption>
				</figure>
			</div>
	</div>
    
</div>
</div>


<!-- **************Prevenetion Against Coronavirus ********** -->

<div class="container-fluid  sub_section pt-5 pb-5 id="aboutid">
	<div class="section_header text-center mt-4 mb-4 ">
		<h1> 6 STeps Prevention Against  Corona</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4">
					<figure class="text-center">
						<img src="images/5.png" class="img-fluid" width="90" height="90">
					</figure>
				    </div>
				    <div class="col-lg-8 col-md-8 col-12 ">
					  <p>
						Wash your hadnd gently like a diamond yin in yuor uhhshs jdnndndjj dhhddbdn djj d
					  </p>
				    </div>
			   </div>
		    </div>
		    <div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4">
					<figure class="text-center">
						<img src="images/5.png" class="img-fluid" width="90" height="90">
					</figure>
				    </div>
				    <div class="col-lg-8 col-md-8 col-12 ">
					  <p>
						Wash your hadnd gently like a diamond yin in yuor uhhshs jdnndndjj dhhddbdn djj d
					  </p>
				    </div>
			   </div>
		    </div>
		    <div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4">
					<figure class="text-center">
						<img src="images/5.png" class="img-fluid" width="90" height="90">
					</figure>
				    </div>
				    <div class="col-lg-8 col-md-8 col-12 ">
					  <p>
						Wash your hadnd gently like a diamond yin in yuor uhhshs jdnndndjj dhhddbdn djj d
					  </p>
				    </div>
			   </div>
		    </div>
		    <div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4">
					<figure class="text-center">
						<img src="images/5.png" class="img-fluid" width="90" height="90">
					</figure>
				    </div>
				    <div class="col-lg-8 col-md-8 col-12 ">
					  <p>
						Wash your hadnd gently like a diamond yin in yuor uhhshs jdnndndjj dhhddbdn djj d
					  </p>
				    </div>
			   </div>
		    </div>
		    <div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4">
					<figure class="text-center">
						<img src="images/5.png" class="img-fluid" width="90" height="90">
					</figure>
				    </div>
				    <div class="col-lg-8 col-md-8 col-12 ">
					  <p>
						Wash your hadnd gently like a diamond yin in yuor uhhshs jdnndndjj dhhddbdn djj d
					  </p>
				    </div>
			   </div>
		    </div>
		    <div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4">
					<figure class="text-center">
						<img src="images/5.png" class="img-fluid" width="90" height="90">
					</figure>
				    </div>
				    <div class="col-lg-8 col-md-8 col-12 ">
					  <p>
						Wash your hadnd gently like a diamond yin in yuor uhhshs jdnndndjj dhhddbdn djj d
					  </p>
				    </div>
			   </div>
		    </div>
		
	</div>
</div>
</div>

<!-- **************** COntact US ASAP************* -->

<div class="container-fluid   pt-5 pb-5 id="aboutid">
	<div class="section_header text-center mt-4 mb-4 ">
		<h1> Contact US ASAP</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8  offset-lg-2 col-12">
				<form action="" method="POST">
<div class="form-group">
    <label >username</label>
    <input type="text" class="form-control"  name="username"placeholder="Name" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label >Email address</label>
    <input type="email" class="form-control"  name="email"placeholder="Email" autocomplete="off" required>
  </div>
  
  <div class="form-group">
    <label >Mobile</label>
    <input type="number" class="form-control"  name="mobile"placeholder="Mobile" autocomplete="off" required>
  </div>
  
  <div class="form-group">
  	<label>Select Symptoms</label><br>

  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  		<input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
  		<label class="custom-control-label" for="customcheckbox1">Cold</label>
  	</div>

  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  		<input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
  		<label class="custom-control-label" for="customcheckbox2">Fever</label>
  	</div>

  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  		<input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
  		<label class="custom-control-label" for="customcheckbox3">Breath</label>
  	</div>

  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  		<input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="sore">
  		<label class="custom-control-label" for="customcheckbox4">Sore Throat</label>
  	</div>
  	
  </div>


  <div class="form-group">
    <label >Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
   <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
			</div>
		</div>
		
	</div>

</div>


</body>
</html>

<?php

include 'dbcon.php';

if(isset($_POST['submit'])){
	$username= $_POST['username'];
	$email= $_POST['email'];
	$mobile= $_POST['mobile'];
	$symp= $_POST['coronasym'];
	$msg= $_POST['msg'];

	$chk="";
	foreach($symp as $chk1){
		$chk .= $chk1.",";
	}
	$insertquery="insert into coronacase(username,email,mobile,symp, message) values('$username','$email','$mobile','$chk','$msg') ";
	$query = mysqli_query($con,$insertquery);
	if($con){
	?>
	<script>
		alert("insertion successful");
	</script>
	<?php
}
else{
	?>
	<script>
		alert(" Not Inserted ");
	</script>
	<?php

}
}
?>






 
