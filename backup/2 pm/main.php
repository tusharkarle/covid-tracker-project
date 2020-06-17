<!DOCTYPE html>
<html>
<head>
	<title>covid-19 tracker INDIA</title>

	<link rel="stylesheet" type="text/css" href="additional/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="additional/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="additional/jquery-ui.structure.css">
	<link rel="stylesheet" type="text/css" href="additional/jquery-ui.structure.min.css">
	<link rel="stylesheet" type="text/css" href="additional/jquery-ui.theme.css">
	<link rel="stylesheet" type="text/css" href="additional/jquery-ui.theme.min.css">


	<script src="additional/jquery.js"></script>
	<script src="additional/jquery-ui.js"></script>
	<script src="additional/jquery-ui.min.js"></script>


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- 
		ALSO ADDED CDN
-->



	



</head>

	<style type="text/css">

	*{
		margin: 0;
		padding: 0;
		color: white;


	}

	.container{

		background-color: black;

	}

	.info{

		width:100%;
		text-align: center;
	}
		

	</style>
	
</head>




	


<body>

	<div class="container" style="width:100%;height:100%;margin: 0;padding: 0;">


			<div class="modal1">
			
				  <!-- Modal -->
				  <div class="modal fade" id="myModal" role="dialog"  style="background-color: black;">
				    <div class="modal-dialog modal-lg">
				      <div class="modal-content" style="background-color: black;">
				        <div class="modal-header" >
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Alert</h4>
				        </div>
				        <div class="modal-body" style="background-color: black;">

				        	<div>
				        		<h3>Search data for :-</h3>

				        		<h3 id="location">$$$</h3>

				        		<input type="hidden" name="state" value="" id="state">
				        		<input type="hidden" name="district" value="" id="district">


				        	</div>
				         
				        </div>
				        <div class="modal-footer">
				          <button type="button" id="ok-clicked" class="btn btn-default" data-dismiss="modal">OK</button>
				          <button type="button" id="search-clicked" class="btn btn-default" data-dismiss="modal">Search Manually</button>

				        </div>
				      </div>
				    </div>
				  </div>


				  <script type="text/javascript">

				  		 fetch("https://ipapi.co/json/")

						 .then( (apidata1)=>{
						 	//console.log(apidata);
						 	return apidata1.json();
						 })
						 .then((actualdata1)=>{
						 	console.log(actualdata1);

						 	console.log(actualdata1.city+","+actualdata1.region+","+actualdata1.country_name);

						 	var district=actualdata1.city;
						 	var state1=actualdata1.region;

						 	$("#location").text(actualdata1.city+","+actualdata1.region+","+actualdata1.country_name);

						 	$("#state").attr("value",state1);
						 	$("#district").attr("value",district);
						 	




						 });
				  	
				  </script>
			</div>


			<div class="modal2">
			
				  <!-- Modal -->
				  <div class="modal fade" id="getlocationModal" role="dialog"  style="background-color: black;">
				    <div class="modal-dialog modal-lg">
				      <div class="modal-content" style="background-color: black;">
				        <div class="modal-header" >
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Select the state</h4>
				        </div>
				        <div class="modal-body" style="background-color: black;">

				        	<div>
				        		<label>State</label>
				        			<select id="sele" style="background-color: black;color: white;">
				        				<option>select the states</option>

				        			</select>



								<br>			        		
				        		<label>District</label>

				        	</div>
				         
				        </div>
				        <div class="modal-footer">
				          <button type="button" id="search-clicked" class="btn btn-default" data-dismiss="modal">Search</button>
				          

				        </div>
				      </div>
				    </div>
				  </div>


				  <script type="text/javascript">

				  		 fetch("https://api.covid19india.org/data.json")

						 .then( (apidata)=>{
						 	//console.log(apidata);
						 	return apidata.json();
						 })
						 .then((actualdata)=>{
						 	console.log(actualdata);
						 	console.log(actualdata.statewise.length);
						 	
						 	for(var a=1;a<=actualdata.statewise.length;a++){

						 		console.log(actualdata.statewise[a].state);
						 		var s=actualdata.statewise[a].state;
						 		//$("#sele").append('<option value="${a}">${s}</option>');

						 		$('#sele').append(new Option(s, a));
							 	}


								})
						 .catch((error)=>{

						 	console.log(error);
						 }


						 	);
				  	
				  </script>
			</div>
		

		<div class="heading">
			<h1 id="title">
				COVID-19 TRACKER
			</h1>



		</div>

		
 
		
		
		<div class="middle">


			<div class="info">

				<h2>Stay Home Stay Safe</h2>

			</div>
			<br>
			<br>


			<div class="india-info">
				<div style="display: inline-flex;margin-left: 45%;">
					<div style="display: flex;width: 100%;">
					<h1>INDIA</h1>
					<img src="resources/india-flag.jpg" width="50px" height="50px">
					</div>
				</div>

				<br>

				<div class="india-info-data" width=100% style="text-align: center;display: flex;">

					<div style="width: 30%; background-color: blue;border-radius: 30%;">
						<h2>Total Confirmed <br> Cases</h2>
						<h1 id="india-confirmed">$$$$</h1>
						
					</div>


					<div style="width: 25%;background-color: green;border-radius: 30%;">
						<h2 style="margin-top: 5%;">Recovered</h2>
						<br>
						<h1 id="india-recovered">$$$$</h1>
						
					</div>


					<div style="width: 25%;background-color: red;border-radius: 30%;">
						<h2 style="margin-top: 5%;">Deaths</h2>
						<br>
						<h1 id="india-death">$$$$</h1>
						
					</div>


					<div style="width: 22.5%;background-color:#003333;border-radius: 30%;">
						<h2 style="margin-top: 5%;">Active Cases</h2>
						<br>
						<h1 id="india-active">$$$$</h1>
						
					</div>


					<script type="text/javascript">
						
					 fetch("https://api.covid19india.org/data.json")

						 .then( (apidata)=>{
						 	//console.log(apidata);
						 	return apidata.json();
						 })
						 .then((actualdata)=>{
						 	console.log(actualdata);
						 	var dataobj=actualdata.statewise[0];

						 	$("#india-confirmed").text(dataobj.confirmed);
						 	$("#india-recovered").text(dataobj.recovered);
						 	$("#india-death").text(dataobj.deaths);
						 	$("#india-active").text(dataobj.active);

						 });

					</script>


					
					
				</div>

				<div class="statewise">
					
						


				</div>


			</div>



			
		</div>	

	</div>

</body>


</html>



<script type="text/javascript">
	$(document).ready( function()
	{

		$("#myModal").modal('show');


		$("#search-clicked").click(function(){

			
			$("#getlocationModal").modal('show');

			


		});

		$("#ok-clicked").click(function(){

			var district=$("#district").attr("value");
			var stat=$("#state").attr("value");
			

			$.ajax({
				url:"using-ip.php",
				type:"post",
				data:{
					
					state:stat,
					district:district

					
				},
				success:function(result){

					$(".statewise").html(result);
				}
			});

		});


		$("#search-clicked").click(function(){

			


		});






		

	});
</script>